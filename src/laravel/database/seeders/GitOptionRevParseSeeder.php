<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionRevParseSeeder extends Seeder
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
                'git_id' => 68,
                'git_option' => '--since=datestring',
                'description' => '日付文字列を解析し、対応する git rev-list の --max-age= パラメータを出力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 68,
                'git_option' => '--until=datestring',
                'description' => '日付文字列を解析し、対応する git rev-list の --min-age= パラメータを出力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 68,
                'git_option' => '<args>…​',
                'description' => '解析するフラグとパラメーター。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
