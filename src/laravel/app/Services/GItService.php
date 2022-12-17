<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Interfaces\GitInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests\Git\CreateRequest;
use App\Models\Git;

class GitService
{
    /** @var GitInterface $gitInterface */
    private GitInterface $gitInterface;

    public function __construct(GitInterface $gitInterface)
    {
        $this->gitInterface = $gitInterface;
    }

    /**
     * 一覧取得
     *
     * @param integer $page
     * @return LengthAwarePaginator
     */
    public function findAll(int $page):LengthAwarePaginator
    {
        return $this->gitInterface->findAll($page);
    }

    /**
     * 新規作成
     *
     * @param Request $request
     * @return void
     */
    public function create(CreateRequest $request)
    {
        $gitInfo = [
            'git_name' => $request->git_name,
            'git_type' => $request->git_type,
            'description' => $request->description,
        ];

        $gitInstance = new Git;

        $this->gitInterface->save($gitInstance, $gitInfo);

    }

    /**
     * 更新
     *
     * @param Request $request
     * @return void
     */
    public function update(CreateRequest $request)
    {
        $gitInfo = [
            'git_name' => $request->git_name,
            'git_type' => $request->git_type,
            'description' => $request->description,
        ];

        $gitInstance = $this->gitInterface->findOne($request->id);

        $this->gitInterface->save($gitInstance, $gitInfo);
    }

    /**
     * 削除
     *
     * @param Request $request
     * @return void
     */
    public function delete(Request $request)
    {
        $gitInstance = $this->gitInterface->findOne($request->id);

        $this->gitInterface->delete($gitInstance);
    }
}