<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionReadTreeSeeder extends Seeder
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
                'git_id' => 66,
                'git_option' => '-m',
                'description' => '読み取りだけでなく、マージを実行します。 インデックス ファイルにマージされていないエントリがある場合、コマンドは実行を拒否します。これは、以前に開始したマージが完了していないことを示しています。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 66,
                'git_option' => '--reset',
                'description' => '-m と同じですが、マージされていないエントリは失敗する代わりに破棄されます。 -u とともに使用すると、作業ツリーの変更や追跡されていないファイルやディレクトリの損失につながる更新によって、操作が中止されることはありません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 66,
                'git_option' => '-u',
                'description' => 'マージが成功したら、作業ツリー内のファイルをマージの結果で更新します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 66,
                'git_option' => '-i',
                'description' => '通常、マージでは、ローカルの変更が失われないように、インデックス ファイルと作業ツリー内のファイルが現在のヘッド コミットで最新である必要があります。 このフラグは、作業ツリーのチェックを無効にし、現在の作業ツリーの状態に直接関連しないツリーを一時インデックス ファイルにマージするときに使用することを意図しています。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 66,
                'git_option' => '-n',
                'description' => '実際に作業ツリー内のインデックスまたはファイルを更新せずに、コマンドがエラーになるかどうかを確認します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 66,
                'git_option' => '-v',
                'description' => 'ファイルのチェックアウトの進行状況を表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 66,
                'git_option' => '--trivial',
                'description' => '些細なケースでマージを解決し、競合するファイルをインデックスに未解決のままにするのではなく、必要なファイルレベルのマージがない場合にのみ、git read-tree による 3 者間マージを制限します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 66,
                'git_option' => '--aggressive',
                'description' => '通常、git read-tree による 3 者間マージは、非常に些細なケースのマージを解決し、他のケースは未解決のままインデックスに残します。これにより、磁器は異なるマージ ポリシーを実装できます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 66,
                'git_option' => '--prefix=<prefix>',
                'description' => '現在のインデックスの内容を保持し、<prefix> のディレクトリの下にある名前付きのツリーの内容を読み取ります。 このコマンドは、元のインデックス ファイルに既に存在するエントリの上書きを拒否します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 66,
                'git_option' => '--index-output=<file>',
                'description' => '結果を $GIT_INDEX_FILE に書き込む代わりに、結果のインデックスを名前付きファイルに書き込みます。 コマンドの動作中は、元のインデックス ファイルは通常と同じメカニズムでロックされます。 ファイルは、通常のインデックス ファイルの次に作成される一時ファイルから rename(2) できる必要があります。 通常、これは、インデックス ファイル自体と同じファイル システム上にある必要があり、インデックス ファイルとインデックス出力ファイルが配置されているディレクトリへの書き込み権限が必要であることを意味します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 66,
                'git_option' => '--[no-]recurse-submodules',
                'description' => '--recurse-submodules を使用すると、read-tree を再帰的に呼び出すことで、スーパープロジェクトに記録されたコミットに従ってすべてのアクティブなサブモジュールのコンテンツが更新され、サブモジュールの HEAD がそのコミットでデタッチされるように設定されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 66,
                'git_option' => '--no-sparse-checkout',
                'description' => 'core.sparseCheckout が true の場合でも、スパース チェックアウトのサポートを無効にします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 66,
                'git_option' => '--empty',
                'description' => 'ツリー オブジェクトをインデックスに読み込む代わりに、単に空にします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 66,
                'git_option' => '-q',
                'description' => '静かに、フィードバック メッセージを抑制します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 66,
                'git_option' => '<tree-ish#>',
                'description' => '読み取り/マージするツリー オブジェクトの ID。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
