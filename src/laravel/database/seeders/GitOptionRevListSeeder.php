<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionRevListSeeder extends Seeder
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
                'git_id' => 67,
                'git_option' => '-<number>',
                'description' => '出力するコミット数を制限します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 67,
                'git_option' => '--skip=<number>',
                'description' => 'コミット出力の表示を開始する前に number 個のコミットをスキップします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 67,
                'git_option' => '--since=<date>',
                'description' => '特定の日付より新しいコミットを表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 67,
                'git_option' => '--since-as-filter=<date>',
                'description' => '特定の日付より新しいすべてのコミットを表示します。 これは、特定の日付より古い最初のコミットで停止するのではなく、範囲内のすべてのコミットを訪問します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 67,
                'git_option' => '--until=<date>',
                'description' => '特定の日付より古いコミットを表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 67,
                'git_option' => '--max-age=<timestamp>',
                'description' => 'コミット出力を指定された時間範囲に制限します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 67,
                'git_option' => '--author=<pattern>',
                'description' => 'コミットの出力を、指定されたパターン (正規表現) に一致する作成者/コミッターのヘッダー行を持つものに制限します。 複数の --author=<pattern> を使用すると、作成者が指定されたパターンのいずれかに一致するコミットが選択されます (複数の --committer=<pattern> の場合と同様)。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 67,
                'git_option' => '--grep-reflog=<pattern>',
                'description' => 'コミットの出力を、指定されたパターン (正規表現) に一致する reflog エントリを持つものに制限します。 複数の --grep-reflog を使用すると、reflog メッセージが指定されたパターンのいずれかに一致するコミットが選択されます。 --walk-reflogs が使用されていない限り、このオプションを使用するとエラーになります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 67,
                'git_option' => '--grep=<pattern>',
                'description' => 'コミットの出力を、指定されたパターン (正規表現) に一致するログ メッセージを持つものに制限します。 複数の --grep=<pattern> を使用すると、指定されたパターンのいずれかに一致するメッセージを持つコミットが選択されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 67,
                'git_option' => '--all-match',
                'description' => 'コミットの出力を、少なくとも 1 つに一致するものではなく、指定された --grep すべてに一致するものに制限します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 67,
                'git_option' => '--invert-grep',
                'description' => 'コミットの出力を、--grep=<pattern> で指定されたパターンに一致しないログ メッセージを持つものに制限します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 67,
                'git_option' => '-i',
                'description' => '大文字と小文字を区別せずに、正規表現の制限パターンに一致します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 67,
                'git_option' => '--basic-regexp',
                'description' => '制限パターンは基本的な正規表現であると考えてください。 これがデフォルトです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 67,
                'git_option' => '-E',
                'description' => '制限パターンは、デフォルトの基本正規表現ではなく、拡張正規表現であると考えてください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 67,
                'git_option' => '-F',
                'description' => '制限パターンを固定文字列と見なします (パターンを正規表現として解釈しないでください)。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 67,
                'git_option' => '-P',
                'description' => '制限パターンは Perl 互換の正規表現であると考えてください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 67,
                'git_option' => '--remove-empty',
                'description' => '指定されたパスがツリーから消えたら停止します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 67,
                'git_option' => '--merges',
                'description' => 'マージコミットのみを出力します。 これは --min-parents=2 とまったく同じです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 67,
                'git_option' => '--no-merges',
                'description' => '複数の親を持つコミットを印刷しないでください。 これは --max-parents=1 とまったく同じです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 67,
                'git_option' => '--min-parents=<number>',
                'description' => '少なくとも (または最大で) その数の親コミットを持つコミットのみを表示します。 特に、 --max-parents=1 は --no-merges と同じです。 --min-parents=2 は --merges と同じです。 --max-parents=0 はすべてのルート コミットを提供し、 --min-parents=3 はすべてのオクトパス マージを提供します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
