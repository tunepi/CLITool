<?php

namespace App\Repositories;

use App\Interfaces\GitOptionInterface;
use App\Models\GitOption;
use Illuminate\Pagination\Paginator;

/**
 * Gitリポジトリ
 */
class GitOptionRepository implements GitOptionInterface
{

    /** @var GitOption $gitOptionRepository */
    private $gitOptionRepository;

    /**
     * construct
     *
     * @param GitOption $gitOptionRepository
     */
    public function __construct(GitOption $gitOptionRepository) 
    {
        $this->gitOptionRepository = $gitOptionRepository;
    }

    /**
     * 一覧取得
     * @param int $gitId
     * @param int $page
     * @return Paginator
     */
    public function findAll(int $gitId, int $page): Paginator
    {
        //第２引数は取得するカラム名、第３引数は表示ページのクエリ文字列、第4引数は該当ページ数
        return $this->gitOptionRepository->with('userFavorite', 'git')->where('git_id', '=', $gitId)->simplePaginate(5, ['*'], 'page', $page);

    }

    /**
     * 1件取得
     *
     * @param int|null $id
     * @return null|GitOption
     */
    public function findOne(?int $id): ?GitOption
    {
        $query = GitOption::query();

        if(!empty($id)){
            $query = $this->gitOptionRepository->where('id', '=', $id);
        }

        return $query->first();
    }

    /**
     * 登録・更新共通処理
     *
     * @param GitOption $gitOptionInstance
     * @param Array $gitOptionInfo
     * @return void
     */
    public function save(GitOption $gitOptionInstance, Array $gitOptionInfo)
    {
        if(empty($gitOptionInstance->first()) || empty($gitOptionInfo)){
            return;
        }

        $gitOptionInstance->fill($gitOptionInfo);

        $gitOptionInstance->save();
    }

    /**
     * 削除
     *
     * @param GitOption $gitOption
     * @return void
     */
    public function delete(GitOption $gitOption)
    {
        if(empty($gitOption->first())){
            return;
        }

        $gitOption->delete();
    }

}