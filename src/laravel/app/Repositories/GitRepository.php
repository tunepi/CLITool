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
    }

    /**
     * 一件取得
     *
     * @param int|null $id
     * @return Git
     */
    public function findOne(?int $id):Git
    {
        if(!empty($id)){
            $query = $this->gitRepository->where('id', '=', $id);
        }

        return $query->first();
    }

    /**
     * 登録・更新共通処理
     *
     * @param Git $gitInstance 対象インスタンス
     * @param array $gitInfo 登録情報配列
     * @return void
     */
    public function save(Git $gitInstance, array $gitInfo)
    {
        if($gitInstance === null || empty($gitInfo)){
            return;
        }

        $gitInstance->fill($gitInfo);

        $gitInstance->save();
    }

    /**
     * 削除
     *
     * @param Git $git
     * @return void
     */
    public function delete(Git $git)
    {
        if($git === null){
            return;
        }

        $git->delete();
    }

}