<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionUpdateIndexSeeder extends Seeder
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
                'git_id' => 71,
                'git_option' => '--add',
                'description' => '指定したファイルがまだインデックスにない場合は、追加されます。 デフォルトの動作は、新しいファイルを無視することです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 71,
                'git_option' => '--remove',
                'description' => '指定されたファイルがインデックスにあるが見つからない場合、そのファイルは削除されます。 デフォルトの動作は、削除されたファイルを無視することです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 71,
                'git_option' => '--refresh',
                'description' => '現在のインデックスを調べて、stat() 情報をチェックすることにより、マージまたは更新が必要かどうかを確認します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 71,
                'git_option' => '-q',
                'description' => '静かな。 --refresh でインデックスの更新が必要であることが判明した場合、デフォルトの動作ではエラーが発生します。 このオプションにより、とにかく git update-index が続行されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 71,
                'git_option' => '--ignore-submodules',
                'description' => 'サブモジュールを更新しようとしないでください。 このオプションは、--refresh の前に渡された場合にのみ考慮されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 71,
                'git_option' => '--unmerged',
                'description' => '--refresh がインデックスでマージされていない変更を検出した場合、デフォルトの動作ではエラーが発生します。 このオプションにより、とにかく git update-index が続行されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 71,
                'git_option' => '--ignore-missing',
                'description' => '--refresh 中に不足しているファイルを無視します',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 71,
                'git_option' => '--cacheinfo <mode>,<object>,<path>',
                'description' => '指定した情報をインデックスに直接挿入します。 下位互換性のために、これら 3 つの引数を 3 つの個別のパラメーターとして指定することもできますが、新しいユーザーは単一パラメーター形式を使用することをお勧めします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 71,
                'git_option' => '--index-info',
                'description' => 'stdin からインデックス情報を読み取ります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 71,
                'git_option' => '--chmod=(+|-)x',
                'description' => '更新されたファイルに実行権限を設定します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 71,
                'git_option' => '--[no-]assume-unchanged',
                'description' => 'このフラグを指定すると、パスに記録されたオブジェクト名は更新されません。 代わりに、このオプションは、パスの「変更されていないと仮定する」ビットを設定/設定解除します。 「変更されていないと仮定する」ビットがオンの場合、ユーザーはファイルを変更しないことを約束し、作業ツリー ファイルがインデックスに記録されているものと一致すると Git が想定できるようにします。 作業ツリー ファイルを変更する場合は、ビットを設定解除して Git に通知する必要があります。 これは、lstat(2) システム コールが非常に遅いファイルシステム (cifs など) で大きなプロジェクトを扱う場合に役立つことがあります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 71,
                'git_option' => '--really-refresh',
                'description' => '--refresh と同様ですが、「変更されていないと仮定する」設定に関係なく、統計情報を無条件にチェックします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 71,
                'git_option' => '--[no-]skip-worktree',
                'description' => 'これらのフラグのいずれかが指定されている場合、パスに記録されたオブジェクト名は更新されません。 代わりに、これらのオプションは、パスの「skip-worktree」ビットを設定および設定解除します。 詳細については、以下のセクション「スキップ ワークツリー ビット」を参照してください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 71,
                'git_option' => '--[no-]ignore-skip-worktree-entries',
                'description' => '--remove オプションが指定された場合でも、skip-worktree (AKA "index-only") エントリを削除しないでください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 71,
                'git_option' => '--[no-]fsmonitor-valid',
                'description' => 'これらのフラグのいずれかが指定されている場合、パスに記録されたオブジェクト名は更新されません。 代わりに、これらのオプションは、パスの「fsmonitor valid」ビットを設定および設定解除します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 71,
                'git_option' => '-g',
                'description' => 'インデックス エントリが HEAD コミットのものとは異なるパスで git update-index 自体を実行します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 71,
                'git_option' => '--unresolve',
                'description' => 'ファイルが誤ってクリアされた場合、マージ中にファイルのマージされていない状態または更新が必要な状態を復元します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 71,
                'git_option' => '--info-only',
                'description' => 'このフラグに続くすべての <file> 引数に対して、オブジェクト データベースにオブジェクトを作成しないでください。 オブジェクト ID をインデックスに挿入するだけです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 71,
                'git_option' => '--force-remove',
                'description' => '作業ディレクトリにまだそのようなファイルがある場合でも、インデックスからファイルを削除します。 (--remove を意味します。)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 71,
                'git_option' => '--replace',
                'description' => 'デフォルトでは、インデックスにファイル パスが存在する場合、git update-index はパス/ファイルの追加を拒否します。 同様に、ファイル パス/ファイルが存在する場合、ファイル パスを追加することはできません。 --replace フラグを使用すると、追加するエントリと競合する既存のエントリは、警告メッセージとともに自動的に削除されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
