<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionRmSeeder extends Seeder
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
                'git_id' => 14,
                'git_option' => '<pathspec>…​',
                'description' => '削除するファイル。先頭のディレクトリ名（例：dirでdir/file1とdir/file2を削除）を指定すると、ディレクトリ内のすべてのファイル、および再帰的にすべてのサブディレクトリを削除できますが、この場合は-rオプションが明示的に指定される必要があります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 14,
                'git_option' => '-f',
                'description' => '最新のチェックを上書きする。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 14,
                'git_option' => '-n',
                'description' => '実際にファイルを削除することはありません。その代わりに、インデックスに存在し、コマンドによって削除されるかどうかを表示するだけです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 14,
                'git_option' => '-r',
                'description' => '先頭のディレクトリ名が指定された場合に、再帰的に削除できるようにする。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 14,
                'git_option' => '--cached',
                'description' => 'このオプションを使用すると、インデックスからパスのみをアンステージして削除することができます。作業ツリーファイルは、変更されているかどうかにかかわらず、そのまま残されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 14,
                'git_option' => '--ignore-unmatch',
                'description' => '一致するファイルがない場合でも、ステータスを0にして終了する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 14,
                'git_option' => '--sparse',
                'description' => 'sparse-checkout 円錐の外側にあるインデックスエントリを更新できるようにしました。通常、git rmはパスがsparse-checkoutコーンに収まらないインデックスエントリを更新することを拒否します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 14,
                'git_option' => '-q',
                'description' => 'git rmは通常、削除された各ファイルに対して1行ずつ（rmコマンドの形で）出力します。このオプションは、その出力を抑制します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 14,
                'git_option' => '--pathspec-from-file=<file>',
                'description' => 'Pathspecは、コマンドラインの引数の代わりに<file>で渡されます。もし <file> が正確に - ならば、標準入力が使用されます。Pathspecの要素は、LFまたはCR/LFで区切られます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 14,
                'git_option' => '--pathspec-file-nul',
                'description' => 'pathspec-from-fileとの組み合わせでのみ意味があります。Pathspecの要素はNUL文字で区切られ、それ以外の文字は（改行や引用符を含めて）文字通りに解釈されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
