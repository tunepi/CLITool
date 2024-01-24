<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionMergeToolSeeder extends Seeder
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
                'git_id' => 20,
                'git_option' => '-t <tool>',
                'description' => '<tool>で指定されたマージ解決プログラムを使用する。有効な値は emerge、gvimdiff、kdiff3、meld、vimdiff、および tortoisemerge です。git mergetool --tool-help を実行すると、有効な <tool> 設定のリストが表示されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 20,
                'git_option' => '--tool-help',
                'description' => '-toolで使用できるマージツールのリストを表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 20,
                'git_option' => '-y',
                'description' => 'マージ解決プログラムの各呼び出しの前にプロンプトを表示しないようにします。これは、マージ解決プログラムが --tool オプションまたは merge.tool 構成変数で明示的に指定されている場合の既定値です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 20,
                'git_option' => '--prompt',
                'description' => 'マージ解決プログラムの各呼び出しの前にプロンプトを表示し、ユーザーにパスをスキップする機会を与える。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 20,
                'git_option' => '-g',
                'description' => 'git-mergetool を -g または --gui オプションで起動した場合、デフォルトのマージツールは merge.tool の代わりに merge.guitool 変数に設定されたものを読み込みます。merge.guitool が設定されていない場合は、merge.tool で設定されているツールにフォールバックします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 20,
                'git_option' => '--no-gui',
                'description' => 'これは、以前の -g または --gui の設定を上書きし、設定された merge.tool 変数からデフォルトのマージツールが読み込まれます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 20,
                'git_option' => '-O<orderfile>',
                'description' => '1行に1つのシェルグロブパターンを持つ <orderfile> で指定された順序でファイルを処理します。これは、diff.orderFile設定変数（git-config[1]を参照）を上書きする。diff.orderFileをキャンセルするには、-O/dev/nullを使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
