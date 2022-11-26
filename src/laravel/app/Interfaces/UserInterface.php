<?php

namespace App\Interfaces;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 *  ユーザインターフェイス
 */
interface UserInterface
{
    /**
     * 自身以外のユーザを全て取得
     *
     * @param integer $id
     * @return LengthAwarePaginator
     */
    public function findAllOtherOwn(int $id): LengthAwarePaginator;

    /**
     * ユーザ1件の取得
     *
     * @param int $id
     * @return User|null
     */
    public function findOne(int $id): ?User;

    /**
     * ユーザの新規登録
     *
     * @param Array $userInfo
     * @return void
     */
    public function create(Array $userInfo);

    /**
     * ユーザの情報更新
     *
     * @param User $user
     * @param Request $request
     * @return void
     */
    public function update(User $user, Request $request);

    /**
     * ユーザの削除
     *
     * @param User $user
     * @return void
     */
    public function delete(User $user);
}