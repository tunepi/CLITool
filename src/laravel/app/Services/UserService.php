<?php

namespace App\Services;

use App\Interfaces\UserInterface;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class UserService
{
    /** @var UserInterface ユーザインターファイス */
    private UserInterface $userInterface;

    public function __construct(UserInterface $userInterface)
    {
        $this->userInterface = $userInterface;
    }

    /**
     * 自身以外のユーザリスト取得
     *
     * @param integer $id
     * @return Collection
     */
    public function findAllOtherOwn(int $id): Collection
    {
        return $this->userInterface->findAllOtherOwn($id);
    }

    /**
     * ユーザの一件取得
     *
     * @param integer $id
     * @return User|null
     */
    public function findOne(int $id): ?User
    {
        return $this->userInterface->findOne($id);
    }

    /**
     * ユーザ情報の更新
     *
     * @param Request $request
     * @return void
     */
    public function update(Request $request)
    {
        if($request === null){
            return;
        }

        $id = $request->id;

        $user = $this->userInterface->findOne($id);

        return $this->userInterface->update($user, $request);
    }

    public function delete(Request $request)
    {
        if($request === null){
            return;
        }

        $id = $request->id;

        $user = $this->userInterface->findOne($id);

        return $this->userInterface->delete($user);
    }
}