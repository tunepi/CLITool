<?php
namespace App\Interfaces;

use App\Models\UserFavorite;
use Illuminate\Pagination\Paginator;

/** ユーザお気に入りインターフェイス */
interface UserFavoriteInterface
{
    /**
     * 全取得
     *
     * @param int $userId
     * @param int $type
     * @param string $withName
     * @param int $page
     * @return Paginator
     */
    public function findAll(int $userId, int $type, string $withName, int $page): Paginator;

    /**
     * 1件の取得
     *
     * @param int $userId
     * @param int $commandId
     * @param int $type
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