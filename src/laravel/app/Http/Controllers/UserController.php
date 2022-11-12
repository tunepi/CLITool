<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use App\Services\UserService;
use App\Http\Requests\User\EditRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /** @var UserService ユーザサービス */
    private UserService $userService;

    /**
     * コンストラクター
     *
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    /**
     * ユーザ一覧の表示
     *
     * @return void
     */
    public function index()
    {
        $user = Auth::user();

        if($user === null){
            return Inertia::render('Management');
        }

        $id = $user->id;

        $userLists = $this->userService->findAllOtherOwn($id);

        return Inertia::render('User/UserList',[
            'users' => $userLists,
        ]);
    }

    /**
     * ユーザ情報の更新
     *
     * @return void
     */
    public function update(EditRequest $request)
    {
        $this->userService->update($request);

        //必ずリダイレクトすること
        return redirect()->route('user');
    }

    /**
     * ユーザの削除（論理）
     *
     * @param Request $request
     * @return void
     */
    public function delete(Request $request)
    {
        $this->userService->delete($request);

        //必ずリダイレクトすること
        return redirect()->route('user');
    }
}
