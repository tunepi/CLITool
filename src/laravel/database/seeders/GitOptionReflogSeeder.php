<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionReflogSeeder extends Seeder
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
                'git_id' => 50,
                'git_option' => 'show',
                'description' => 'git reflog show は、git log で受け入れられる任意のオプションを受け入れます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
