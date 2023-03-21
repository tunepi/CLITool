<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionVerifyPackSeeder extends Seeder
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
                'git_id' => 73,
                'git_option' => '<pack>.idx …​',
                'description' => 'idxファイルを確認する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 73,
                'git_option' => '-v',
                'description' => 'パックを検証した後、パックに含まれるオブジェクトのリストとデルタ チェーン長のヒストグラムを表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 73,
                'git_option' => '-s',
                'description' => 'パックの内容を確認しないでください。 デルタ チェーンの長さのヒストグラムのみを表示します。 --verbose を指定すると、オブジェクトのリストも表示されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
