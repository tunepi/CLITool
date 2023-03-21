<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionlsTreeSeeder extends Seeder
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
                'git_id' => 64,
                'git_option' => '<tree-ish>',
                'description' => 'tree-ishのID',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 64,
                'git_option' => '-d',
                'description' => 'その子ではなく、名前付きツリー エントリ自体のみを表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 64,
                'git_option' => '-r',
                'description' => 'サブツリーに再帰します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 64,
                'git_option' => '-t',
                'description' => '再帰する場合でもツリー エントリを表示します。 -r が渡されなかった場合は効果がありません。 -d は -t を意味します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 64,
                'git_option' => '-l',
                'description' => 'BLOB (ファイル) エントリのオブジェクト サイズを表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 64,
                'git_option' => '-z',
                'description' => '出力時に \0 行を終了し、ファイル名を引用しません。 詳細については、以下の出力フォーマットを参照してください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 64,
                'git_option' => '--name-only',
                'description' => '(「長い」出力ではなく) ファイル名のみを 1 行に 1 つずつリストします。 --object-only と組み合わせることはできません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 64,
                'git_option' => '--object-only',
                'description' => 'オブジェクトの名前のみを 1 行に 1 つずつリストします。 --name-only または --name-status と組み合わせることはできません。 これは --format="%(objectname)" を指定するのと同じですが、このオプションとその正確な形式の両方で、コマンドは一般的なフォーマット メカニズムを経由する代わりに、手動で最適化されたコードパスを使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 64,
                'git_option' => '--abbrev[=<n>]',
                'description' => '完全な 40 バイトの 16 進数のオブジェクト行を表示する代わりに、オブジェクトを一意に参照する、少なくとも <n> 桁の 16 進数の最短のプレフィックスを表示します。 --abbrev=<n> でデフォルト以外の桁数を指定できます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 64,
                'git_option' => '--full-name',
                'description' => '現在の作業ディレクトリからの相対パス名を表示する代わりに、絶対パス名を表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 64,
                'git_option' => '--full-tree',
                'description' => 'リストを現在の作業ディレクトリに制限しないでください。 --full-name を意味します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 64,
                'git_option' => '--format=<format>',
                'description' => '表示されている結果から %(fieldname) を補間する文字列。 また、%% を % に補間し、%xx (xx は 16 進数) を 16 進コード xx の文字に補間します。 たとえば、%00 は \0 (NUL) に、%09 は \t (TAB) に、%0a は \n (LF) に補間されます。 --format を指定した場合、--long、--name-only、--object-only などの他のフォーマット変更オプションと組み合わせることはできません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 64,
                'git_option' => '[<path>…​]',
                'description' => 'パスが指定されたら、それらを表示します (これは実際には生のパス名ではなく、一致するパターンのリストであることに注意してください)。 それ以外の場合は、暗黙的にツリーのルート レベルを唯一のパス引数として使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
