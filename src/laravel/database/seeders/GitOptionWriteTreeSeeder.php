<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionWriteTreeSeeder extends Seeder
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
                'git_id' => 74,
                'git_option' => '--missing-ok',
                'description' => '通常、git write-tree は、ディレクトリによって参照されるオブジェクトがオブジェクト データベースに存在することを保証します。 このオプションは、このチェックを無効にします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 74,
                'git_option' => '--prefix=<prefix>/',
                'description' => 'サブディレクトリ <prefix> を表すツリー オブジェクトを書き込みます。 これは、指定されたサブディレクトリにあるサブプロジェクトのツリー オブジェクトを書き込むために使用できます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
