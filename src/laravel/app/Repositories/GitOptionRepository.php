<?php

namespace App\Repositories;

use App\Interfaces\GitOptionInterface;
use App\Models\GitOption;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Log;

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

    /**
     * 一覧取得
     *
     * 
     * @return LengthAwarePaginator
     */
    public function findAll(int $gitId): LengthAwarePaginator
    {
        //第２引数は取得するカラム名、第３引数は表示ページのクエリ文字列、第4引数は該当ページ数
        // return $this->gitOptionRepository->paginate(5, ['*'], 'page', $page);
        return $this->gitOptionRepository->where('git_id', '=', $gitId)->paginate(5);

    }

    /**
     * 1件取得
     *
     * @param integer|null $id
     * @return null|GitOption
     */
    public function findOne(?int $id): ?GitOption
    {
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
        if($gitOptionInstance === null || empty($gitOptionInfo)){
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
        if($gitOption === null){
            return;
        }

        $gitOption->delete();
    }

}