<?php

namespace App\Interfaces;

use App\Repositories\GitRepository;
use App\Models\Git;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

interface GitInterface 
{

    /**
     * 一覧取得
     *
     * @param integer $page
     * @param int | null $gitType
     * @return Paginator
     */
    public function findAll(int $page, ?int $gitType, ?string $searchWord): Paginator;

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