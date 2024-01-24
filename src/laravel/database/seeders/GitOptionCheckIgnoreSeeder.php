<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionCheckIgnoreSeeder extends Seeder
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
                'git_id' => 57,
                'git_option' => '-q',
                'description' => '何も出力せず、終了ステータスを設定するだけです。 これは単一のパス名でのみ有効です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 57,
                'git_option' => '-v',
                'description' => '除外されるパスを出力する代わりに、除外パターンに一致するパスごとに、パスとともに除外パターンを出力します。 (除外パターンに一致すると、通常はパスが除外されることを意味しますが、パターンが「!」で始まる場合は否定パターンであり、一致するとパスが除外されないことを意味します。)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 57,
                'git_option' => '--stdin',
                'description' => 'コマンドラインからではなく、標準入力から 1 行に 1 つずつパス名を読み取ります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 57,
                'git_option' => '-z',
                'description' => '出力形式は、機械で解析できるように変更されています (以下を参照)。 --stdin も指定すると、入力パスは改行文字ではなく NUL 文字で区切られます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 57,
                'git_option' => '-n',
                'description' => 'どのパターンとも一致しない指定されたパスを表示します。 これは、 --verbose が有効になっている場合にのみ意味があります。 そうしないと、パターンに一致するパスと一致しないパスを区別できなくなります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 57,
                'git_option' => '--no-index',
                'description' => 'チェックを行うときは、索引を調べないでください。 これは、パスが追跡された理由をデバッグするために使用できます。 git add . ユーザーが期待するように、または以前に git add -f で追加されたパスに一致する否定を含むパターンを開発するときに、ルールによって無視されませんでした。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
