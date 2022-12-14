<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Services\GitService;
use App\Http\Requests\Git\CreateRequest;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules;
use \Illuminate\Http\RedirectResponse;

class GitController extends Controller
{

    /** @var GitServices $gitService */
    private GitService $gitService;

    public function __construct(GitService $gitService)
    {
        $this->gitService = $gitService;
    }
    /**
     * メイン画面の表示
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        $user = Auth::user();

        if($user === null){
            return Inertia::render('Management');
        }

        return Inertia::render('GitList');
    }

    public function create(CreateRequest $request)
    {
        $this->gitService->create($request);

        return redirect()->route('git');
    }
}
