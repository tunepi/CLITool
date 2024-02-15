<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Services\GitService;
use App\Services\GitOptionService;
use App\Http\Requests\GitOption\CreateRequest;
use Illuminate\Http\RedirectResponse;

/** GitOptionコントローラ */
class GitOptionController extends Controller
{
    /** @var GitService $gitService */
    private GitService $gitService;

    /** @var GitOptionService $gitOptionService */
    private GitOptionService $gitOptionService;

    public function __construct(GitService $gitService, GitOptionService $gitOptionService)
    {
        $this->gitService = $gitService;
        $this->gitOptionService = $gitOptionService;
    }

    /**
     * 管理用GitページURL
     *
     * @param Request $request
     * @return \Inertia\Response
     */
    public function index(Request $request): \Inertia\Response
    {
        $git = $this->gitService->findOne($request);

        //リダイレクト時、ページ数の保持のために使用
        if (empty($request->old('page'))) {
            $page = $request->has('page') ? $request->page : 1;
        } else {
            $page = $request->old('page');
        }

        $gits = $this->gitOptionService->findAll($git->id, $page);

        //gitページのページネーション値の取得
        if (empty($request->old('current_page'))) {
            $currentPage = $request->has('current_page') ? $request->current_page : 1;
        } else {
            $currentPage = $request->old('current_page');
        }

        if (empty($request->old('git_type'))) {
            $gitType = $request->has('git_type') ? $request->git_type : 0;
        } else {
            $gitType = $request->old('git_type');
        }

        return Inertia::render('GitOptionList', [
            'git' => $git,
            'gits' => $gits,
            'general' => false,
            'current_page' => $currentPage,
            'git_type' => $gitType
        ]);
    }

    /**
     * 一般用GitOptionページ
     *
     * @param Request $request
     * @return \Inertia\Response
     */
    public function general(Request $request): \Inertia\Response
    {
        $git = $this->gitService->findOne($request);

        //リダイレクト時、ページ数の保持のために使用
        if (empty($request->old('page'))) {
            $page = $request->has('page') ? $request->page : 1;
        } else {
            $page = $request->old('page');
        }

        $gits = $this->gitOptionService->findAll($git->id, $page);

        //gitページのページネーション値の取得
        if (empty($request->old('current_page'))) {
            $currentPage = $request->has('current_page') ? $request->current_page : 1;
        } else {
            $currentPage = $request->old('current_page');
        }


        if (empty($request->old('git_type'))) {
            $gitType = $request->has('git_type') ? $request->git_type : 0;
        } else {
            $gitType = $request->old('git_type');
        }

        if (empty($request->old('searchWord'))) {
            $searchWord = $request->has('searchWord') ? $request->searchWord : '';
        } else {
            $searchWord = $request->old('searchWord');
        }

        return Inertia::render('GitOptionList', [
            'git' => $git,
            'gits' => $gits,
            'general' => true,
            'current_page' => $currentPage,
            'git_type' => $gitType,
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
        $this->gitOptionService->create($request);

        return $this->commonRedirectGitOptionList($request);
    }

    /**
     * 更新
     *
     * @param CreateRequest $request
     * @return RedirectResponse
     */
    public function update(CreateRequest $request): RedirectResponse
    {
        $this->gitOptionService->update($request);

        return $this->commonRedirectGitOptionList($request);
    }

    /**
     * 削除
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function delete(Request $request): RedirectResponse
    {
        $this->gitOptionService->delete($request);

        return $this->commonRedirectGitOptionList($request);
    }

    /**
     * GitOption一覧：共通リダイレクト
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    private function commonRedirectGitOptionList(Request $request): RedirectResponse
    {
        $page = $request->has('page') ? $request->page : 1;

        //必ずリダイレクトすること
        return redirect()->route('gitOption', [
            'id' => $request->git_id,
            'page' => $page
        ]);
    }
}
