<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionFormatPatchSeeder extends Seeder
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
                'git_id' => 42,
                'git_option' => '-p',
                'description' => 'diffstats なしで単純なパッチを生成します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 42,
                'git_option' => '-U<n>',
                'description' => '通常の 3 行ではなく、<n> 行のコンテキストで差分を生成します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 42,
                'git_option' => '--output=<file>',
                'description' => 'stdout の代わりに特定のファイルに出力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 42,
                'git_option' => '--output-indicator-new=<char>',
                'description' => '生成されたパッチで新しい、古い、またはコンテキスト行を示すために使用される文字を指定します。 通常、それらはそれぞれ +、-、および " " です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 42,
                'git_option' => '--indent-heuristic',
                'description' => '差分ハンクの境界をシフトするヒューリスティックを有効にして、パッチを読みやすくします。 これがデフォルトです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 42,
                'git_option' => '--no-indent-heuristic',
                'description' => 'インデント ヒューリスティックを無効にします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 42,
                'git_option' => '--minimal',
                'description' => '可能な限り最小の差分が生成されるように、余分な時間を費やしてください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 42,
                'git_option' => '--patience',
                'description' => '「忍耐差分」アルゴリズムを使用して差分を生成します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 42,
                'git_option' => '--histogram',
                'description' => '「ヒストグラム差分」アルゴリズムを使用して差分を生成します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 42,
                'git_option' => '--anchored=<text>',
                'description' => '「固定差分」アルゴリズムを使用して差分を生成します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 42,
                'git_option' => '--diff-algorithm={patience|minimal|histogram|myers}',
                'description' => '差分アルゴリズムを選択します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 42,
                'git_option' => '--stat[=<width>[,<name-width>[,<count>]]]',
                'description' => 'diffstat を生成します。 デフォルトでは、必要なだけのスペースがファイル名部分に使用され、残りはグラフ部分に使用されます。 最大幅のデフォルトは端末の幅、または端末に接続されていない場合は 80 列で、<width> で上書きできます。 ファイル名部分の幅は、コンマの後に別の幅 <name-width> を指定することで制限できます。 グラフ部分の幅は、 --stat-graph-width=<width> (統計グラフを生成するすべてのコマンドに影響します) を使用するか、diff.statGraphWidth=<width> を設定することで制限できます (git format-patch には影響しません)。 . 3 番目のパラメーター <count> を指定すると、出力を最初の <count> 行に制限し、さらにある場合は ... を続けます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 42,
                'git_option' => '--compact-summary',
                'description' => 'ファイルの作成または削除 ("new" または "gone"、シンボリック リンクの場合はオプションで "+l") やモードの変更 (追加または削除のための "+x" または "-x") などの拡張ヘッダー情報の要約を出力します。 それぞれ実行可能ビット) diffstat で。 ファイル名部分とグラフ部分の間に情報を入れます。 --stat を意味します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 42,
                'git_option' => '--numstat',
                'description' => '--stat に似ていますが、追加および削除された行の数を 10 進表記で示し、パス名を省略せずに表示して、よりマシンフレンドリーにします。 バイナリ ファイルの場合、0 0 の代わりに 2 - を出力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 42,
                'git_option' => '--shortstat',
                'description' => '変更されたファイルの総数と、追加および削除された行の数を含む --stat 形式の最後の行のみを出力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 42,
                'git_option' => '-X[<param1,param2,…​>]',
                'description' => '各サブディレクトリの相対的な変更量の分布を出力します。 --dirstat の動作は、パラメーターのコンマ区切りリストを渡すことでカスタマイズできます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 42,
                'git_option' => '--cumulative',
                'description' => '--dirstat=cumulative の同義語',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 42,
                'git_option' => '--dirstat-by-file[=<param1,param2>…​]',
                'description' => '--dirstat=files,param1,param2… の同義語',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 42,
                'git_option' => '--summary',
                'description' => '作成、名前変更、モード変更などの拡張ヘッダー情報の要約を出力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 42,
                'git_option' => '--no-renames',
                'description' => '構成ファイルでデフォルトでそうするように指定されている場合でも、名前変更の検出をオフにします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
