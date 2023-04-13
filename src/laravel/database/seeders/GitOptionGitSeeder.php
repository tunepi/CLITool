<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionGitSeeder extends Seeder
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
                'git_id' => 1,
                'git_option' => '-v',
                'description' => 'Gitのバージョンを出力します。このコマンドは内部で-versionコマンドへ変換され同じオプションとして扱われます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 1,
                'git_option' => '-h',
                'description' => '概要と最も一般的に使用されるコマンドリストを出力します。オプション--all or -aを指定すると、使用可能なすべてのコマンドが表示されます',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 1,
                'git_option' => '-c <path>',
                'description' => '現在の作業ディレクトリではなく<path>で git が開始されたかのように実行します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 1,
                'git_option' => '-c <name>=<value>',
                'description' => '構成パラメーターをコマンドに渡します。指定された値は、構成ファイルの値を上書きします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 1,
                'git_option' => '--config-env=<name>=<envvar>',
                'description' => '-c <name>=<value>のように、構成変数 <name>に値を指定します。ここで、<envvar> は値を取得する環境変数の名前です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 1,
                'git_option' => '--exec-path[=<path>]',
                'description' => 'コア Git プログラムがインストールされている場所へのパスを指定。これは、GIT_EXEC_PATH 環境変数を設定することによっても制御できます。パスが指定されていない場合、git は現在の設定を出力して終了します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 1,
                'git_option' => '--html-path',
                'description' => 'Git の HTML ドキュメントがインストールされているパスを末尾のスラッシュなしで出力して終了します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 1,
                'git_option' => '--man-path',
                'description' => 'このバージョンの Git のマニュアル ページのマンパス (「参考文献」を参照) を出力して終了します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 1,
                'git_option' => '--info-path',
                'description' => 'このバージョンの Git を説明する Info ファイルがインストールされているパスを出力して終了します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 1,
                'git_option' => '-p',
                'description' => '標準出力が端末の場合、すべての出力をless (または、設定されている場合は $PAGER) にパイプします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 1,
                'git_option' => '--git-dir=<path>',
                'description' => 'リポジトリ (「.git」ディレクトリ) へのパスを設定します。これは、環境変数（GIT_DIR）を設定することによっても制御できます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 1,
                'git_option' => '--work-tree=<path>',
                'description' => '作業ツリーへのパスを設定します。絶対パスまたは現在の作業ディレクトリからの相対パスを指定できます。これは、環境変数（GIT_WORK_TREE）と core.worktree 構成変数を設定することによっても制御できます 。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 1,
                'git_option' => '--namespace=<path>',
                'description' => 'Git 名前空間を設定します。詳細については、gitnamespaces[7]を参照してください。環境変数（GIT_NAMESPACE）を設定するのと同じです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 1,
                'git_option' => '--super-prefix=<path>',
                'description' => 'リポジトリの上からルートまでのパスを与える接頭辞を設定します。1 つの用途は、サブモジュールを呼び出したスーパープロジェクトに関するコンテキストをサブモジュールに与えることです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 1,
                'git_option' => '--bare',
                'description' => 'リポジトリをベア リポジトリとして扱います。環境変数（GIT_DIR）が設定されていない場合は、現在の作業ディレクトリに設定されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
