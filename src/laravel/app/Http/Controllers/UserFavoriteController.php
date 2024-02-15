<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Services\UserFavoriteService;
use App\Models\UserFavorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserFavoriteController extends Controller
{
    /** @var UserFavoriteService $userFavoriteService */
    private UserFavoriteService $userFavoriteService;

    public function __construct(UserFavoriteService $userFavoriteService)
    {
        $this->userFavoriteService = $userFavoriteService;
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return \Inertia\Response
     */
    public function index(Request $request): \Inertia\Response
    {
        $user = Auth::user();

        //リダイレクト時、ページ数の保持のために使用
        if (empty($request->old('page'))) {
            $page = $request->has('page') ? $request->page : 1;
        } else {
            $page = $request->old('page');
        }

        if (empty($request->old('command_type'))) {
            $type = $request->has('command_type') ? $request->command_type : 1;
        } else {
            $type = 1;
        }

        $routeArray = UserFavorite::TYPE_AND_ROUTE;

        $favoriteInfo = $this->userFavoriteService->findAll($user->id, $type, $routeArray[strval($type)], $page);

        return Inertia::render('Favorite', [
            'favorites' => $favoriteInfo,
            'searchCommandType' => $type
        ]);
    }

    /**
     * 新規登録
     *
     * @param Request $request
     */
    public function create(Request $request)
    {
        Log::debug($request);
        $this->userFavoriteService->create($request);
    }

    /**
     * ブックマーク登録
     *
     * @param Request $request
     */
    public function register(Request $request)
    {
        $isFavorite = 1;

        return $this->registerOrCancel($request, $isFavorite);
    }

    /**
     * ブックマーク解除
     *
     * @param Request $request
     */
    public function cancel(Request $request)
    {
        $isFavorite = 0;

        return $this->registerOrCancel($request, $isFavorite);
    }

    /**
     * ブックマーク登録と解除の共通処理
     *
     * @param Request $request
     * @param integer $isFavorite
     */
    private function registerOrCancel(Request $request, int $isFavorite)
    {
        $routeArray = UserFavorite::TYPE_AND_ROUTE;

        $type = !empty($request->type) ? $request->type : 1;

        $this->userFavoriteService->registerOrCancel($request, $isFavorite, $routeArray[strval($type)]);
    }
}
