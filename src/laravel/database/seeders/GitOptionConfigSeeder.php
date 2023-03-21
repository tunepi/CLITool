<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionConfigSeeder extends Seeder
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
                'git_id' => 2,
                'git_option' => '--replace-all',
                'description' => 'デフォルトの動作では、最大で 1 行を置き換えます。これにより、キー (およびオプションでvalue-pattern) に一致するすべての行が置き換えられます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--add',
                'description' => '既存の値を変更せずに、オプションに新しい行を追加します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--get',
                'description' => '指定されたキーの値を取得します (オプションで、値に一致する正規表現によってフィルター処理されます)。キーが見つからなかった場合はエラー コード 1 を返し、複数のキー値が見つかった場合は最後の値を返します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--get-all',
                'description' => 'get と似ていますが、多値キーのすべての値を返します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--get-regexp',
                'description' => '--get-all と同様ですが、名前を正規表現として解釈し、キー名を書き出します。正規表現の一致は現在、大文字と小文字が区別され、セクション名と変数名が小文字であるキーの正規化されたバージョンに対して行われますが、サブセクション名はそうではありません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--get-urlmatch <name> <URL>',
                'description' => '2 部構成の名前 section.key を指定すると、指定された URL に最も一致する <URL> 部分を持つ section.<URL>.key の値が返されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--global',
                'description' => '書き込みオプションの場合、リポジトリではなくグローバル ファイルに書き込みを実行。読み取りオプションは使用可能なすべてのファイルからではなく、グローバル~/.gitconfigおよびからのみ読み取ります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--system',
                'description' => 'オプションを書き込む場合、リポジトリではなく システム全体に書き込みます。読み取りオプション、使用可能なすべてのファイルからではなく、システム全体からのみ読み取ります。                ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--local',
                'description' => 'オプションを書き込む場合、リポジトリ.git/configファイルに書き込みます。これがデフォルトの動作です。読み取りオプションの場合、使用可能なすべてのファイルからではなく、リポジトリからのみ読み取ります',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--worktree',
                'description' => 'extensions.worktreeConfigが有効な場合、$GIT_DIR/config.worktreeを読み書きする以外は-localと同様です。そうでない場合は、-localと同じです。GIT_DIRは、メインの作業ツリーでは$GIT_COMMON_DIRと同じですが、他の作業ツリーでは$GIT_DIR/worktrees/<id>/という形式であることに注意してください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '-f <config-file>',
                'description' => 'オプションを書き込む場合、リポジトリではなく、指定されたファイルに書き込みます.読み取りオプションの場合、使用可能なすべてのファイルからではなく、指定されたファイルからのみ読み取ります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--blob <blob>',
                'description' => 'ファイルの代わりに指定された blob を使用します。たとえば、master:.gitmodules を使用して、 master ブランチのファイル .gitmodulesから値を読み取ることができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--remove-section',
                'description' => '指定されたセクションを構成ファイルから削除します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--rename-section',
                'description' => '指定されたセクションの名前を新しい名前に変更します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--unset',
                'description' => 'キーに一致する行を構成ファイルから削除します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--unset-all',
                'description' => 'キーに一致するすべての行を構成ファイルから削除します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '-l',
                'description' => '構成ファイルに設定されているすべての変数とその値を一覧表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--fixed-value',
                'description' => 'value-pattern引数とともに使用すると、value-patternを正規表現ではなく、正確な文字列として扱います。これにより、マッチする名前と値のペアは、値がvalue-patternと正確に等しいものだけに限定されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--type <type>',
                'description' => 'git config は、入力や出力が与えられた型制約のもとで有効であることを保証し、出力される値を <type> の正規表現で正規化します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--name-only',
                'description' => 'listまたは--get-regexpの設定変数名のみを出力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--show-origin',
                'description' => 'クエリされたすべての設定オプションの出力を、オリジンタイプ（ファイル、標準入力、ブロブ、コマンドライン）と実際のオリジン（該当する場合は設定ファイルのパス、参照、ブロブID）で補強することです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--show-scope',
                'description' => 'show-originと同様、問い合わせたすべての設定オプションの出力を、その値のスコープ（ワークツリー、ローカル、グローバル、システム、コマンド）で補強します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--get-colorbool <name> [<stdout-is-tty>]',
                'description' => '<name>の色設定（例：color.diff）を検索し、"true" または "false" を出力します。<stdout-is-tty>は "true "か "false "のどちらかであるべきで、設定に "auto "とある場合は、それを考慮する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--get-color <name> [<default>]',
                'description' => 'nameに設定されている色（例：color.diff.new）を検索し、ANSIカラーエスケープシーケンスとして標準出力に出力します。nameに設定されている色がない場合は、オプションのdefaultパラメータが代わりに使用されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '-e',
                'description' => '指定された設定ファイルを修正するためのエディタを開きます。-system、--global、または repository（デフォルト）のいずれかを指定します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--[no-]includes',
                'description' => '設定ファイル中のinclude.*ディレクティブを尊重して値を検索します。デフォルトは、特定のファイルが指定された場合（例：-file、--globalなどを使用）にはoff、すべての設定ファイルを検索する場合にはonです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 2,
                'git_option' => '--default <value>',
                'description' => 'getを使用し、要求された変数が見つからない場合、<value>がその変数に割り当てられた値であるかのように動作する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
