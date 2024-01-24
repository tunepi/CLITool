<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionCountObjectsSeeder extends Seeder
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
                'git_id' => 59,
                'git_option' => '-v',
                'description' => 'より詳細に報告する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 59,
                'git_option' => '-H',
                'description' => '人間が読める形式での印刷サイズを設定',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
