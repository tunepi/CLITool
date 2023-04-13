<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionMvSeeder extends Seeder
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
                'git_id' => 15,
                'git_option' => '-f',
                'description' => '移動先が存在する場合でも、強制的にファイル名を変更または移動させる。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 15,
                'git_option' => '-k',
                'description' => 'エラーになるような移動・リネーム操作をスキップします。エラーは、ソースが存在しないかGitによって制御されていない場合、あるいは-fが与えられていない限り既存のファイルを上書きしてしまう場合に起こります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 15,
                'git_option' => '-n',
                'description' => '何もせず、何が起こるかを示すだけ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 15,
                'git_option' => '-v',
                'description' => '移動したときのファイル名を報告する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
