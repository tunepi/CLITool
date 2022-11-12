<?php

namespace App\Repositories;

use App\Interfaces\UserInterface;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

/**
 * Gitリポジトリ
 */
class UserRepository implements UserInterface
{
    /** @var User */
    private User $user;

    /**
     * construct
     *
     * @param User $user
     */
    public function __construct(User $user) 
    {
        $this->userRepository = $user;
    }

    /**
     * 自身以外のユーザを全て取得
     *
     * @param integer $id
     * @return Collection
     */
    public function findAllOtherOwn(int $id): Collection
    {
        return $this->userRepository->where('id','!=',$id)->get();
    }

    /**
     * ユーザ一件の取得
     *
     * @param integer $id
     * @return User|null
     */
    public function findOne(int $id): ?User
    {
        return $this->userRepository->where('id','=',$id)->first();
    }

    /**
     * ユーザ情報の更新
     *
     * @param User $user
     * @param Request $request
     * @return void
     */
    public function update(User $user, Request $request)
    {
        if($user === null || $request === null){
            return;
        }

        $target = $user;

        $target->fill([
            'name' => $request->name,
            'email' => $request->email
        ]);

        $target->save();
    }

    /**
     * ユーザの削除
     *
     * @param User $user
     * @return void
     */
    public function delete(User $user)
    {
        if($user === null){
            return;
        }

        $user->delete();
    }

}