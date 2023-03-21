<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionShowSeeder extends Seeder
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
                'git_id' => 30,
                'git_option' => '<object>…​',
                'description' => '表示するオブジェクトの名前（デフォルトはHEAD）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 30,
                'git_option' => '--pretty[=<format>]',
                'description' => '<format> には oneline, short, medium, full, fuller, reference, email, raw, format:<string>, tformat:<string> のいずれかが指定されます。<format> が上記のどれでもなく、かつ %placeholder を含む場合、 --pretty=tformat:<format> が与えられたかのように動作します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 30,
                'git_option' => '--abbrev-commit',
                'description' => '40バイトの16進数の完全なコミットオブジェクト名を表示する代わりに、オブジェクトを一意に指定するプレフィックスを表示します。"--abbrev=<n>"（diff出力を表示する場合、これも修正されます）オプションを使用すると、プレフィックスの最小長を指定することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 30,
                'git_option' => '--no-abbrev-commit',
                'description' => '40バイトの16進数で完全なコミットオブジェクト名を表示します。これは --abbrev-commit を否定するもので、明示的または "--oneline" のような他のオプションによって暗示されます。また、log.abbrevCommit変数を上書きします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 30,
                'git_option' => '--oneline',
                'description' => 'これは、「-pretty=oneline --abbrev-commit」の略語で、一緒に使われます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 30,
                'git_option' => '--encoding=<encoding>',
                'description' => 'コミットオブジェクトは、ログメッセージに使用される文字エンコーディングをそのエンコーディングヘッダーに記録します。このオプションを使用すると、コミットログメッセージをユーザーが好むエンコーディングで再コーディングするようにコマンドに指示することができます。このオプションを使用すると、コミットログメッセージをユーザーが好むエンコーディングで再コード化するようコマンドに指示することができます。非プラミングコマンドでは、これはデフォルトでUTF-8になります。オブジェクトがXでエンコードされていると主張し、Xで出力する場合、オブジェクトをそのまま出力することに注意してください。これは、元のコミットの無効なシーケンスが出力にコピーされることを意味します。同様に、iconv(3) がコミットの変換に失敗した場合、私たちは静かに元のオブジェクトをそのまま出力することになります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 30,
                'git_option' => '--expand-tabs=<n>',
                'description' => 'ログメッセージを出力する前に、タブ展開（各タブを<n>の倍数である次の表示列まで埋めるのに十分なスペースで置き換える）を行う。--expand-tabsは--expand-tabs=8の略で、--no-expand-tabsは--expand-tabs=0の略で、タブの展開を無効にする。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 30,
                'git_option' => '--notes[=<ref>]',
                'description' => 'コミットログメッセージを表示するときに、コミットを注釈するノート（git-notes[1]を参照）を表示します。これは、git log、git show、git whatchangedコマンドで、コマンドラインで--pretty、--format、--onelineオプションを指定しない場合のデフォルトです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 30,
                'git_option' => '--no-notes',
                'description' => 'ノートを表示しない。これは、上記の--notesオプションを否定するもので、ノートを表示するnotes refsのリストをリセットするものです。オプションはコマンドラインで指定された順番で解析されるので、例えば「--notes --notes=foo --no-notes --notes=bar」は「refs/notes/bar」からのノートのみを表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 30,
                'git_option' => '--show-notes[=<ref>]',
                'description' => 'これらのオプションは非推奨です。代わりに上記の --notes/--no-notes オプションを使用してください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 30,
                'git_option' => '--show-signature',
                'description' => 'gpg --verifyに署名を渡すことで、署名付きコミットオブジェクトの有効性をチェックし、出力を表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
