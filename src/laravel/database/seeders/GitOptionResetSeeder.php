<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionResetSeeder extends Seeder
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
                'git_id' => 13,
                'git_option' => '-q',
                'description' => 'エラーのみ表示する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 13,
                'git_option' => '--refresh',
                'description' => 'ミックスリセット後にインデックスをリフレッシュする。デフォルトで有効です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 13,
                'git_option' => '--pathspec-from-file=<file>',
                'description' => 'Pathspecは、コマンドラインの引数の代わりに<file>で渡されます。もし <file> が正確に - ならば、標準入力が使用されます。Pathspecの要素は、LFまたはCR/LFで区切られます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 13,
                'git_option' => '--pathspec-file-nul',
                'description' => 'pathspec-from-fileとの組み合わせでのみ意味があります。Pathspecの要素はNUL文字で区切られ、それ以外の文字は（改行や引用符を含めて）文字通りに解釈されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 13,
                'git_option' => '<pathspec>…​',
                'description' => '操作によって影響を受けるパスを制限する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
