<?php

namespace App\Services;

use App\Interfaces\GitOptionInterface;
use App\Models\GitOption;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

/** GitOptionサービス */
class GitOptionService {
    /** @var GitOptionInterface $gitOptionInterface */
    private GitOptionInterface $gitOptionInterface;

    public function __construct(GitOptionInterface $gitOptionInterface)
    {
        $this->gitOptionInterface = $gitOptionInterface;
    }

    /**
     * 全件取得
     *
     * @param int $gitId
     * @param int $page
     * @return Paginator
     */
    public function findAll(int $gitId, int $page): Paginator
    {
        return $this->gitOptionInterface->findAll($gitId, $page);
    }

    /**
     * 新規登録
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        $gitOptionInfo = [
            'git_id' => $request->git_id,
            'git_option' => $request->git_option,
            'description' => $request->description
        ];

        $gitOptionInstance = new GitOption;

        $this->gitOptionInterface->save($gitOptionInstance, $gitOptionInfo);
    }

    /**
     * 更新
     *
     * @param Request $request
     * @return void
     */
    public function update(Request $request)
    {
        $gitOptionInfo = [
            'git_option' => $request->git_option,
            'description' => $request->description
        ];

        $gitOptionInstance = $this->gitOptionInterface->findOne($request->id);

        $this->gitOptionInterface->save($gitOptionInstance, $gitOptionInfo);
    }

    /**
     * 削除
     *
     * @param Request $request
     * @return void
     */
    public function delete(Request $request)
    {
        $gitOptionInstance = $this->gitOptionInterface->findOne($request->id);

        $this->gitOptionInterface->delete($gitOptionInstance);
    }
}