<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionHashObjectSeeder extends Seeder
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
                'git_id' => 62,
                'git_option' => '-t <type>',
                'description' => 'タイプを指定します (デフォルト: "blob")。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 62,
                'git_option' => '-w',
                'description' => '実際にオブジェクトをオブジェクト データベースに書き込みます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 62,
                'git_option' => '--stdin',
                'description' => 'ファイルからではなく、標準入力からオブジェクトを読み取ります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 62,
                'git_option' => '--stdin-paths',
                'description' => 'コマンドラインからではなく、標準入力からファイル名を 1 行に 1 つずつ読み取ります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 62,
                'git_option' => '--path',
                'description' => '指定されたパスにあるオブジェクトをハッシュします。 ファイルの場所はハッシュ値に直接影響しませんが、オブジェクトをオブジェクト データベースに配置する前にオブジェクトに適用する必要がある Git フィルターを決定するためにパスが使用され、フィルターを適用した結果、実際の blob put オブジェクトデータベースへのファイルは、指定されたファイルとは異なる場合があります。 このオプションは主に、作業ディレクトリの外にある一時ファイルまたは stdin から読み取ったファイルをハッシュする場合に役立ちます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 62,
                'git_option' => '--no-filters',
                'description' => '行末変換を含む、属性メカニズムによって選択された入力フィルターを無視して、コンテンツをそのままハッシュします。 ファイルが標準入力から読み取られる場合、 --path オプションが指定されていない限り、これは常に暗示されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 62,
                'git_option' => '--literally',
                'description' => '--stdin を使用して、標準のオブジェクト解析または git-fsck チェックに合格しない可能性のあるルーズ オブジェクトにガベージをハッシュできるようにします。 Git 自体のストレス テストや、実際に遭遇した破損または偽のオブジェクトの特性の再現に役立ちます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
