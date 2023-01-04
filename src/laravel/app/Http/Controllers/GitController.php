<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Services\GitService;
use App\Http\Requests\Git\CreateRequest;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules;
use \Illuminate\Http\RedirectResponse;

class GitController extends Controller
{

    /** @var GitServices $gitService */
    private GitService $gitService;

    public function __construct(GitService $gitService)
    {
        $this->gitService = $gitService;
    }
    /**
     * メイン画面の表示
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        $user = Auth::user();

        if($user === null){
            return Inertia::render('Management');
        }

        //リダイレクト時、ページ数の保持のために使用
        if(empty($request->old('page'))){
            $page = $request->has('page') ? $request->page : 1;
        }else{
            $page = $request->old('page');
        }

        if(empty($request->old('git_type'))){
            $gitType = $request->git_type;
        }else{
            $gitType = null;
        }

        Log::debug($gitType);

        $gitLists = $this->gitService->findAll($page, $gitType);

        return Inertia::render('GitList',[
            'gits' => $gitLists,
            'general' => false,
        ]);
    }

    /**
     * 一般権限の一覧画面
     *
     * @param Request $request
     * @return void
     */
    public function general(Request $request)
    {
        $user = Auth::user();

        if($user === null){
            return Inertia::render('Management');
        }

        //リダイレクト時、ページ数の保持のために使用
        if(empty($request->old('page'))){
            $page = $request->has('page') ? $request->page : 1;
        }else{
            $page = $request->old('page');
        }

        if(empty($request->old('git_type'))){
            $gitType = $request->git_type;
        }else{
            $gitType = null;
        }

        Log::debug($gitType);

        $gitLists = $this->gitService->findAll($page, $gitType);

        return Inertia::render('GitList',[
            'gits' => $gitLists,
            'general' => true
        ]);
    }

    /**
     * 新規登録
     *
     * @param CreateRequest $request
     * @return void
     */
    public function create(CreateRequest $request)
    {
        $this->gitService->create($request);

        return redirect()->route('git');
    }

    /**
     * 更新
     *
     * @param CreateRequest $request
     * @return void
     */
    public function update(CreateRequest $request)
    {
        $this->gitService->update($request);

        return redirect()->route('git');
    }

    /**
     * 削除
     *
     * @param Request $request
     * @return void
     */
    public function delete(Request $request)
    {
        $this->gitService->delete($request);

        return redirect()->route('git');
    }

    public function search(Request $request) 
    {
        Log::debug($request);
        return Inertia::render('GitList',[
            'gits' => $request
        ]);
    }

}
