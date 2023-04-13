<?php

namespace App\Interfaces;

use App\Models\GitOption;
use Illuminate\Pagination\Paginator;

interface GitOptionInterface 
{

    /**
     * 一覧取得
     *
     * @param int $gitId
     * @param int $page
     * @return Paginator
     */
    public function findAll(int $gitId, int $page): Paginator;

    /**
     * 1件取得
     *
     * @param int|null $id
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