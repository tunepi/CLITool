<?php

namespace App\Services;

use App\Interfaces\GitOptionInterface;
use App\Models\GitOption;
use Illuminate\Http\Request;

class GitOptionService {
    /** @var GitOptionInterface $gitOptionInterface */
    private GitOptionInterface $gitOptionInterface;

    public function __construct(GitOptionInterface $gitOptionInterface)
    {
        $this->gitOptionInterface = $gitOptionInterface;
    }

    /**
     * 5件ずつ取得
     *
     * @return void
     */
    public function findAll(int $gitId)
    {
        return $this->gitOptionInterface->findAll($gitId);
    }

    /**
     * 新規登録
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        $gitOptionInfo = [
            'git_id' => $request->git_id,
            'git_option' => $request->git_option,
            'description' => $request->description
        ];

        $gitOptionInstance = new GitOption;

        return $this->gitOptionInterface->save($gitOptionInstance, $gitOptionInfo);
    }

    /**
     * 更新
     *
     * @param Request $request
     * @return void
     */
    public function update(Request $request)
    {
        $gitOptionInfo = [
            'git_option' => $request->git_option,
            'description' => $request->description
        ];

        $gitOptionInstance = $this->gitOptionInterface->findOne($request->id);

        return $this->gitOptionInterface->save($gitOptionInstance, $gitOptionInfo);
    }

    /**
     * 削除
     *
     * @param Request $request
     * @return void
     */
    public function delete(Request $request)
    {
        $gitOptionInstance = $this->gitOptionInterface->findOne($request->id);

        return $this->gitOptionInterface->delete($gitOptionInstance);
    }
}