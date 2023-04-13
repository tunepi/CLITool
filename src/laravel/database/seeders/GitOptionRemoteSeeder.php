<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionRemoteSeeder extends Seeder
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
                'git_id' => 28,
                'git_option' => '-v',
                'description' => 'もう少し冗長にして、名前の後にリモートのURLを表示する。プロミスリモートの場合、どのフィルター（blob:noneなど）が設定されているかも表示します。注：これは、リモートとサブコマンドの間に置かなければなりません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
