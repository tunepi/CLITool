<?php
namespace App\Repositories;

use App\Models\UserFavorite;
use App\Models\User;
use App\Interfaces\UserFavoriteInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Log;

class UserFavoriteRepository implements UserFavoriteInterface
{
    /** @var User */
    private User $user;

    /** @var UserFavorite */
    private UserFavorite $userFavorite;

    /**
     * construct
     *
     * @param User $user
     */
    public function __construct(User $user, UserFavorite $userFavorite) 
    {
        $this->userRepository = $user;
        $this->userFavoriteRepository = $userFavorite;
    }

    /**
     * 全取得
     *
     * @param integer $userId
     * @param integer $type
     * @return LengthAwarePaginator
     */
    public function findAll(int $userId, int $type, string $withName): LengthAwarePaginator
    {
        // return $this->userFavoriteRepository->where('user_id','!=',$userId)->paginate(10, ['*'], 'page', $page);
        return $this->userFavoriteRepository->with($withName)
                                            ->where('user_id','=',$userId)
                                            ->where('type', $type)
                                            ->where('is_favorite', 1)
                                            ->paginate(10);
    }

    /**
     * 1件の取得
     *
     * @param integer $userId
     * @param integer $commandId
     * @param integer $type
     * @return UserFavorite|null
     */
    public function findOne(int $userId, int $commandId, int $type, string $withName): ?UserFavorite
    {
        return $this->userFavoriteRepository->with($withName)->where('user_id', $userId)->where('command_id', $commandId)->where('type', $type)->first();
    }

    /**
     * 登録処理
     *
     * @param UserFavorite $userFavoriteInstance
     * @param Array $favoriteInfo
     * @return void
     */
    public function save(UserFavorite $userFavoriteInstance, Array $favoriteInfo)
    {
        if($userFavoriteInstance === null || empty($favoriteInfo)){
            return;
        }

        $userFavoriteInstance->fill($favoriteInfo);

        $userFavoriteInstance->save();
    }


}






?>