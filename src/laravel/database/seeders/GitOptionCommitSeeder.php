<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionCommitSeeder extends Seeder
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
                'git_id' => 10,
                'git_option' => '-a',
                'description' => '変更・削除されたファイルを自動的にステージングするようコマンドに指示しますが、Gitに伝えていない新しいファイルは影響を受けません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '-p',
                'description' => 'コミットする変更を選択するには、対話型のパッチ選択インターフェイスを使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '-C',
                'description' => '既存のコミットオブジェクトを取得し、コミット作成時にログメッセージと作成者情報（タイムスタンプを含む）を再利用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '-c',
                'description' => 'Cと同様ですが、-cではエディタが起動し、ユーザーがさらにコミットメッセージを編集できるようにします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '--fixup=[(amend|reword):]<commit>',
                'description' => 'git rebase --autosquashで適用したときに、<commit>を「修正」する新しいコミットを作成します。プレーンな --fixup=<commit> は "fixup!" コミットを作成し、<commit> の内容を変更しますが、そのログメッセージはそのまま残します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '--squash=<commit>',
                'description' => 'rebase --autosquash で使用するコミットメッセージを作成します。コミットメッセージの件名は、指定されたコミットからのもので、接頭辞は "squash! ". 追加のコミットメッセージオプション (-m/-c/-C/-F) と共に使用することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '--reset-author',
                'description' => 'C/-c/--amendオプションと併用する場合、または競合するcherry-pickの後にコミットする場合、結果のコミットの著者権がコミッターに帰属することを宣言します。これは author のタイムスタンプも更新します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '--reset-author',
                'description' => 'ドライランを行う場合は、出力をshort-formatで与えてください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '--branch',
                'description' => '短編でも支店や追跡情報を表示する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '--porcelain',
                'description' => 'ドライランを行う場合は、ポーセラーツに対応したフォーマットで出力を与えます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '--long',
                'description' => 'ドライランを行う場合は、ロングフォーマットで出力を与える。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '-z',
                'description' => 'short または porcelain ステータス出力を表示する場合、ファイル名をそのまま表示し、エントリを LF の代わりに NUL で終了させます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '-F <file>',
                'description' => '与えられたファイルからコミットメッセージを取り出します。標準入力からメッセージを読み込むには - を使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '--author=<author>',
                'description' => 'コミット作者を上書きします。標準のAUThor <author@example.com> フォーマットを使って明示的に作者を指定します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '--date=<date>',
                'description' => 'コミットで使用される作者日付を上書きする。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '-m <msg>',
                'description' => '与えられた<msg>をコミットメッセージとして使用する。複数の-mオプションが与えられた場合、それらの値は別々の段落として連結される。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '-t <file>',
                'description' => 'コミットメッセージを編集するとき、与えられたファイルにある内容でエディタを起動する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '-s',
                'description' => 'コミットログメッセージの末尾に、コミッターによるSigned-off-by trailerを追加します。サインオフの意味は、コミット先のプロジェクトによって異なります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '--trailer <token>[(=|:)<value>]',
                'description' => 'トレイラーとして適用する（<token>, <value>）ペアを指定します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '-n',
                'description' => 'デフォルトでは、pre-commitとcommit-msgのフックが実行されます。no-verifyまたは-nのいずれかが与えられた場合、これらはバイパスされます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '--allow-empty',
                'description' => '通常、唯一の親コミットと全く同じツリーを持つコミットを記録することは間違いであり、このコマンドはそのようなコミットを行うことを防止します。このオプションは安全性を回避するもので、主に海外のSCMインターフェーススクリプトで使用されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '--allow-empty-message',
                'description' => 'このコマンドは --allow-empty と同様、主に海外の SCM インターフェーススクリプトで使用するものです。これを使うと、git-commit-tree[1] のような配管コマンドを使わずに、空のコミットメッセージを持つコミットを作成することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '--cleanup=<mode>',
                'description' => 'このオプションは、コミットする前に、与えられたコミットメッセージをどのようにクリーンアップするかを決定します。<mode>には strip, whitespace, verbatim, scissors または default を指定します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '-e',
                'description' => '通常、-Fによるファイルからのメッセージ、-mによるコマンドラインからのメッセージ、-Cによるコミットオブジェクトからのメッセージは、そのままの形でコミットログメッセージとして使用されます。このオプションを使用すると、これらのソースから取得したメッセージをさらに編集することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '--no-edit',
                'description' => 'エディタを起動せずに、選択したコミットメッセージを使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '--amend',
                'description' => '新しいコミットを作成することで、現在のブランチの先端を置き換えます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '--no-post-rewrite',
                'description' => 'ポストリライトフックを回避する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '-i',
                'description' => 'これまでにステージされた内容からコミットを行う前に、コマンドラインで与えられたパスの内容もステージします。これは、競合するマージを終了させるのでなければ、通常望むところではありません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '-o',
                'description' => 'コマンドラインで指定されたパスの更新された作業ツリーの内容を取り込み、他のパスのためにステージングされた内容を無視してコミットします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '--pathspec-from-file=<file>',
                'description' => 'Pathspecは、コマンドラインの引数の代わりに<file>で渡されます。もし <file> が正確に - ならば、標準入力が使用されます。Pathspecの要素はLFまたはCR/LFで区切られます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '--pathspec-file-nul',
                'description' => 'pathspec-from-fileとの組み合わせでのみ意味があります。Pathspecの要素はNUL文字で区切られ、それ以外の文字は（改行や引用符を含めて）文字通りに解釈されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '-u[<mode>]',
                'description' => 'modeパラメータはオプション（デフォルトはall）で、追跡されていないファイルの取り扱いを指定するために使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '-v',
                'description' => 'コミットメッセージテンプレートの下部に、HEADコミットとコミットされる内容との差分を統一して表示し、コミットによる変更点を思い出させることで、ユーザがコミットを説明しやすくします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '-q',
                'description' => 'コミットサマリーメッセージを抑制する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '--dry-run',
                'description' => 'コミットを作成せず、コミットされるパス、コミットされないまま放置されるローカル変更のあるパス、アントラックされるパスの一覧を表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '--status',
                'description' => 'コミットメッセージの準備にエディタを使用している場合に、git-status[1]の出力をコミットメッセージテンプレートに含めます。デフォルトはonですが、設定変数commit.statusを上書きするために使うことができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '--no-status',
                'description' => 'エディターを使ってデフォルトのコミットメッセージを作成する場合、git-status[1]の出力をコミットメッセージテンプレートに含めないようにしました。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '-S[<keyid>]',
                'description' => 'GPG-signのコミットです。keyid引数はオプションで、デフォルトはコミッターのIDです。指定する場合は、オプションにスペースを入れずに貼り付ける必要があります。--no-gpg-signは、commit.gpgSign設定変数と、それ以前の--gpg-signの両方を打ち消すのに便利です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 10,
                'git_option' => '<pathspec>…​',
                'description' => 'コマンドラインでpathspecが与えられたとき、pathspecに一致するファイルの内容を、すでにインデックスに追加された変更を記録することなくコミットします。これらのファイルの内容は、次のコミットのために、以前にステージングされたものの上にステージングされます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
