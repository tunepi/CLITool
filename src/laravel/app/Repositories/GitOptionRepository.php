<?php

namespace App\Repositories;

use App\Interfaces\GitOptionInterface;
use App\Models\GitOption;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Gitリポジトリ
 */
class GitOptionRepository implements GitOptionInterface
{
    /** @var GitOption */
    private GitOption $gitOption;

    /**
     * construct
     *
     * @param GitOption $gitOption
     */
    public function __construct(GitOption $gitOption) 
    {
        $this->gitOptionRepository = $gitOption;
    }

}