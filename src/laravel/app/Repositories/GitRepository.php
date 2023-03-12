<?php

namespace App\Repositories;

use App\Interfaces\GitInterface;
use App\Models\Git;
use Illuminate\Pagination\Paginator;

/**
 * Gitリポジトリ
 */
class GitRepository implements GitInterface
{
    //(一度も呼ばれていないためコメントアウト)
    // /** @var Git $gitRepository */
    // // private $gitRepository;

    // /**
    //  * construct
    //  *
    //  * @param Git $gitRepository
    //  */
    // public function __construct(Git $gitRepository)
    // {
    //     $this->gitRepository = $gitRepository;
    // }

    /**
     * 一覧取得
     *
     * @param int $page
     * @param int | null $gitType
     * @param string | null $searchWord
     * @return Paginator
     */
    public function findAll(int $page, ?int $gitType, ?string $searchWord): Paginator
    {
        $query = Git::query();

        if(!empty($gitType)){
            $query->where('git_type', '=', $gitType);
        }

        if(!empty($searchWord)){
            $query->where('git_name', 'LIKE', "%{$searchWord}%");
        }

        //第２引数は取得するカラム名、第３引数は表示ページのクエリ文字列、第4引数は該当ページ数
        return $query->simplePaginate(5, ['*'], 'page', $page);
    }

    /**
     * 一件取得
     *
     * @param int|null $id
     * @return Git
     */
    public function findOne(?int $id):Git
    {
        $query = Git::query();

        if(!empty($id)){
            $query->where('id', '=', $id);
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
        if(empty($gitInfo)){
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
        if(empty($git->first())){
            return;
        }

        $git->delete();
    }

}