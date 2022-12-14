<?php

namespace App\Interfaces;

use App\Repositories\GitRepository;
use App\Models\Git;

interface GitInterface 
{
    /**
     * 新規登録
     *
     * @param array $gitInfo
     * @return void
     */
    public function create(array $gitInfo);
}