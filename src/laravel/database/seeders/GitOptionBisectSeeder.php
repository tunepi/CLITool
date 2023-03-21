<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionBisectSeeder extends Seeder
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
                'git_id' => 38,
                'git_option' => '--no-checkout',
                'description' => '二分プロセスの各反復で新しい作業ツリーをチェックアウトしないでください。 代わりに、BISECT_HEAD という名前の特別な参照を更新して、テストする必要があるコミットを指すようにします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 38,
                'git_option' => '--first-parent',
                'description' => 'マージ コミットを確認したら、最初の親コミットのみに従ってください。ブランチのマージによって導入されたリグレッションを検出する際に、マージ コミットはバグの導入として識別され、その祖先は無視されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
