<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionInstawebSeeder extends Seeder
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
                'git_id' => 51,
                'git_option' => '-l',
                'description' => 'Web サーバーのみをローカル IP (127.0.0.1) にバインドします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 51,
                'git_option' => '-d',
                'description' => '実行される HTTP デーモンのコマンドライン。 ここでコマンド ライン オプションを指定すると、構成ファイルがコマンド ラインの最後に追加されます。 現在、apache2、lighttpd、mongoose、plackup、python、webrick がサポートされています。 (デフォルト: lighttpd)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 51,
                'git_option' => '-m',
                'description' => 'モジュール パス (httpd が Apache の場合にのみ必要)。 (デフォルト: /usr/lib/apache2/modules)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 51,
                'git_option' => '-p',
                'description' => 'httpd をバインドするポート番号。 (デフォルト: 1234)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 51,
                'git_option' => '-b',
                'description' => 'gitweb ページを表示するために使用する Web ブラウザー。 これは、gitweb インスタンスの URL とともに git web--browse ヘルパー スクリプトに渡されます。スクリプトが失敗すると、URL が stdout に出力されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 51,
                'git_option' => 'start',
                'description' => 'httpd インスタンスを起動して終了します。 新しいインスタンスを生成するために、必要に応じて構成ファイルを再生成します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 51,
                'git_option' => 'stop',
                'description' => 'httpd インスタンスを停止して終了します。 これは、新しいインスタンスを生成するための構成ファイルを生成せず、ブラウザを閉じません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 51,
                'git_option' => 'restart',
                'description' => 'httpd インスタンスを再起動して終了します。 新しいインスタンスを生成するために、必要に応じて構成ファイルを再生成します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
