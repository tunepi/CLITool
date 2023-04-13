<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionMergeBaseSeeder extends Seeder
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
                'git_id' => 65,
                'git_option' => '-a',
                'description' => '1 つだけではなく、コミットのすべてのマージ ベースを出力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
