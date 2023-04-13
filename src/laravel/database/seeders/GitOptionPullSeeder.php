<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionPullSeeder extends Seeder
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
                'git_id' => 26,
                'git_option' => '-q',
                'description' => 'これは、転送時の報告を抑制するための git-fetch と、マージ時の出力を抑制するための git-merge の両方に渡されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 26,
                'git_option' => '-v',
                'description' => 'git-fetchとgit-mergeに--verboseを渡してください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 26,
                'git_option' => '--[no-]recurse-submodules[=yes|on-demand|no]',
                'description' => 'このオプションは、サブモジュールの新しいコミットを取得するかどうか、そしてアクティブなサブモジュールの作業木を更新するかどうかを制御します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 26,
                'git_option' => '--commit',
                'description' => 'マージを実行し、その結果をコミットする。このオプションは --no-commit を上書きするために使用することができる。マージするときだけ有効です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 26,
                'git_option' => '--edit',
                'description' => 'メカニカル マージを成功させる前にエディターを起動して、自動生成されたマージ メッセージをさらに編集し、ユーザーがマージを説明したり正当化したりできるようにします。自動生成されたメッセージを受け入れるには、--no-editオプションを使用することができます（これは一般に推奨されません）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 26,
                'git_option' => '--cleanup=<mode>',
                'description' => 'このオプションは、コミットする前にマージメッセージをどのようにクリーンアップするかを決定します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 26,
                'git_option' => '--ff-only',
                'description' => 'ローカルに発散する履歴がない場合、新しい履歴にのみ更新する。これは、（--rebase=*フラグによって）分岐した歴史を調整する方法が提供されていない場合のデフォルトである。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 26,
                'git_option' => '--ff',
                'description' => 'リベースではなくマージを行う場合、マージされた履歴がすでに現在の履歴の子孫である場合に、マージをどのように扱うかを指定します。マージが要求された場合、--ffがデフォルトです。ただし、refs/tags/階層内の自然な場所に保存されていない注釈付き（そしておそらく署名付き）タグをマージする場合は、--no-ffが仮定されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 26,
                'git_option' => '-S[<keyid>]',
                'description' => '結果のマージコミットにGPG署名を行います。keyid引数はオプションで、デフォルトはコミッターのIDです。指定する場合は、オプションにスペースを入れずに貼り付ける必要があります。--no-gpg-sign は commit.gpgSign 設定変数と、それ以前の --gpg-sign の両方を打ち消すのに便利です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 26,
                'git_option' => '--log[=<n>]--log[=<n>]',
                'description' => 'ブランチ名に加えて、マージされる実際のコミットから最大 <n> 個の一行説明をログメッセージに入力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 26,
                'git_option' => '--signoff',
                'description' => 'コミットログメッセージの末尾に、コミッターによるSigned-off-by trailerを追加します。サインオフの意味は、コミット先のプロジェクトに依存します。例えば、コミッターがそのプロジェクトのライセンスの下で作品を提出する権利を持っていることを証明したり、Developer Certificate of Originのような何らかの貢献者の表現に同意したりすることがあります。(LinuxカーネルやGitプロジェクトで使われているものについては、http://developercertificate.org を参照してください)。あなたが貢献しようとしているプロジェクトの文書やリーダーを参照し、そのプロジェクトでサインオフがどのように使われているかを理解してください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 26,
                'git_option' => '--stat',
                'description' => 'マージの最後にdiffstatを表示します。diffstatは、設定オプションmerge.statでも制御できます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 26,
                'git_option' => '--squash',
                'description' => '作業ツリーとインデックスの状態を、あたかも実際にマージが行われたかのように作成します (マージ情報を除く)。ただし、実際にコミットを行ったり HEAD を移動したり $GIT_DIR/MERGE_HEAD (次の git commit コマンドでマージコミットを作成するためのもの) を記録したりはしません。これにより、現在のブランチの上に単一のコミットを作成し、別のブランチをマージしたのと同じ効果を得ることができます（タコの場合はそれ以上）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 26,
                'git_option' => '--[no-]verify',
                'description' => 'デフォルトでは、pre-mergeとcommit-msgのフックが実行されます。no-verifyが与えられると、これらはバイパスされます。githooks[5]も参照してください。マージするときのみ有効です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 26,
                'git_option' => '-s <strategy>',
                'description' => '与えられたマージ戦略を使用する。試すべき順番を指定するために、複数回指定することができる。sオプションがない場合、代わりに組み込みの戦略リストが使われます（1つのヘッドをマージする場合はort、それ以外はoctopus）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 26,
                'git_option' => '-X <option>',
                'description' => 'マージストラテジーの特定のオプションをマージストラテジーに渡す。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 26,
                'git_option' => '--verify-signatures',
                'description' => 'マージされるサイドブランチのtipコミットが有効な鍵、すなわち有効なuidを持つ鍵で署名されていることを確認します。デフォルトの信頼モデルでは、これは署名鍵が信頼できる鍵によって署名されていることを意味します。サイドブランチの先端コミットが有効な鍵で署名されていない場合、マージは中止されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 26,
                'git_option' => '--summary',
                'description' => 'statおよび--no-statの対義語。これらは非推奨であり、将来的に削除される予定である。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 26,
                'git_option' => '--autostash',
                'description' => '操作開始前に一時的なスタッシュエントリーを自動的に作成し、特殊リファレンスMERGE_AUTOSTASHに記録し、操作終了後に適用します。これは、ダーティなワークツリーで操作を実行できることを意味します。しかし、注意して使用してください：マージが成功した後の最終的なスタッシュの適用は、非自明な競合をもたらすかもしれません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 26,
                'git_option' => '--allow-unrelated-histories',
                'description' => 'デフォルトでは、git merge コマンドは共通の祖先を持たない履歴をマージすることを拒否しています。このオプションを使用すると、独立してスタートした 2 つのプロジェクトの履歴をマージする際にこの安全性を上書きすることができます。これは非常にまれなケースなので、デフォルトでこれを有効にする設定変数は存在せず、追加されることもありません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
