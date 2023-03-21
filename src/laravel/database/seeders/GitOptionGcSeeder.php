<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionGcSeeder extends Seeder
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
                'git_id' => 48,
                'git_option' => '--aggressive',
                'description' => '通常、git gc は非常に高速に実行され、ディスク容量の使用率とパフォーマンスが良好です。 このオプションにより、git gc はより積極的にリポジトリを最適化しますが、時間がかかります。 この最適化の効果はほとんど永続的です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 48,
                'git_option' => '--auto',
                'description' => 'このオプションを使用すると、git gc はハウスキーピングが必要かどうかをチェックします。 そうでない場合は、何も実行せずに終了します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 48,
                'git_option' => '--cruft',
                'description' => '到達不能なオブジェクトを期限切れにするときは、ルーズ オブジェクトとして保管するのではなく、クラフト パックに個別にパックします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 48,
                'git_option' => '--prune=<date>',
                'description' => 'date より古いルース オブジェクトを削除します (デフォルトは 2 週間前で、構成変数 gc.pruneExpire でオーバーライドできます)。 --prune=現在、古いオブジェクトに関係なく緩いオブジェクトを削除し、別のプロセスが同時にリポジトリに書き込みを行っている場合、破損のリスクを高めます。 以下の「注意事項」を参照してください。 --prune はデフォルトでオンになっています。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 48,
                'git_option' => '--no-prune',
                'description' => 'ゆるいものを剪定しないでください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 48,
                'git_option' => '--quiet',
                'description' => 'すべての進捗レポートを抑制します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 48,
                'git_option' => '--force',
                'description' => 'このリポジトリで別の git gc インスタンスが実行されている可能性がある場合でも、強制的に git gc を実行します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 48,
                'git_option' => '--keep-largest-pack',
                'description' => '最大のパックと .keep ファイルでマークされたパックを除くすべてのパックは、1 つのパックに統合されます。 このオプションを使用すると、gc.bigPackThreshold は無視されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
