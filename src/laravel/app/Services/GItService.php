<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Interfaces\GitInterface;
use App\Http\Requests\Git\CreateRequest;
use App\Models\Git;
use Illuminate\Pagination\Paginator;

/** Gitサービス */
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
     * @param int $page
     * @param int | null $gitType
     * @return Paginator
     */
    public function findAll(int $page, ?int $gitType, ?string $searchWord):Paginator
    {
        return $this->gitInterface->findAll($page, $gitType, $searchWord);
    }

    /**
     * 1件取得
     *
     * @param Request $request
     * @return Git
     */
    public function findOne(Request $request):Git
    {
        return $this->gitInterface->findOne($request->id);
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