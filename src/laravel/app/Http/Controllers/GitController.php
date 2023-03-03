<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Services\GitService;
use App\Http\Requests\Git\CreateRequest;
use \Illuminate\Http\RedirectResponse;

/** Gitコントローラ */
class GitController extends Controller
{

    /** @var GitService $gitService */
    private $gitService;

    public function __construct(GitService $gitService)
    {
        $this->gitService = $gitService;
    }
    /**
     * メイン画面の表示
     *
     * @param Request $request
     * @return \Inertia\Response
     */
    public function index(Request $request): \Inertia\Response
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

        if(empty($request->old('searchWord'))){
            $searchWord = $request->searchWord;
        }else{
            $searchWord = null;
        }

        $gitLists = $this->gitService->findAll($page, $gitType, $searchWord);

        return Inertia::render('GitList',[
            'gits' => $gitLists,
            'general' => false,
            'searchGitType' => $gitType,
            'searchWord' => $searchWord
        ]);
    }

    /**
     * 一般権限の一覧画面
     *
     * @param Request $request
     * @return \Inertia\Response
     */
    public function general(Request $request): \Inertia\Response
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

        if(empty($request->old('searchWord'))){
            $searchWord = $request->searchWord;
        }else{
            $searchWord = null;
        }

        $gitLists = $this->gitService->findAll($page, $gitType, $searchWord);

        return Inertia::render('GitList',[
            'gits' => $gitLists,
            'general' => true,
            'searchGitType' => $gitType,
            'searchWord' => $searchWord
        ]);
    }

    /**
     * 新規登録
     *
     * @param CreateRequest $request
     * @return RedirectResponse
     */
    public function create(CreateRequest $request): RedirectResponse
    {
        $this->gitService->create($request);

        return redirect()->route('git');
    }

    /**
     * 更新
     *
     * @param CreateRequest $request
     * @return RedirectResponse
     */
    public function update(CreateRequest $request): RedirectResponse
    {
        $this->gitService->update($request);

        return redirect()->route('git');
    }

    /**
     * 削除
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function delete(Request $request): RedirectResponse
    {
        $this->gitService->delete($request);

        return redirect()->route('git');
    }

}
