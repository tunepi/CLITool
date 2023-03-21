<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionRangeDiffSeeder extends Seeder
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
                'git_id' => 31,
                'git_option' => '--no-dual-color',
                'description' => 'コミットの差分が異なる場合、git range-diff は元の差分の色合いを再現し、背景を赤/緑にした外側 -/+ の差分マーカーを追加して、例えばどの行が追加されたかなどの変更があったことを簡単に確認できるようにします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 31,
                'git_option' => '--creation-factor=<percent>',
                'description' => '作成/削除コストのファッジファクターを<percent>に設定します。デフォルトは 60 です。git range-diff が大きな変更を全書き換え (あるコミットを削除して別のコミットを追加する) と誤って判断した場合は大きな値を、逆の場合は小さな値を試してみてください。なぜこれが必要なのかについては、以下の ``アルゴリズム`` の項を参照してください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 31,
                'git_option' => '--left-only',
                'description' => '最初に指定した範囲（<rev1>...<rev2>形式を使用する場合は「左の範囲」）から欠落したコミットを抑制します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 31,
                'git_option' => '--right-only',
                'description' => '2番目に指定した範囲（<rev1>...<rev2>形式を使用する場合は「右の範囲」）から欠落したコミットを抑制することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 31,
                'git_option' => '--[no-]notes[=<ref>]',
                'description' => 'このフラグは、パッチを生成するgitログプログラムに渡されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 31,
                'git_option' => '<range1> <range2>',
                'description' => '2つの範囲で指定されたコミットを比較する。ここで、<range1>は<range2>の古いバージョンとみなされる。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 31,
                'git_option' => '<rev1>…​<rev2>',
                'description' => '<rev2>...<rev1>と<rev1>...<rev2>を渡すことに相当する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 31,
                'git_option' => '<base> <rev1> <rev2>',
                'description' => '<base>...<rev1>と<base>...<rev2>を渡すのと等価です。なお、<base> はブランチの正確な分岐点である必要はありません。例: ブランチ my-topic をリベースした後、git range-diff my-topic@{u} my-topic@{1} my-topic は、リベースによって生じた差異を表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
