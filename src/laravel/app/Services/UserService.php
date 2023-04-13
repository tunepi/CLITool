<?php

namespace App\Services;

use App\Interfaces\UserInterface;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\Paginator;

/** ユーザサービス */
class UserService
{
    /** @var UserInterface $userInterface ユーザインターファイス */
    private $userInterface;

    public function __construct(UserInterface $userInterface)
    {
        $this->userInterface = $userInterface;
    }

    /**
     * 自身以外のユーザリスト取得
     *
     * @param int $id
     * @param int $page
     * @return Paginator
     */
    public function findAllOtherOwn(int $id, int $page): Paginator
    {
        return $this->userInterface->findAllOtherOwn($id, $page);
    }

    /**
     * ユーザの一件取得
     *
     * @param int $id
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
        $id = $request->id;

        $user = $this->userInterface->findOne($id);

        /** @var array $userInfo ユーザ登録情報 */
        $userInfo = [
            'name' => $request->name,
            'email' => $request->email,
            'roll' => $request->roll,
        ];

        $this->userInterface->save($user, $userInfo);
    }

    /**
     * ユーザの削除
     *
     * @param Request $request
     * @return void
     */
    public function delete(Request $request)
    {

        $id = $request->id;

        $user = $this->userInterface->findOne($id);

        $this->userInterface->delete($user);
    }
}