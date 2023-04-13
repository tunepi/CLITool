<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionSubmoduleSeeder extends Seeder
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
                'git_id' => 29,
                'git_option' => '-q',
                'description' => 'エラーメッセージのみ印刷する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 29,
                'git_option' => '--progress',
                'description' => 'このオプションは、addコマンドとupdateコマンドに対してのみ有効です。進捗状況は、ターミナルに接続されている場合、-qが指定されていない限り、デフォルトで標準エラーストリームに報告されます。このフラグは、標準エラーストリームがターミナルに向けられない場合でも、プログレスステータスを強制します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 29,
                'git_option' => '--all',
                'description' => 'このオプションはdeinitコマンドに対してのみ有効です。作業ツリー内のすべてのサブモジュールの登録を解除します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 29,
                'git_option' => '-b',
                'description' => 'サブモジュールとして追加するリポジトリのブランチ。ブランチの名前は、.gitmodules for update --remote の submodule.<name>.branch として記録されます。特別な値として .を指定すると、サブモジュール内のブランチの名前を現在のリポジトリの現在のブランチと同じ名前にする必要があることを示します。このオプションが指定されていない場合、デフォルトでリモートの HEAD になります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 29,
                'git_option' => '-f',
                'description' => 'このオプションは、add、deinit、updateコマンドに対してのみ有効です。addを実行すると、無視されていたサブモジュールのパスを追加できるようになります。deinitを実行すると、サブモジュールの作業ツリーがローカルな変更を含んでいても、削除されます。updateを実行する場合（checkout手順でのみ有効）、異なるコミットに切り替えるときにサブモジュールのローカル変更を破棄し、サブモジュールでチェックアウト操作を常に実行します（含むリポジトリのインデックスに記載されているコミットがサブモジュールでチェックアウトしたコミットと一致する場合でも）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 29,
                'git_option' => '--cached',
                'description' => 'このオプションはstatusコマンドとsummaryコマンドに対してのみ有効です。これらのコマンドは通常、サブモジュールHEADにあるコミットを使用しますが、このオプションを使用すると、代わりにインデックスに格納されているコミットが使用されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 29,
                'git_option' => '-files',
                'description' => 'このオプションはsummaryコマンドに対してのみ有効です。このオプションが使用された場合、このコマンドはインデックス内のコミットとサブモジュールHEAD内のコミットを比較する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 29,
                'git_option' => '-n',
                'description' => 'このオプションは summary コマンドに対してのみ有効です。サマリーのサイズ（合計で表示されるコミット数）を制限します。0 を指定するとサマリーは無効になり、負数を指定すると無制限になります (デフォルト)。この制限は、変更されたサブモジュールにのみ適用されます。追加/削除/タイプ変更されたサブモジュールの場合は、常にサイズが1に制限されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 29,
                'git_option' => '--remote',
                'description' => 'このオプションは、updateコマンドにのみ有効です。サブモジュールの更新にスーパープロジェクトの記録されたSHA-1を使う代わりに、サブモジュールのリモート追跡ブランチのステータスを使うようにします。使用するリモートはブランチのリモート（branch.<名前>.remote）で、デフォルトはオリジンです。使用するリモートブランチはデフォルトではリモートの HEAD ですが、ブランチ名は .gitmodules または .git/config で submodule.<name>.branch オプションを設定することで上書きすることができます (.git/config が優先されます).',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 29,
                'git_option' => '-N',
                'description' => 'このオプションは、updateコマンドに対してのみ有効です。リモートサイトから新しいオブジェクトをフェッチしない。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 29,
                'git_option' => '--checkout',
                'description' => 'このオプションは、updateコマンドに対してのみ有効です。スーパープロジェクトに記録されたコミットをサブモジュールのデタッチされたHEADでチェックアウトします。これはデフォルトの動作で、このオプションの主な用途は、checkout以外の値に設定されている場合にsubmodule.$name.updateをオーバーライドすることです。キーであるsubmodule.$name.updateが明示的に設定されていないか、checkoutに設定されている場合、このオプションは暗黙の了解となります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 29,
                'git_option' => '--merge',
                'description' => 'このオプションは update コマンドに対してのみ有効です。スーパープロジェクトに記録されているコミットをサブモジュールの現在のブランチにマージします。このオプションを指定した場合、サブモジュールのHEADは切り離されません。マージに失敗してこの処理ができない場合、サブモジュール内で生じるコンフリクトを通常のコンフリクト解決ツールで解決する必要があります。キー submodule.$name.update が merge に設定されている場合、このオプションは暗黙の了解です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 29,
                'git_option' => '--rebase',
                'description' => 'このオプションは、updateコマンドでのみ有効です。現在のブランチをスーパープロジェクトに記録されているコミットにリベースします。このオプションを指定した場合、サブモジュールの HEAD は切り離されません。マージの失敗によってこの処理が妨げられた場合は、git-rebase[1] で解決する必要があります。submodule.$name.update のキーが rebase に設定されている場合、このオプションは暗黙の了解です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 29,
                'git_option' => '--init',
                'description' => 'このオプションはupdateコマンドに対してのみ有効です。更新する前に、これまでに "git submodule init" が呼び出されていないすべてのサブモジュールを初期化します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 29,
                'git_option' => '--name',
                'description' => 'このオプションはaddコマンドに対してのみ有効です。このオプションは、サブモジュールの名前をデフォルトのパスではなく、与えられた文字列に設定します。名前は、ディレクトリ名として有効でなければならず、/ で終わってはいけません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 29,
                'git_option' => '--reference <repository>',
                'description' => 'このオプションは、addコマンドとupdateコマンドにのみ有効です。これらのコマンドは、リモートリポジトリをクローンする必要がある場合があります。この場合、このオプションは git-clone[1] コマンドに渡されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 29,
                'git_option' => '--dissociate',
                'description' => 'このオプションは、addコマンドとupdateコマンドにのみ有効です。これらのコマンドは、リモートリポジトリをクローンする必要がある場合があります。この場合、このオプションは git-clone[1] コマンドに渡されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 29,
                'git_option' => '--recursive',
                'description' => 'This option is only valid for foreach, update, status and sync commands. Traverse submodules recursively. The operation is performed not only in the submodules of the current repo, but also in any nested submodules inside those submodules (and so on).',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 29,
                'git_option' => '--depth',
                'description' => 'このオプションは、addコマンドとupdateコマンドで有効です。指定したリビジョン数に切り詰めた履歴を持つ浅いクローンを作成します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 29,
                'git_option' => '--[no-]recommend-shallow',
                'description' => 'このオプションは、updateコマンドに対してのみ有効です。サブモジュールの最初のクローンでは、デフォルトで .gitmodules ファイルが提供する推奨の submodule.<name>.shallow が使用されます。推奨を無視するには、--no-recommend-shallowを使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
