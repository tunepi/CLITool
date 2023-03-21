<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionUpdateServerInfoSeeder extends Seeder
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
                'git_id' => 55,
                'git_option' => '-f',
                'description' => '情報ファイルを最初から更新します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
