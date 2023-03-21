<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionSvnSeeder extends Seeder
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
                'git_id' => 45,
                'git_option' => '--shared[=(false|true|umask|group|all|world|everybody)]',
                'description' => 'init コマンドでのみ使用されます。 これらは git init に直接渡されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 45,
                'git_option' => '-r <arg>',
                'description' => 'これにより、部分的/焼灼された履歴のリビジョン範囲がサポートされます。 $NUMBER、$NUMBER1:$NUMBER2 (数値範囲)、$NUMBER:HEAD、および BASE:$NUMBER はすべてサポートされています。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 45,
                'git_option' => '--stdin',
                'description' => 'set-tree コマンドでのみ使用されます。標準入力からコミットのリストを読み取り、それらを逆の順序でコミットします。 各行から先頭の sha1 のみが読み取られるため、 git rev-list --pretty=oneline 出力を使用できます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 45,
                'git_option' => '--rmdir',
                'description' => 'dcommit、set-tree、および commit-diff コマンドでのみ使用されます。ファイルが残っていない場合は、SVN ツリーからディレクトリを削除します。 SVN は空のディレクトリをバージョニングでき、ファイルが残っていない場合、デフォルトでは削除されません。 Git は空のディレクトリをバージョン管理できません。 このフラグを有効にすると、SVN へのコミットが Git のように機能します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 45,
                'git_option' => '-e',
                'description' => 'dcommit、set-tree、および commit-diff コマンドでのみ使用されます。SVN にコミットする前にコミット メッセージを編集します。 これは、コミットされているオブジェクトではデフォルトでオフになっており、ツリー オブジェクトをコミットするときに強制的にオンになります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 45,
                'git_option' => '-l<num>',
                'description' => 'dcommit、set-tree、および commit-diff コマンドでのみ使用されます。これらは両方とも git diff-tree に直接渡されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 45,
                'git_option' => '-A<filename>',
                'description' => '構文は git cvsimport で使用されるファイルと互換性がありますが、空の電子メール アドレスを <> で指定できます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 45,
                'git_option' => '--authors-prog=<filename>',
                'description' => 'このオプションを指定すると、authors ファイルに存在しない SVN コミッター名ごとに、指定されたファイルがコミッター名を最初の引数として実行されます。 プログラムは、"Name <email>" または "Name <>" という形式の 1 行を返すことが期待されており、作成者ファイルに含まれているかのように扱われます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 45,
                'git_option' => '-q',
                'description' => 'git svn の冗長性を減らします。 2 回目を指定すると、さらに冗長になります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 45,
                'git_option' => '-m',
                'description' => 'これらは、dcommit および rebase コマンドでのみ使用されます。git reset を使用できない場合、dcommit を使用するときに git rebase に直接渡されます (dcommit を参照)。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 45,
                'git_option' => '-n',
                'description' => 'これは、dcommit、rebase、branch、および tag コマンドで使用できます。dcommit の場合、どの差分が SVN にコミットされるかを示す一連の Git 引数を出力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 45,
                'git_option' => '--use-log-author',
                'description' => '(フェッチ、リベース、または dcommit 操作の一部として) svn コミットを Git に取得するときは、ログ メッセージの最初の From: 行または Signed-off-by トレーラーを探し、それを作成者文字列として使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 45,
                'git_option' => '--add-author-from',
                'description' => 'Git から svn にコミットするとき (set-tree または dcommit 操作の一部として)、既存のログ メッセージに From: または Signed-off-by トレーラーがまだない場合は、Git コミットの作成者に基づいて From: 行を追加します。 弦。 これを使用すると、 --use-log-author はすべてのコミットに対して有効な作成者文字列を取得します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
