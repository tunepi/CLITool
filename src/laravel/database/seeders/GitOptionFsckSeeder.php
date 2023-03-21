<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionFsckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('git_options')->insert([
            [
                'git_id' => 49,
                'git_option' => '<object>',
                'description' => '到達不能トレースの先頭として扱うオブジェクト。オブジェクトが指定されていない場合、git fsck はデフォルトで、インデックス ファイル、refs 名前空間内のすべての SHA-1 参照、およびすべての reflog ( --no-reflogs が指定されていない限り) を使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 49,
                'git_option' => '--unreachable',
                'description' => '存在するがどの参照ノードからも到達できないオブジェクトを出力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 49,
                'git_option' => '--[no-]dangling',
                'description' => '存在するが直接使用されることのないオブジェクトを出力します (デフォルト)。 --no-dangling を使用して、この情報を出力から省略できます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 49,
                'git_option' => '--root',
                'description' => 'ルート ノードを報告します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 49,
                'git_option' => '--tags',
                'description' => 'タグを報告します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 49,
                'git_option' => '--cache',
                'description' => 'インデックスに記録されたオブジェクトは、到達不能トレースのヘッド ノードとしても考慮してください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 49,
                'git_option' => '--no-reflogs',
                'description' => 'reflog 内のエントリによってのみ参照されるコミットを到達可能と見なさないでください。 このオプションは、以前は ref にあり、現在はそうではなく、対応する reflog にまだあるコミットを検索することのみを目的としています。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 49,
                'git_option' => '--full',
                'description' => 'GIT_OBJECT_DIRECTORY ($GIT_DIR/objects) 内のオブジェクトだけでなく、GIT_ALTERNATE_OBJECT_DIRECTORIES または $GIT_DIR/objects/info/alternates にリストされている代替オブジェクト プール、および $GIT_DIR/objects/pack にあるパックされた Git アーカイブおよび対応するオブジェクトもチェックします。 サブディレクトリを代替オブジェクト プールにパックします。 これがデフォルトになりました。 --no-full でオフにできます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 49,
                'git_option' => '--connectivity-only',
                'description' => '到達可能なオブジェクトの接続のみをチェックし、到達可能なタグ、コミット、またはツリーによって参照されるオブジェクトが存在することを確認します。 これにより、BLOB の読み取りが完全に回避されるため、操作が高速化されます (ただし、参照される BLOB が存在することは確認されます)。 これにより、コミットとツリーの破損が検出されますが、セマンティック チェック (形式エラーなど) は行われません。 BLOB オブジェクトの破損はまったく検出されません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 49,
                'git_option' => '--strict',
                'description' => 'より厳密なチェックを有効にします。つまり、古いバージョンの Git で作成された g+w ビット セットで記録されたファイル モードをキャッチします。 Linux カーネル、Git 自体、スパース リポジトリなどの既存のリポジトリには、このチェックをトリガーする古いオブジェクトがありますが、このフラグを使用して新しいプロジェクトをチェックすることをお勧めします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 49,
                'git_option' => '--verbose',
                'description' => '対話形式',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 49,
                'git_option' => '--lost-found',
                'description' => 'タイプに応じて、ダングリング オブジェクトを .git/lost-found/commit/ または .git/lost-found/other/ に書き込みます。 オブジェクトが BLOB の場合、オブジェクト名ではなく、コンテンツがファイルに書き込まれます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 49,
                'git_option' => '--name-objects',
                'description' => '到達可能なオブジェクトの名前を表示する場合、SHA-1 に加えて、到達可能である方法を説明する名前も表示し、git-rev-parse[1] と互換性があります。 HEAD@{1234567890}~25^2:src/.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 49,
                'git_option' => '--[no-]progress',
                'description' => '--no-progress または --verbose が指定されていない限り、進行状況は、端末に接続されている場合、デフォルトで標準エラー ストリームで報告されます。 --progress は、標準エラー ストリームが端末に向けられていない場合でも、進行状況を強制します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
