<?php

namespace App\Repositories;

use App\Interfaces\UserInterface;
use App\Models\User;
use Illuminate\Pagination\Paginator;

/**
 * Gitリポジトリ
 */
class UserRepository implements UserInterface
{

    /** @var User $userRepository */
    private $userRepository;

    /**
     * construct
     *
     * @param User $user
     */
    public function __construct(User $userRepository) 
    {
        $this->userRepository = $userRepository;
    }

    /**
     * 自身以外のユーザを全て取得
     *
     * @param int $id
     * @param int $page
     * @return Paginator
     */
    public function findAllOtherOwn(int $id, int $page): Paginator
    {
        //第２引数は取得するカラム名、第３引数は表示ページのクエリ文字列、第4引数は該当ページ数
        return $this->userRepository->where('id','!=',$id)->simplePaginate(5, ['*'], 'page', $page);
    }

    /**
     * ユーザ一件の取得
     *
     * @param int $id
     * @return User|null
     */
    public function findOne(int $id): ?User
    {
        return $this->userRepository->where('id','=',$id)->first();
    }

    /**
     * 登録・更新の共通処理
     *
     * @param User $userInstance
     * @param Array $userInfo
     * @return void
     */
    public function save(User $userInstance, Array $userInfo)
    {
        if(empty($userInfo)){
            return;
        }

        $userInstance->fill($userInfo);

        $userInstance->save();
    }

    /**
     * ユーザの削除
     *
     * @param User $user
     * @return void
     */
    public function delete(User $user)
    {
        if(empty($user->first())){
            return;
        }

        $user->delete();
    }

}