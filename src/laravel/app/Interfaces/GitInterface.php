<?php

namespace App\Interfaces;

use App\Repositories\GitRepository;
use App\Models\Git;
use Illuminate\Pagination\LengthAwarePaginator;

interface GitInterface 
{

    /**
     * 一覧取得
     *
     * @param integer $page
     * @return LengthAwarePaginator
     */
    public function findAll(int $page): LengthAwarePaginator;

    /**
     * 一件取得
     *
     * @param int|null $id
     * @return Git
     */
    public function findOne(?int $id):Git;

    /**
     * 登録・更新共通処理
     *
     * @param Git $gitInstance 対象インスタンス
     * @param array $gitInfo 登録情報配列
     * @return void
     */
    public function save(Git $gitInstance, array $gitInfo);

    /**
     * 削除
     *
     * @param Git $git
     * @return void
     */
    public function delete(Git $git);
}