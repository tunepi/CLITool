<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Services\GitService;
use App\Http\Requests\Git\CreateRequest;
use \Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

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

        return $this->commonRedirectGitList($request);
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

        return $this->commonRedirectGitList($request);
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

        return $this->commonRedirectGitList($request);
    }

    /**
     * Git一覧：共通リダイレクト
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    private function commonRedirectGitList(Request $request): RedirectResponse
    {
        $page = $request->has('page') ? $request->page : 1;

        $gitType = $request->has('searchGitType') ? $request->searchGitType : null;
 
        $searchWord = $request->has('searchWord') ? $request->searchWord : null;

        //必ずリダイレクトすること
        return redirect()->route('git',[
            'page' => $page,
            'git_type' => $gitType,
            'searchWord' => $searchWord,
        ]);
    }
}
