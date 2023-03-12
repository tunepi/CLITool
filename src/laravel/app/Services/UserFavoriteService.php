<?php
namespace App\Services;

use App\Interfaces\UserFavoriteInterface;
use Illuminate\Http\Request;
use App\Models\UserFavorite;
use Illuminate\Support\Facades\Log;
use Illuminate\Pagination\Paginator;

/** ユーザお気に入りサービス */
class UserFavoriteService
{
    /** @var UserFavoriteInterface $userFavoriteInterface */
    private $userFavoriteInterface;

    /**
     * コンストラクタ
     *
     * @param UserFavoriteInterface $userFavoriteInterface
     */
    public function __construct(UserFavoriteInterface $userFavoriteInterface)
    {
        $this->userFavoriteInterface = $userFavoriteInterface;
    }

    /**
     * 一覧取得
     *
     * @param int $userId
     * @param int $type
     * @param string $route
     * @param int $page
     * @return Paginator
     */
    public function findAll(int $userId, int $type, string $route, int $page): Paginator
    {
        //複数になった場合foreachで回して取得
        return $this->userFavoriteInterface->findAll($userId, $type, $route, $page);
    }

    /**
     * 一件の取得
     *
     * @param Request $request
     * @param string $route
     * @return null|UserFavorite
     */
    public function findOne(Request $request, string $route): ?UserFavorite
    {
        return $this->userFavoriteInterface->findOne($request->user_id, $request->command_id, $request->type, $route);
    }

    /**
     * 新規登録
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        $userFavoriteInfo = [
            'user_id' => $request->user_id,
            'command_id' => $request->command_id,
            'type' => $request->type,
            'is_favorite' => 1
        ];

        $userFavoriteInstance = new UserFavorite;

        Log::debug($userFavoriteInstance);

        $this->userFavoriteInterface->save($userFavoriteInstance, $userFavoriteInfo);
    }
    
    /**
     * 登録か解除か
     *
     * @param Request $request
     * @param int $isFavorite
     * @param string $route
     * @return void
     */
    public function registerOrCancel(Request $request, int $isFavorite, string $route)
    {
        $userFavoriteInfo = [
            'is_favorite' => $isFavorite
        ];

        $userFavoriteInstance = $this->userFavoriteInterface->findOne($request->user_id, $request->command_id, $request->type, $route);

        $this->userFavoriteInterface->save($userFavoriteInstance, $userFavoriteInfo);
    }
}


?>