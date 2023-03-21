<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionMergeSeeder extends Seeder
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
                'git_id' => 19,
                'git_option' => '--commit',
                'description' => 'マージを実行し、その結果をコミットする。このオプションは--no-commitを上書きするために使用することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '--edit',
                'description' => 'メカニカルマージを成功させる前にエディターを起動し、自動生成されたマージメッセージをさらに編集することで、ユーザーがマージを説明したり正当化できるようにします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '--cleanup=<mode>',
                'description' => 'このオプションは、コミットする前にマージメッセージをどのようにクリーンアップするかを決定します。詳しくは git-commit[1] を参照してください。さらに、<mode> に scissors という値を指定すると、マージが衝突した場合にコミット機構に渡す前に MERGE_MSG に scissors が付加されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '--ff',
                'description' => 'マージされた履歴がすでに現在の履歴の子孫である場合に、マージをどのように処理するかを指定します。--refs/tags/階層内の自然な場所に保存されていない注釈付き（場合によっては署名付き）タグをマージする場合を除き、--no-ffがデフォルトとなります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '-S[<keyid>]',
                'description' => '結果のマージコミットにGPG署名を行います。keyid引数はオプションで、デフォルトはコミッターのIDです。指定する場合は、オプションにスペースを入れずに貼り付ける必要があります。--no-gpg-sign は commit.gpgSign 設定変数と、それ以前の --gpg-sign の両方を打ち消すのに便利です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '--log[=<n>]',
                'description' => 'ブランチ名に加えて、マージされる実際のコミットから最大 <n> 個の一行説明をログメッセージに入力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '--signoff',
                'description' => 'コミットログメッセージの末尾に、コミッターによるSigned-off-by trailerを追加します。サインオフの意味は、コミット先のプロジェクトに依存します。例えば、コミッターがプロジェクトのライセンスの下で作品を提出する権利を持っていることを証明したり、Developer Certificate of Originのような何らかの貢献者の表明に同意したりすることができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '--stat',
                'description' => 'マージの最後にdiffstatを表示します。diffstatは、設定オプションのmerge.statによっても制御されます。nまたは--no-statを指定すると、マージの最後にdiffstatを表示しません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '--squash',
                'description' => '作業ツリーとインデックスの状態を、あたかも実際にマージが行われたかのように作成します(マージ情報を除く)が、実際にコミットを行ったり、HEADを移動したり、$GIT_DIR/MERGE_HEADを記録したりはしません（次のgit commitコマンドでマージコミットを作成させるため）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '--[no-]verify',
                'description' => 'デフォルトでは、pre-mergeとcommit-msgのフックが実行されます。no-verifyが与えられると、これらはバイパスされます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '-s <strategy>',
                'description' => '与えられたマージ戦略を使用する。試すべき順番を指定するために、複数回指定することができる。sオプションがない場合、代わりに組み込みの戦略リストが使われます（1つのヘッドをマージする場合はort、それ以外はoctopus）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '-X <option>',
                'description' => 'マージストラテジーの特定のオプションをマージストラテジーに渡す。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '--verify-signatures',
                'description' => 'マージされるサイドブランチのtipコミットが有効な鍵、すなわち有効なuidを持つ鍵で署名されていることを確認します。デフォルトの信頼モデルでは、これは署名鍵が信頼できる鍵によって署名されていることを意味します。サイドブランチの先端コミットが有効な鍵で署名されていない場合、マージは中止されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '--summary',
                'description' => 'statおよび--no-statの対義語。これらは非推奨であり、将来的に削除される予定である。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '-q',
                'description' => '静かに操作する。進展がないことを意味する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '-v',
                'description' => '冗長性があること。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '--progress',
                'description' => '進捗状況を明示的にオン／オフする。どちらも指定されない場合、標準エラーがターミナルに接続されている場合、進捗が表示されます。すべてのマージ戦略が進行状況の報告をサポートするとは限らないことに注意してください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '--autostash',
                'description' => '操作開始前に一時的なスタッシュエントリーを自動的に作成し、特殊リファレンスMERGE_AUTOSTASHに記録し、操作終了後に適用します。これは、ダーティなワークツリーで操作を実行できることを意味します。しかし、注意して使用してください：マージが成功した後の最終的なスタッシュの適用は、非自明な競合をもたらすかもしれません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '--allow-unrelated-histories',
                'description' => 'デフォルトでは、git merge コマンドは共通の祖先を持たない履歴をマージすることを拒否しています。このオプションを使用すると、独立してスタートした 2 つのプロジェクトの履歴をマージする際にこの安全性を上書きすることができます。これは非常にまれなケースなので、デフォルトでこれを有効にする設定変数は存在せず、追加されることもありません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '-m <msg>',
                'description' => 'マージコミット（作成される場合）に使用するコミットメッセージを設定します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '--into-name <branch>',
                'description' => 'マージ先の実際のブランチ名ではなく、ブランチ<branch>にマージするようなデフォルトのマージメッセージを用意する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '-F <file>',
                'description' => 'マージコミット（作成される場合）に使用されるコミットメッセージを読み取る。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '--rerere-autoupdate',
                'description' => 'rerere メカニズムが現在のコンフリクトの解決を再利用して作業ツリーのファイルを更新した後、解決結果でインデックスも更新することを許可します。--no-rerere-autoupdate は、git add でインデックスに結果をコミットする前に、rerere が行ったことをダブルチェックして潜在的なミスマッチを発見する良い方法です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '--overwrite-ignore',
                'description' => 'マージ結果から無視されたファイルを黙って上書きする。これはデフォルトの動作です。中止する場合は --no-overwrite-ignore を使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '--abort',
                'description' => '現在の紛争解決処理を中止し、合併前の状態の再構築を試みる。オートスタッシュエントリーが存在する場合、それをワークツリーに適用する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '--quit',
                'description' => '現在進行中のマージのことは忘れてください。インデックスと作業ツリーをそのままにしておきます。MERGE_AUTOSTASHが存在する場合、スタッシュ・エントリーはスタッシュ・リストに保存されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '--continue',
                'description' => 'コンフリクトのために git マージが停止した場合は、git merge --continue を実行することでマージを終了できます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 19,
                'git_option' => '<commit>…​',
                'description' => 'ブランチにマージするコミット（通常は他のブランチヘッド）。複数のコミットを指定すると、2つ以上の親を持つマージが作成されます（親しみを込めてオクトパスマージと呼びます）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
