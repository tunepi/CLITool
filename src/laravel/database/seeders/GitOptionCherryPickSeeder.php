<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionCherryPickSeeder extends Seeder
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
                'git_id' => 35,
                'git_option' => '<commit>…​',
                'description' => 'cherry-pickするためのコミットです。より完全なコミットの綴り方については gitrevisions[7] を参照してください。コミットの集合を渡すこともできますが、デフォルトでは --no-walk オプションを指定した場合と同じように、走査は行われません。範囲を指定すると、すべての <commit>... 引数を単一のリビジョンウォークに送り込むことに注意してください（maint master...next を使用した後の例を参照してください）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 35,
                'git_option' => '-e',
                'description' => 'このオプションをつけると、git cherry-pickはコミットする前にコミットメッセージを編集できるようになります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 35,
                'git_option' => '--cleanup=<mode>',
                'description' => 'このオプションは、コミットマシンに渡す前にコミットメッセージをどのようにクリーンアップするかを決定します。詳しくは git-commit[1] を参照してください。特に、<mode> に scissors という値を指定した場合は、衝突が発生した場合に MERGE_MSG に scissors が付加されて渡されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 35,
                'git_option' => '-x',
                'description' => 'コミットを記録する際、この変更がどのコミットからチェリーピックされたかを示すために、オリジナルのコミットメッセージに「(cherry picked from commit ...)」という行を追加してください。これはコンフリクトのないチェリーピックの場合のみ行われます。自分のプライベートブランチからチェリーピックをする場合は、このオプションを使用しないでください。一方、一般に公開されている 2 つのブランチの間でチェリーピックを行う場合 (たとえば、開発ブランチの古いリリースの修正をメンテナンスブランチにバックポートする場合など)、この情報を追加すると便利なことがあります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 35,
                'git_option' => '-r',
                'description' => '以前は、このコマンドのデフォルトは上記の-xで、-rはそれを無効にするものでした。現在では、デフォルトで-xを実行しないので、このオプションは不要です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 35,
                'git_option' => '-m <parent-number>',
                'description' => '通常、マージのどちら側を本線とみなすべきか分からないため、チェリーピックを行うことはできません。このオプションは、メインラインの親番号（1から始まる）を指定し、cherry-pickが指定された親に対して変更を再生することを可能にします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 35,
                'git_option' => '-n',
                'description' => '通常、このコマンドは自動的に一連のコミットを作成します。このフラグは、作業ツリーとインデックスに、各名称コミットをチェリーピックするのに必要な変更を適用し、コミットは行わないようにします。さらに、このオプションを使用すると、インデックスが HEAD コミットに一致する必要はありません。チェリーピックは、インデックスの最初の状態に対して行われます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 35,
                'git_option' => '-s',
                'description' => 'コミットメッセージの末尾にSigned-off-byトレーラーを追加します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 35,
                'git_option' => '-S[<keyid>]',
                'description' => 'GPG-signのコミットです。keyid引数はオプションで、デフォルトはコミッターのIDです。指定する場合は、オプションにスペースを入れずに貼り付ける必要があります。--no-gpg-signは、commit.gpgSign設定変数と、それ以前の--gpg-signの両方を打ち消すのに便利です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 35,
                'git_option' => '--ff',
                'description' => '現在のHEADがcherry-pickされたコミットの親と同じであれば、このコミットへの早送りが実行されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 35,
                'git_option' => '--allow-empty',
                'description' => 'デフォルトでは、空のコミットのチェリーピックは失敗し、git commit --allow-empty の明示的な実行が必要であることを示します。このオプションはこの挙動を上書きし、空のコミットをチェリーピックで自動的に保存できるようにします。ただし、「--ff」が有効な場合は、このオプションがなくても「fast-forward」要件を満たす空のコミットは保存されます。また、このオプションを使用すると、最初は空だったコミット（つまり、コミットが親と同じツリーを記録していたもの）だけが保存されることに注意してください。前のコミットによって空になったコミットは削除されます。これらのコミットを強制的に含めるには、--keep-redundant-commitsを使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 35,
                'git_option' => '--allow-empty-message',
                'description' => 'デフォルトでは、空のメッセージを持つコミットのチェリーピックは失敗します。このオプションはその動作を上書きし、空のメッセージを持つコミットをチェリーピックすることを可能にします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 35,
                'git_option' => '--keep-redundant-commits',
                'description' => 'チェリーピックされるコミットが現在の履歴にあるコミットと重複している場合、そのコミットは空白になります。デフォルトでは、このような冗長なコミットはチェリーピックを停止し、ユーザーがそのコミットを調査できるようにします。このオプションはこの動作を上書きし、空のコミットオブジェクトを作成します。allow-emptyを暗黙の了解としています。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 35,
                'git_option' => '--strategy=<strategy>',
                'description' => '与えられたマージ戦略を使用する。一度だけ使用する必要があります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 35,
                'git_option' => '-X<option>',
                'description' => 'マージストラテジー固有のオプションをマージストラテジーに渡す。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 35,
                'git_option' => '--rerere-autoupdate',
                'description' => 'rerere メカニズムが現在のコンフリクトの解決を再利用して作業ツリーのファイルを更新した後、解決結果でインデックスも更新することを許可します。--no-rerere-autoupdate は、git add でインデックスに結果をコミットする前に、rerere が行ったことをダブルチェックして潜在的なミスマッチを発見する良い方法です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
