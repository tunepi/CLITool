<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionSwitchSeeder extends Seeder
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
                'git_id' => 18,
                'git_option' => '<branch>',
                'description' => 'ブランチを切り替える。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 18,
                'git_option' => '<new-branch>',
                'description' => '新しいブランチ名を入力しそのブランチを作成切り替える。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 18,
                'git_option' => '<start-point>',
                'description' => '新しいブランチの開始点です。<start-point> を指定することで、HEADが現在指している場所とは別のポイントを基点にブランチを作成することができます。(あるいは、-detachの場合、他のポイントから検査して切り離すことができる)。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 18,
                'git_option' => '-c <new-branch>',
                'description' => 'ブランチに切り替える前に、<start-point>を起点として<new-branch>という名前の新しいブランチを作成する。という便利なショートカットです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 18,
                'git_option' => '-C <new-branch>',
                'description' => '<new-branch>が既に存在する場合、<start-point>にリセットされる以外は、-createと同様である。これは便利なショートカットです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 18,
                'git_option' => '-d',
                'description' => '検査や破棄可能な実験についてはコミットに切り替える。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 18,
                'git_option' => '--guess',
                'description' => '<branch>が見つからないが、ちょうど1つのリモート（<remote>と呼ぶ）に、一致する名前の追跡ブランチが存在する場合、以下と同じように扱われます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 18,
                'git_option' => '-f',
                'description' => 'discard-changesのエイリアスです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 18,
                'git_option' => '-m',
                'description' => '現在のブランチと切り替え先のブランチで異なる1つまたは複数のファイルをローカルで変更した場合、コマンドは変更内容をコンテキストに保持するために、ブランチの切り替えを拒否します。しかし、このオプションを使用すると、現在のブランチ、作業ツリーの内容、および新しいブランチの間で3方向のマージが行われ、新しいブランチに移動することになります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 18,
                'git_option' => '--conflict=<style>',
                'description' => '上記の--mergeオプションと同じですが、競合するハンクの表示方法を変更し、merge.conflictStyle構成変数をオーバーライドします。設定可能な値は、"merge"（デフォルト）、"diff3"、"zdiff3 "です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 18,
                'git_option' => '-q',
                'description' => 'フィードバックメッセージのみを表示する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 18,
                'git_option' => '--progress',
                'description' => 'ターミナルにアタッチされている場合、--quietが指定されていない限り、デフォルトで進捗状況が標準エラーストリームに報告されます。このフラグは、ターミナルにアタッチされていない場合でも、--quietに関係なく進捗状況を報告することを可能にします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 18,
                'git_option' => '-t',
                'description' => '新しいブランチを作成する際に、「アップストリーム」設定を行います。-cは暗黙の了解です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 18,
                'git_option' => '--no-track',
                'description' => 'branch.autoSetupMerge設定変数がtrueの場合でも、「上流」構成を設定しないようにします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 18,
                'git_option' => '--orphan <new-branch>',
                'description' => '<new-branch>という名前の、新しいオーファンブランチを作成します。追跡されたファイルはすべて削除されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 18,
                'git_option' => '--ignore-other-worktrees',
                'description' => 'git switchは、欲しい参照元がすでに他のワークツリーによってチェックアウトされている場合に拒否します。このオプションは、とにかくrefをチェックアウトするようにします。言い換えれば、その参照は複数のワークツリーによって保持される可能性があります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 18,
                'git_option' => '--recurse-submodules',
                'description' => 'recurse-submodulesを使用すると、スーパープロジェクトに記録されたコミットに従って、すべてのアクティブなサブモジュールの内容を更新します。何もしない (あるいは --no-recurse-submodules) と、サブモジュールの作業ツリーが更新されることはありません。git-submodule[1] のように、サブモジュールの HEAD を切り離すことができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
