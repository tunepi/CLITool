<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionHelpSeeder extends Seeder
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
                'git_id' => 3,
                'git_option' => '-a',
                'description' => '利用可能なすべてのコマンドを標準出力に出力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 3,
                'git_option' => '--no-external-commands',
                'description' => 'allと一緒に使うと、$PATHにある外部の「git-*」コマンドのリストを除外します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 3,
                'git_option' => '--no-aliases',
                'description' => 'allと一緒に使用すると、設定されたエイリアスのリストを除外します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 3,
                'git_option' => '--verbose',
                'description' => 'allと一緒に使用すると、認識されたすべてのコマンドの説明を表示します。これはデフォルトである。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 3,
                'git_option' => '-c',
                'description' => '利用可能なすべての設定変数をリストアップします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 3,
                'git_option' => '-g',
                'description' => 'Gitコンセプトガイドの一覧を標準出力に出力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 3,
                'git_option' => '--user-interfaces',
                'description' => 'リポジトリ、コマンド、ファイルインターフェイスのドキュメントのリストを標準出力に出力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 3,
                'git_option' => '--developer-interfaces',
                'description' => 'ファイルフォーマット、プロトコル、その他の開発者インターフェースのドキュメントのリストを標準出力に印刷する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 3,
                'git_option' => '-i',
                'description' => 'コマンドのマニュアルページをinfoフォーマットで表示する。その際、infoプログラムが使用されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 3,
                'git_option' => '-m',
                'description' => 'コマンドのマニュアルページをmanフォーマットで表示します。このオプションは、help.format設定変数で設定された値を上書きするために使用することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 3,
                'git_option' => '-w',
                'description' => 'コマンドのマニュアルページをWeb（HTML）形式で表示します。その際、ウェブブラウザーを使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
