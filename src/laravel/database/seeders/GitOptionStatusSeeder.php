<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionStatusSeeder extends Seeder
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
                'git_id' => 8,
                'git_option' => '-s',
                'description' => '短文で出力する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 8,
                'git_option' => '-b',
                'description' => '短文でブランチもしくは追跡情報を表示する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 8,
                'git_option' => '--show-stash',
                'description' => '現在stashにためているエントリー数を表示する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 8,
                'git_option' => '--porcelain[=<version>]',
                'description' => 'スクリプト用に、出力内容を解析しやすい形式で提供します。これは短い出力と似ていますが、Git のバージョンやユーザーの設定に関係なく安定したままです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 8,
                'git_option' => '--long',
                'description' => 'ロングフォーマットで出力する。これはデフォルトです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 8,
                'git_option' => '-v',
                'description' => '変更されたファイル名に加えて、コミットするためにステージされたテキスト形式の変更も表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 8,
                'git_option' => '-u[<mode>]',
                'description' => '未追跡のファイルを表示する。

                modeパラメータは、追跡されていないファイルの取り扱いを指定するために使用します。デフォルトはallで、指定する場合はオプションに引っかかるようにしなければならない。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 8,
                'git_option' => '--ignore-submodules[=<when>]',
                'description' => 'サブモジュールの変更を探すときに、その変更を無視する。<when> には "none", "untracked", "dirty", "all" のいずれかを指定します（これがデフォルトです）。none" を使うと、サブモジュールがトラッキングされていないファイルや変更されたファイルを含んでいたり、HEAD がスーパープロジェクトに記録されているコミットと異なっていたりする場合に変更されたとみなし、git-config[1] や gitmodules[5] の ignore オプションの設定を上書きするために使うことができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 8,
                'git_option' => '--ignored[=<mode>]',
                'description' => '無視されたファイルも表示する。

                modeパラメータは、無視されたファイルの扱いを指定するために使用します。オプションで、デフォルトはtraditionalです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 8,
                'git_option' => '-z',
                'description' => 'LFの代わりにNULでエントリーを終了させる。これは、他のフォーマットが与えられていない場合、 --porcelain=v1 の出力フォーマットを意味する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 8,
                'git_option' => '--column[=<options>]',
                'description' => '追跡されていないファイルをカラムで表示する。オプションの構文については、設定変数 column.status を参照してください。--オプションのない-columnと--no-columnは、それぞれalwaysとneverに相当する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 8,
                'git_option' => '--ahead-behind',
                'description' => 'ブランチの上流ブランチに対する詳細な先行／後行カウントを表示するかしないか。デフォルトはtrueです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 8,
                'git_option' => '--renames',
                'description' => 'ユーザーの設定に関係なく、リネームの検出をオン/オフにします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 8,
                'git_option' => '--find-renames[=<n>]',
                'description' => 'リネーム検出をオンにし、オプションで類似度の閾値を設定します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
