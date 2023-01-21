<?php
namespace App\Services;

use App\Interfaces\UserFavoriteInterface;
use Illuminate\Http\Request;
use App\Models\UserFavorite;
use Illuminate\Support\Facades\Log;

class UserFavoriteService
{
    /** @var UserInterface ユーザインターファイス */
    private UserFavoriteInterface $userFavoriteInterface;

    public function __construct(UserFavoriteInterface $userFavoriteInterface)
    {
        $this->userFavoriteInterface = $userFavoriteInterface;
    }

    public function findAll(int $userId, int $type, string $route)
    {
        //複数になった場合foreachで回して取得
        return $this->userFavoriteInterface->findAll($userId, $type, $route);
    }

    public function findOne(Request $request, string $route)
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

        $userFavoriteInstance = new UserFavorite();

        return $this->userFavoriteInterface->save($userFavoriteInstance, $userFavoriteInfo);
    }
    
    /**
     * 登録か解除か
     *
     * @param Request $request
     * @param integer $isFavorite
     * @return void
     */
    public function registerOrCancel(Request $request, int $isFavorite, string $route)
    {
        $userFavoriteInfo = [
            'is_favorite' => $isFavorite
        ];

        $userFavoriteInstance = $this->userFavoriteInterface->findOne($request->user_id, $request->command_id, $request->type, $route);

        return $this->userFavoriteInterface->save($userFavoriteInstance, $userFavoriteInfo);

    }
}


?>