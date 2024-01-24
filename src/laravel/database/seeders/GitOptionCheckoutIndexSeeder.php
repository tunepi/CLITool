<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionCheckoutIndexSeeder extends Seeder
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
                'git_id' => 58,
                'git_option' => '-u',
                'description' => 'インデックス ファイル内のチェックアウトされたエントリの統計情報を更新します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 58,
                'git_option' => '-q',
                'description' => 'ファイルが存在するかインデックスにない場合は静かにする',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 58,
                'git_option' => '-f',
                'description' => '既存のファイルを強制的に上書きする',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 58,
                'git_option' => '-a',
                'description' => 'skip-worktree ビットが設定されているファイルを除く、インデックス内のすべてのファイルをチェックアウトします (--ignore-skip-worktree-bits を参照)。 明示的なファイル名と一緒に使用することはできません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 58,
                'git_option' => '-n',
                'description' => '新しいファイルをチェックアウトせず、既にチェックアウトされているファイルのみを更新します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 58,
                'git_option' => '--prefix=<string>',
                'description' => 'ファイルを作成するとき、先頭に <string> を追加します (通常、末尾に / を含むディレクトリ)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 58,
                'git_option' => '--stage=<number>|all',
                'description' => 'マージされていないエントリをチェックアウトする代わりに、名前付きステージからファイルをコピーします。 <number> は 1 から 3 の間でなければなりません。 注: --stage=all は自動的に --temp を意味します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 58,
                'git_option' => '--temp',
                'description' => 'ファイルを作業ディレクトリにコピーする代わりに、コンテンツを一時ファイルに書き込みます。 一時的な名前の関連付けは stdout に書き込まれます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 58,
                'git_option' => '--ignore-skip-worktree-bits',
                'description' => 'skip-worktree ビットが設定されたファイルを含め、すべてのファイルをチェックアウトします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 58,
                'git_option' => '--stdin',
                'description' => 'コマンドラインからパスのリストを取得する代わりに、標準入力からパスのリストを読み取ります。 デフォルトでは、パスは LF (つまり、1 行に 1 つのパス) で区切られます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 58,
                'git_option' => '-z',
                'description' => '--stdin でのみ意味があります。 パスは LF ではなく NUL 文字で区切られます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
