<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Services\UserService;
use App\Http\Requests\User\EditRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use \Illuminate\Http\RedirectResponse;

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
     * @param Request $request
     * @return \Inertia\Response
     */
    public function index(Request $request): \Inertia\Response
    {
        $user = Auth::user();

        if ($user === null) {
            return Inertia::render('Management');
        }
        //リダイレクト時、ページ数の保持のために使用
        if (empty($request->old('page'))) {
            $page = $request->has('page') ? $request->page : 1;
        } else {
            $page = $request->old('page');
        }

        $id = $user->id;

        $userLists = $this->userService->findAllOtherOwn($id, $page);

        return Inertia::render('UserList', [
            'users' => $userLists,
        ]);
    }

    /**
     * ユーザの新規登録
     *
     * @param Request $request
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'roll' => ['required'],
        ]);

        $this->userService->create($request);

        $this->commonRedirectUserList($request);
    }

    /**
     * ユーザ情報の更新
     *
     * @param EditRequest $request
     * @return void
     */
    public function update(EditRequest $request)
    {
        $this->userService->update($request);

        $this->commonRedirectUserList($request);
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

        $this->commonRedirectUserList($request);
    }

    /**
     * ユーザ一覧：共通リダイレクト
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    private function commonRedirectUserList(Request $request): RedirectResponse
    {
        $pages = $request->has('page') ? ['page' => $request->page] : ['page' => 1];

        //必ずリダイレクトすること
        return redirect()->route('user')->withInput($pages);
    }
}
