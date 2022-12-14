<?php

namespace App\Repositories;

use App\Interfaces\GitInterface;
use App\Models\Git;

/**
 * Gitリポジトリ
 */
class GitRepository implements GitInterface
{
    /** @var Git */
    private Git $git;

    /**
     * construct
     *
     * @param Git $git
     */
    public function __construct(Git $git) 
    {
        $this->gitRepository = $git;
    }

    /**
     * 新規登録
     *
     * @param array $gitInfo
     * @return void
     */
    public function create(array $gitInfo)
    {
        if(empty($gitInfo)){
            return;
        }

        $newGit = new Git;

        $newGit->fill($gitInfo);

        $newGit->save();
    }

}