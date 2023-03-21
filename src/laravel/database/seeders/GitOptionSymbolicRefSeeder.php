<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionSymbolicRefSeeder extends Seeder
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
                'git_id' => 70,
                'git_option' => '-d',
                'description' => 'シンボリック ref <名前> を削除します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 70,
                'git_option' => '-q',
                'description' => '<name> がシンボリック ref ではなく、切り離された HEAD である場合、エラー メッセージを発行しません。 代わりに、ゼロ以外のステータスでサイレントに終了します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 70,
                'git_option' => '--short',
                'description' => '<name> の値をシンボリック参照として表示する場合は、値を短くしてみてください。 refs/heads/master から master へ。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 70,
                'git_option' => '--recurse',
                'description' => '<name> の値をシンボリック ref として表示する場合、<name> が別のシンボリック ref を参照している場合は、結果がシンボリック ref を指しなくなるまで、そのようなシンボリック ref のチェーンをたどります (--recurse、これがデフォルトです)。 . --no-recurse は、単一レベルのシンボリック参照のみを逆参照した後に停止します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 70,
                'git_option' => '-m',
                'description' => '<name> の reflog を <reason> で更新します。 これは、シンボリック参照を作成または更新する場合にのみ有効です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
