<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionRequestPullSeeder extends Seeder
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
                'git_id' => 44,
                'git_option' => '-p',
                'description' => '出力にパッチ テキストを含めます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 44,
                'git_option' => '<start>',
                'description' => 'で開始することをコミットします。 これは、上流の履歴に既にあるコミットを指定します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 44,
                'git_option' => '<URL>',
                'description' => 'プル元のリポジトリ URL。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 44,
                'git_option' => '<end>',
                'description' => 'コミットして終了します (デフォルトは HEAD)。 これは、プルを要求している履歴の先頭にあるコミットに名前を付けます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
