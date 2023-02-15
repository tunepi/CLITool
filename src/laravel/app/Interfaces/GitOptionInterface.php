<?php

namespace App\Interfaces;

use App\Repositories\GitOptionRepository;
use App\Models\GitOption;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

interface GitOptionInterface 
{

    /**
     * 一覧取得
     *
     * 
     * @return Paginator
     */
    public function findAll(int $gitId, int $page): Paginator;

    /**
     * 1件取得
     *
     * @param integer|null $id
     * @return null|GitOption
     */
    public function findOne(?int $id): ?GitOption;

    /**
     * 登録・更新共通処理
     *
     * @param GitOption $gitOptionInstance
     * @param Array $gitOptionInfo
     * @return void
     */
    public function save(GitOption $gitOptionInstance, Array $gitOptionInfo);

    /**
     * 削除
     *
     * @param GitOption $gitOption
     * @return void
     */
    public function delete(GitOption $gitOption);
}