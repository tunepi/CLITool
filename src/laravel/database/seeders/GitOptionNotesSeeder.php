<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionNotesSeeder extends Seeder
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
                'git_id' => 11,
                'git_option' => '-f',
                'description' => 'すでにノートがあるオブジェクトにノートを追加する場合、既存のノートを上書きする（中止するのではなく）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 11,
                'git_option' => '-m <msg>',
                'description' => '与えられたノートメッセージを使用する（プロンプトの代わりに）。複数の-mオプションが与えられた場合、それらの値は別々の段落として連結されます。で始まる行と、段落間の1行以外の空行は取り除かれます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 11,
                'git_option' => '-F <file>',
                'description' => '与えられたファイルからノートメッセージを取り込む。標準入力からノートメッセージを読み込むには、-を使用します。で始まる行と、段落間の1行以外の空行は取り除かれます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 11,
                'git_option' => '-C <object>',
                'description' => '与えられたblobオブジェクト（例えば、別のノート）をノートメッセージとする。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 11,
                'git_option' => '-c <object>',
                'description' => 'Cと同様ですが、-cではエディターが起動し、ユーザーがノートメッセージをさらに編集できるようになります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 11,
                'git_option' => '--allow-empty',
                'description' => '空のノートオブジェクトを保存できるようにする。デフォルトの動作は、空のノートを自動的に削除することです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 11,
                'git_option' => '--ref <ref>',
                'description' => '<ref>内のノートツリーを操作する。これはGIT_NOTES_REFと "core.notesRef "の設定をオーバーライドします。refは、refs/notes/で始まるときは完全なrefnameを指定し、notes/で始まるときはrefs/、それ以外はrefs/notes/が前置されてrefのフルネームを形成します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 11,
                'git_option' => '--ignore-missing',
                'description' => 'メモが添付されていないオブジェクトからメモを削除することを要求することは、エラーとは考えないでください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 11,
                'git_option' => '--stdin',
                'description' => 'また、標準入力からノートを削除するためにオブジェクト名を読みます（コマンドラインからのオブジェクト名と組み合わせられない理由はない）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 11,
                'git_option' => '-n',
                'description' => '何も削除せず、ノートが削除されるオブジェクト名だけを報告します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 11,
                'git_option' => '-s',
                'description' => 'ノートをマージする場合、ノートの競合を所定のストラテジーで解決します。以下のストラテジーが認識されます。「manual」（デフォルト）、「ours」、「theirs」、「union」、「cat_sort_uniq」です。このオプションは、"notes.mergeStrategy "構成設定をオーバーライドします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 11,
                'git_option' => '--commit',
                'description' => '進行中の git notes merge を確定させます。このオプションは、git notes merge が .git/NOTES_MERGE_WORKTREE に格納したコンフリクトを解決したときに使用します。これは、.git/NOTES_MERGE_PARTIAL に格納されている git notes merge で作成された部分的なマージコミットを、.git/NOTES_MERGE_WORKTREE のノートを追加して修正します。.git/NOTES_MERGE_REF symref に格納されている notes ref は、結果のコミットに更新されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 11,
                'git_option' => '--abort',
                'description' => '進行中のgitノートマージ、つまりコンフリクトのあるノートマージを中止/リセットします。これは、単にノートマージに関連するすべてのファイルを削除します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 11,
                'git_option' => '-q',
                'description' => 'ノートを合体させるときは、静かに操作する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 11,
                'git_option' => '-v',
                'description' => 'ノートをマージするときは、より詳しく説明する。ノートを削除する場合は、ノートが削除されたすべてのオブジェクト名を報告します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
