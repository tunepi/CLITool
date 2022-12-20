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
        // Log::debug('request'.$request);
        $git = $this->gitService->findOne($request);

        $gits = $this->gitOptionService->findAll($git->id);

        return Inertia::render('GitOptionList',[
            'git' => $git,
            'gits' => $gits
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
        Log::debug('リクエスト内'.$request->id);
        $this->gitOptionService->delete($request);

        return redirect()->route('gitOption',[
            'id' => $request->git_id
        ]);
    }
}
