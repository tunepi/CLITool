<?php

namespace App\Interfaces;

use App\Models\User;
use Illuminate\Pagination\Paginator;

/**
 *  ユーザインターフェイス
 */
interface UserInterface
{
    /**
     * 自身以外のユーザを全て取得
     *
     * @param int $id
     * @param int $page
     * @return Paginator
     */
    public function findAllOtherOwn(int $id, int $page): Paginator;

    /**
     * ユーザ1件の取得
     *
     * @param int $id
     * @return User|null
     */
    public function findOne(int $id): ?User;

    /**
     * 登録・更新の共通処理
     *
     * @param User $userInstance
     * @param Array $userInfo
     * @return void
     */
    public function save(User $userInstance, Array $userInfo);

    /**
     * ユーザの削除
     *
     * @param User $user
     * @return void
     */
    public function delete(User $user);
}