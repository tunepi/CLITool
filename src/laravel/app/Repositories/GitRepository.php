<?php

namespace App\Repositories;

use App\Interfaces\GitInterface;
use App\Models\Git;
use Illuminate\Pagination\LengthAwarePaginator;

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
     * 一覧取得
     *
     * @param int $page
     * @return LengthAwarePaginator
     */
    public function findAll(int $page): LengthAwarePaginator
    {
        //第２引数は取得するカラム名、第３引数は表示ページのクエリ文字列、第4引数は該当ページ数
        return $this->gitRepository->paginate(5, ['*'], 'page', $page);
        // return $this->gitRepository->paginate(5);
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