<?php

namespace App\Services;

use App\Interfaces\GitOptionInterface;

class GitOptionService {
    /** @var GitOptionInterface $gitOptionInterface */
    private GitOptionInterface $gitOptionInterface;

    public function __construct(GitOptionInterface $gitOptionInterface)
    {
        $this->gitOptionInterface = $gitOptionInterface;
    }
}