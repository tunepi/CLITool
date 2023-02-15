<?php

namespace App\Http\Controllers;

use App\Models\GitOption;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Services\GitService;
use App\Services\GitOptionService;
use App\Http\Requests\GitOption\CreateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

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

    public function index(Request $request)
    {
        $git = $this->gitService->findOne($request);

        //リダイレクト時、ページ数の保持のために使用
        if(empty($request->old('page'))){
            $page = $request->has('page') ? $request->page : 1;
        }else{
            $page = $request->old('page');
        }

        $gits = $this->gitOptionService->findAll($git->id, $page);

        //gitページのページネーション値の取得
        if(empty($request->old('current_page'))){
            $currentPage = $request->has('current_page') ? $request->current_page : 1;
        }else{
            $currentPage = $request->old('current_page');
        }


        if(empty($request->old('git_type'))){
            $gitType = $request->has('git_type') ? $request->git_type : 0;
        }else{
            $gitType = $request->old('git_type');
        }

        return Inertia::render('GitOptionList',[
            'git' => $git,
            'gits' => $gits,
            'general' => false,
            'current_page' => $currentPage,
            'git_type' => $gitType
        ]);
    }

    public function general(Request $request)
    {
        $git = $this->gitService->findOne($request);

        //リダイレクト時、ページ数の保持のために使用
        if(empty($request->old('page'))){
            $page = $request->has('page') ? $request->page : 1;
        }else{
            $page = $request->old('page');
        }

        $gits = $this->gitOptionService->findAll($git->id, $page);

        //gitページのページネーション値の取得
        if(empty($request->old('current_page'))){
            $currentPage = $request->has('current_page') ? $request->current_page : 1;
        }else{
            $currentPage = $request->old('current_page');
        }


        if(empty($request->old('git_type'))){
            $gitType = $request->has('git_type') ? $request->git_type : 0;
        }else{
            $gitType = $request->old('git_type');
        }

        return Inertia::render('GitOptionList',[
            'git' => $git,
            'gits' => $gits,
            'general' => true,
            'current_page' => $currentPage,
            'git_type' => $gitType
        ]);
    }

    /**
     * 新規登録
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function create(CreateRequest $request): RedirectResponse
    {
        $this->gitOptionService->create($request);

        return redirect()->route('gitOption',[
            'id' => $request->git_id
        ]);
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

        return redirect()->route('gitOption',[
            'id' => $request->git_id
        ]);
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

        return redirect()->route('gitOption',[
            'id' => $request->git_id
        ]);
    }
}
