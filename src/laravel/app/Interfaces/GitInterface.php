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
     * 新規登録
     *
     * @param array $gitInfo
     * @return void
     */
    public function create(array $gitInfo);
}