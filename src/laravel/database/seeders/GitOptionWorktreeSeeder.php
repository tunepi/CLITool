<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionWorktreeSeeder extends Seeder
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
                'git_id' => 24,
                'git_option' => '-f',
                'description' => 'デフォルトでは、<commit-ish>がブランチ名で、すでに他のワークツリーによってチェックアウトされている場合、または<path>がすでにあるワークツリーに割り当てられているが見つからない場合（たとえば、<path>が手動で削除された場合）、addは新しいワークツリーを作ることを拒否する。このオプションは、これらのセーフガードを無効にします。欠けているがロックされているワークツリーのパスを追加するには、-force を2回指定する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 24,
                'git_option' => '-b',
                'description' => 'addで、<commit-ish>から始まる<new-branch>という新しいブランチを作成し、<new-branch>を新しいワークツリーにチェックアウトします。<commit-ish>が省略された場合、デフォルトはHEADになります。デフォルトでは、-bは新しいブランチがすでに存在する場合、その作成を拒否する。-Bはこの安全策を上書きし、<new-branch>を<commit-ish>にリセットします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 24,
                'git_option' => '-d',
                'description' => 'addで、新しいワークツリーにHEADをデタッチします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 24,
                'git_option' => '--[no-]checkout',
                'description' => 'デフォルトでは、addは<commit-ish>でチェックアウトしますが、--no-checkoutを使用すると、sparse-checkoutを設定するなどのカスタマイズを行うためにチェックアウトを抑制することが可能です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 24,
                'git_option' => '--[no-]guess-remote',
                'description' => 'worktree add <path>で、<commit-ish>なしで、HEADから新しいブランチを作成する代わりに、<path>のベースネームに一致するリモート追跡ブランチがちょうど1つ存在する場合、新しいブランチはリモート追跡ブランチをベースにし、リモート追跡ブランチを新しいブランチの「アップストリーム」としてマークします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 24,
                'git_option' => '--[no-]track',
                'description' => '新しいブランチを作成する際、<commit-ish>がブランチである場合、新しいブランチから「上流」としてマークします。これは、<commit-ish>がリモートトラッキングブランチである場合のデフォルトである。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 24,
                'git_option' => '--lock',
                'description' => '作成後のワークツリーをロックしたままにします。これは、git worktree addの後にgit worktree lockを行うのと同じですが、レースコンディションはありません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 24,
                'git_option' => '-n',
                'description' => 'pruneでは、何も削除せず、削除するものを報告するだけです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 24,
                'git_option' => '--porcelain',
                'description' => 'リストでは、スクリプト用に解析しやすいフォーマットで出力します。この形式は、Gitのバージョンやユーザー設定に関係なく安定したままです。これと -z を組み合わせることが推奨されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 24,
                'git_option' => '-z',
                'description' => 'listで--porcelainを指定した場合、各行を改行ではなくNULで終了させる。これにより、ワークツリーのパスに改行文字が含まれていても、出力を解析することができるようになります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 24,
                'git_option' => '-q',
                'description' => 'addで、フィードバックメッセージを抑制する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 24,
                'git_option' => '-v',
                'description' => 'pruneを使用すると、すべての削除を報告します。listを使用すると、ワークツリーに関する追加情報を出力します（下記参照）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 24,
                'git_option' => '--expire <time>',
                'description' => 'pruneで、<time>より古い未使用のワークツリーのみを消去する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 24,
                'git_option' => '--reason <string>',
                'description' => 'lockまたはadd -lockの場合、ワークツリーがロックされる理由を説明します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 24,
                'git_option' => '<worktree>',
                'description' => 'ワークツリーは、相対パスまたは絶対パスで識別することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
