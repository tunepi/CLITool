<?php
namespace App\Repositories;

use App\Models\UserFavorite;
use App\Models\User;
use App\Interfaces\UserFavoriteInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Log;
use Illuminate\Pagination\Paginator;

class UserFavoriteRepository implements UserFavoriteInterface
{
    /** @var UserFavorite $userFavoriteRepository */
    private $userFavoriteRepository;

    /**
     * construct
     *
     * @param UserFavorite $userFavorite
     */
    public function __construct(UserFavorite $userFavoriteRepository) 
    {
        $this->userFavoriteRepository = $userFavoriteRepository;
    }

    /**
     * 全取得
     *
     * @param int $userId
     * @param int $type
     * @param string $withName
     * @param int $page
     * @return Paginator
     */
    public function findAll(int $userId, int $type, string $withName, int $page): Paginator
    {
        // return $this->userFavoriteRepository->where('user_id','!=',$userId)->paginate(10, ['*'], 'page', $page);
        return $this->userFavoriteRepository->with($withName)
                                            ->where('user_id','=',$userId)
                                            ->where('type', $type)
                                            ->where('is_favorite', 1)
                                            ->simplePaginate(5, ['*'], 'page', $page);
    }

    /**
     * 1件の取得
     *
     * @param int $userId
     * @param int $commandId
     * @param int $type
     * @param string $withName
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
        if(empty($favoriteInfo)){
            return;
        }

        $userFavoriteInstance->fill($favoriteInfo);

        $userFavoriteInstance->save();
    }


}






?>