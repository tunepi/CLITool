<?php

namespace App\Services;

use App\Interfaces\UserInterface;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;

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
     * @param int $id
     * @param int $page
     * @return Collection
     */
    public function findAllOtherOwn(int $id, int $page): LengthAwarePaginator
    {
        return $this->userInterface->findAllOtherOwn($id, $page);
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
     * ユーザの新規登録
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        if($request === null){
            return;
        }

        /** @var array $userInfo ユーザ登録情報 */
        $userInfo = [
            'name' => $request->name,
            'email' => $request->email,
            'roll' => $request->roll,
            'password' => Hash::make($request->password),
        ];

        $userInstance = new User;

        $this->userInterface->save($userInstance, $userInfo);
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

        /** @var array $userInfo ユーザ登録情報 */
        $userInfo = [
            'name' => $request->name,
            'email' => $request->email,
            'roll' => $request->roll,
        ];

        return $this->userInterface->save($user, $userInfo);
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