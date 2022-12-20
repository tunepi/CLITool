<?php

namespace App\Interfaces;

use App\Repositories\GitOptionRepository;
use App\Models\GitOption;
use Illuminate\Pagination\LengthAwarePaginator;

interface GitOptionInterface 
{

    /**
     * 一覧取得
     *
     * 
     * @return LengthAwarePaginator
     */
    public function findAll(int $gitId): LengthAwarePaginator;

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