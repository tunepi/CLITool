<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionBugreportSeeder extends Seeder
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
                'git_id' => 4,
                'git_option' => '-o <path>',
                'description' => '出来上がったバグ報告ファイルをカレントディレクトリではなく、<path>に置く。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 4,
                'git_option' => '-s <format>',
                'description' => 'git-bugreport-<formated suffix>という名前のファイルを作成するために、バグレポートの名前に別の接尾辞を指定します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 4,
                'git_option' => '--no-diagnose',
                'description' => 'ユーザーのマシン、Git クライアント、リポジトリの状態に関する補足情報をまとめた zip アーカイブを作成します。アーカイブはバグレポートと同じ出力ディレクトリに書き込まれ、名前は git-diagnostics-<formatted suffix> となります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 4,
                'git_option' => '--diagnose[=<mode>]',
                'description' => 'ユーザーのマシン、Git クライアント、リポジトリの状態に関する補足情報をまとめた zip アーカイブを作成します。アーカイブはバグレポートと同じ出力ディレクトリに書き込まれ、名前は git-diagnostics-<formatted suffix> となります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
