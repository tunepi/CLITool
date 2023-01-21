<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Services\GitService;
use App\Services\GitOptionService;
use App\Services\UserFavoriteService;
use App\Http\Controllers\GitOptionController;
use App\Models\UserFavorite;
use Illuminate\Support\Facades\Log;
use \Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class UserFavoriteController extends Controller
{
    /** @var GitService $gitService */
    private GitService $gitService;

    /** @var GitOptionService $gitOptionService */
    private GitOptionService $gitOptionService;

    /** @var UserFavoriteService $userFavoriteService */
    private UserFavoriteService $userFavoriteService;

    private GitOptionController $gitOptionController;

    public function __construct(
        GitService $gitService, 
        GitOptionService $gitOptionService, 
        UserFavoriteService $userFavoriteService,
        GitOptionController $gitOptionController
        )
    {
        $this->gitService = $gitService;
        $this->gitOptionService = $gitOptionService;
        $this->userFavoriteService = $userFavoriteService;
        $this->gitOptionController = $gitOptionController;
    }

    public function index(Request $request)
    {
        $user = Auth::user();

        if(empty($request->old('command_type'))){
            $type = $request->has('command_type') ? $request->command_type : 1;
        }else{
            $type = 1;
        }

        $routeArray = UserFavorite::TYPE_AND_ROUTE;

        $favoriteInfo = $this->userFavoriteService->findAll($user->id, $type, $routeArray[strval($type)]);

        if(!empty($request->old('changeFavorite')) && $request->old('registerOrCancel') == 0){
            $favoriteInfo->getCollection()->push($request->old('changeFavorite'));
        }

        return Inertia::render('Favorite',[
            'favorites' => $favoriteInfo,
            'searchCommandType' => $type
        ]);
    }

    /**
     * 新規登録
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function create(Request $request): RedirectResponse
    {
        $this->userFavoriteService->create($request);

        return redirect()->route($request->redirect_url,[
            'id' => $request->parent_command_id
        ]);
    }
    
    /**
     * ブックマーク登録
     *
     * @param Request $request
     * @return RedirectResponse
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
     * @return RedirectResponse
     */
    public function cancel(Request $request): RedirectResponse
    {
        $isFavorite = 0;

        return $this->registerOrCancel($request, $isFavorite);

    }

    /**
     * ブックマーク登録と解除の共通処理
     *
     * @param Request $request
     * @param integer $isFavorite
     * @return RedirectResponse
     */
    private function registerOrCancel(Request $request, int $isFavorite): RedirectResponse
    {
        $routeArray = UserFavorite::TYPE_AND_ROUTE;

        $type = !empty($request->type) ? $request->type : 1 ;

        $this->userFavoriteService->registerOrCancel($request, $isFavorite, $routeArray[strval($type)]);

        $changeFavorite = $this->userFavoriteService->findOne($request, $routeArray[strval($type)]);

        //&request->old();で値を引き継げるようにする
        $array = ['changeFavorite' => $changeFavorite, 'registerOrCancel' => $isFavorite];

        //ブックマーク画面のリダイレクト
        if($request->redirect_url === 'favorite'){
            return redirect()->route($request->redirect_url)->withInput($array);
        }

        //コマンド画面のリダイレクト
        return redirect()->route($request->redirect_url,[
            'id' => $request->parent_command_id,
        ]);
    }
}
