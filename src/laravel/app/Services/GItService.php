<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Interfaces\GitInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class GitService
{
    /** @var GitInterface $gitInterface */
    private GitInterface $gitInterface;

    public function __construct(GitInterface $gitInterface)
    {
        $this->gitInterface = $gitInterface;
    }

    /**
     * 一覧取得
     *
     * @param integer $page
     * @return LengthAwarePaginator
     */
    public function findAll(int $page):LengthAwarePaginator
    {
        return $this->gitInterface->findAll($page);
    }

    /**
     * 新規作成
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        $gitInfo = [
        'git_name' => $request->git_name,
        'git_type' => $request->git_type,
        'description' => $request->description,
        ];

        $this->gitInterface->create($gitInfo);

    }
}