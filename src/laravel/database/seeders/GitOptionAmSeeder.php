<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionAmSeeder extends Seeder
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
                'git_id' => 41,
                'git_option' => '(<mbox>|<Maildir>)…​',
                'description' => 'パッチを読み取るメールボックス ファイルのリスト。 この引数を指定しない場合、コマンドは標準入力から読み取ります。 ディレクトリを指定すると、それらは Maildir として扱われます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 41,
                'git_option' => '-s',
                'description' => '自分自身のコミッター ID を使用して、Signed-off-by トレーラーをコミット メッセージに追加します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 41,
                'git_option' => '-k',
                'description' => '-k フラグを git mailinfo に渡します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 41,
                'git_option' => '--keep-non-patch',
                'description' => '-b フラグを git mailinfo に渡します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 41,
                'git_option' => '--[no-]keep-cr',
                'description' => '--keep-cr を使用して、同じオプションで git mailsplit (git-mailsplit[1] を参照) を呼び出し、行末の CR が削除されないようにします。 am.keepcr 構成変数を使用して、デフォルトの動作を指定できます。 --no-keep-cr は、am.keepcr をオーバーライドするのに役立ちます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 41,
                'git_option' => '-c',
                'description' => 'body 内のはさみ行の前にあるものをすべて削除します (git-mailinfo[1] を参照)。 mailinfo.scissors 構成変数を使用して、デフォルトで有効にすることができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 41,
                'git_option' => '--no-scissors',
                'description' => 'はさみ線を無視する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 41,
                'git_option' => '--quoted-cr=<action>',
                'description' => 'このフラグは git mailinfo に渡されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 41,
                'git_option' => '--empty=(stop|drop|keep)',
                'description' => 'デフォルトでは、またはオプションが stop に設定されている場合、コマンドは入力電子メール メッセージでパッチが不足しているとエラーになり、現在の午前中のセッションの途中で停止します。 このオプションがドロップに設定されている場合、代わりにそのような電子メール メッセージをスキップします。 このオプションを keep に設定すると、空のコミットが作成され、電子メール メッセージの内容がログとして記録されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 41,
                'git_option' => '-m',
                'description' => '-m フラグを git mailinfo に渡し、Message-ID ヘッダーがコミット メッセージに追加されるようにします。 am.messageid 構成変数を使用して、デフォルトの動作を指定できます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 41,
                'git_option' => '--no-message-id',
                'description' => 'Message-ID ヘッダーをコミット メッセージに追加しないでください。 no-message-id は、am.messageid をオーバーライドするのに役立ちます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 41,
                'git_option' => '-q',
                'description' => '静かに,エラーメッセージのみを出力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 41,
                'git_option' => '-u',
                'description' => '-u フラグを git mailinfo に渡します (git-mailinfo[1] を参照)。 電子メールから取得された提案されたコミット ログ メッセージは、UTF-8 エンコーディングに再コード化されます (構成変数 i18n.commitEncoding を使用して、プロジェクトの優先エンコーディングが UTF-8 でない場合に指定できます)。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 41,
                'git_option' => '--no-utf8',
                'description' => '-n フラグを git mailinfo に渡します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 41,
                'git_option' => '-3',
                'description' => 'パッチが完全に適用されない場合、パッチが適用されるはずの BLOB の ID を記録し、それらの BLOB がローカルで利用できる場合は、3 方向マージにフォールバックします。 --no-3way を使用して am.threeWay 構成変数をオーバーライドできます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 41,
                'git_option' => '--rerere-autoupdate',
                'description' => 'rerere メカニズムが現在の競合で記録された解決を再利用して作業ツリー内のファイルを更新した後、解決の結果でインデックスも更新できるようにします。 --no-rerere-autoupdate は、別の git add で結果をインデックスにコミットする前に、rerere が行ったことを再確認し、潜在的なミスマージをキャッチするための良い方法です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 41,
                'git_option' => '--ignore-space-change',
                'description' => 'これらのフラグは、パッチを適用する git applyプログラムに渡されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 41,
                'git_option' => '--patch-format',
                'description' => 'デフォルトでは、コマンドはパッチ形式を自動的に検出しようとします。 このオプションを使用すると、ユーザーは自動検出をバイパスし、パッチが解釈されるパッチ形式を指定できます。 有効な形式は、mbox、mboxrd、stgit、stgit-series、および hg です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 41,
                'git_option' => '-i',
                'description' => 'インタラクティブに実行します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 41,
                'git_option' => '-n',
                'description' => 'デフォルトでは、pre-applypatch および applypatch-msg フックが実行されます。 --no-verify または -n のいずれかが指定されている場合、これらはバイパスされます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
