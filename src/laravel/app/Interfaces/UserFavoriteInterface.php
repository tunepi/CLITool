<?php
namespace App\Interfaces;

use App\Models\UserFavorite;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

/** ユーザお気に入りインターフェイス */
interface UserFavoriteInterface
{
    /**
     * 全取得
     *
     * @param integer $userId
     * @param integer $type
     * @return LengthAwarePaginator
     */
    public function findAll(int $userId, int $type, string $withName): LengthAwarePaginator;

    /**
     * 1件の取得
     *
     * @param integer $userId
     * @param integer $commandId
     * @param integer $type
     * @param string $withName
     * @return UserFavorite|null
     */
    public function findOne(int $userId, int $commandId, int $type, string $withName): ?UserFavorite;

    /**
     * 登録処理
     *
     * @param UserFavorite $userFavoriteInstance
     * @param Array $favoriteInfo
     * @return void
     */
    public function save(UserFavorite $userFavoriteInstance, Array $favoriteInfo);
}

?>