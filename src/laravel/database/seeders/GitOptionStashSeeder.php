<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GitOptionStashSeeder extends Seeder
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
                'git_id' => 22,
                'git_option' => '-a',
                'description' => 'このオプションはpushとsaveコマンドに対してのみ有効です。無視されたファイルや追跡されていないファイルもすべて格納され、その後git cleanでクリーンアップされます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 22,
                'git_option' => '-u',
                'description' => 'pushコマンドやsaveコマンドと併用すると、追跡されていないファイルもすべて格納され、その後git cleanでクリーンアップされます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 22,
                'git_option' => '--only-untracked',
                'description' => 'このオプションは、showコマンドに対してのみ有効です。diffの一部としてstashエントリーの追跡されていないファイルのみを表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 22,
                'git_option' => '--index',
                'description' => 'このオプションは、popコマンドとapplyコマンドにのみ有効です。作業ツリーの変更だけでなく、インデックスの変更も元に戻そうとします。しかし、コンフリクトがある場合（コンフリクトはインデックスに保存されるため、元のように変更を適用することができなくなる）、これは失敗することがあります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 22,
                'git_option' => '-k',
                'description' => 'このオプションは、プッシュコマンドとセーブコマンドに対してのみ有効です。すでにインデックスに追加されたすべての変更はそのまま残されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 22,
                'git_option' => '-p',
                'description' => 'このオプションは、pushコマンドとsaveコマンドにのみ有効です。

                HEADと作業ツリーの間の差分から、ためるハンクを対話的に選択します。スタッシュエントリーは、そのインデックス状態がリポジトリのインデックス状態と同じになるように構築され、そのワークツリーには、対話的に選択した変更のみが含まれます。選択された変更は、ワークツリーからロールバックされます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 22,
                'git_option' => '-s',
                'description' => 'このオプションは、pushコマンドとsaveコマンドに対してのみ有効です。現在ステージングされている変更点のみを保存します。これは基本的な git commit と似ていますが、現在のブランチではなく stash にコミットされる点が異なります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 22,
                'git_option' => '--pathspec-from-file=<file>',
                'description' => 'このオプションは、pushコマンドでのみ有効です。Pathspecはコマンドライン引数の代わりに<file>で渡されます。もし <file> が正確に - ならば、標準入力が使用されます。Pathspecの要素は、LFまたはCR/LFで区切られます。Pathspecの要素は、設定変数core.quotePathの説明に従って引用することができます',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 22,
                'git_option' => '--pathspec-file-nul',
                'description' => 'このオプションはpushコマンドに対してのみ有効です。pathspec-from-fileとの組み合わせでのみ意味があります。Pathspecの要素はNUL文字で区切られ、それ以外の文字は（改行や引用符を含めて）文字通りに受け取られます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 22,
                'git_option' => '-q',
                'description' => 'このオプションは、apply、drop、pop、push、save、storeの各コマンドに対してのみ有効です。Quiet、フィードバックメッセージを抑制する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 22,
                'git_option' => '<pathspec>…​',
                'description' => 'このオプションはpushコマンドに対してのみ有効です。新しいstashエントリは、pathspecに一致するファイルについてのみ、変更された状態を記録します。その後、インデックス・エントリーと作業ツリー・ファイルも、これらのファイルについてのみHEADの状態にロールバックされ、pathspecに一致しないファイルはそのまま残されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 22,
                'git_option' => '<stash>',
                'description' => 'このオプションは、apply、branch、drop、pop、showコマンドに対してのみ有効です。stash@{<revision>}という形式の参照です。<stash>を指定しない場合は，最新のstashを指定します（つまり，stash@{0}）．',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
