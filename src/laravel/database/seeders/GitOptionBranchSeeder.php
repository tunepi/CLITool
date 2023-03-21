<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionBranchSeeder extends Seeder
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
                'git_id' => 16,
                'git_option' => '-d',
                'description' => 'ブランチを削除する。ブランチは、その上流ブランチに完全にマージされていなければならず、-track または --set-upstream-to で上流が設定されていない場合は HEAD にマージされます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '-D',
                'description' => 'delete --force のショートカットです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '--create-reflog',
                'description' => 'ブランチの reflog を作成します。これにより、ブランチの ref に加えられたすべての変更の記録が有効になり、"<branchname>@{yesterday}" のような日付ベースの sha1 式を使用することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '-f',
                'description' => '<branchname>が既に存在する場合でも、<branchname>を<start-point>にリセットします。fをつけないと、git branchは既存のブランチを変更することを拒否します。d (または --delete) と組み合わせると、ブランチのマージ状態や有効なコミットを指しているかどうかに関係なく、ブランチを削除することができます。m (または -move) と組み合わせると、新しいブランチ名がすでに存在する場合でもブランチの名前を変更できますし、-c (または --copy) も同様です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '-m',
                'description' => 'ブランチを移動・改名し、そのconfigとreflogを一緒にする。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '-M',
                'description' => '--move --forceショートカットです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '-c',
                'description' => 'config/reflogも一緒にブランチをコピーする。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '-C',
                'description' => '--copy --forceのショートカットです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '--color[=<when>]',
                'description' => '現在のブランチ、ローカルブランチ、リモートトラッキングブランチを強調するためにブランチを着色します。値は、always（デフォルト）、never、またはautoでなければなりません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '--no-color',
                'description' => '設定ファイルがデフォルトでカラー出力を与えている場合でも、ブランチカラーをオフにします。color=neverと同じです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '-i',
                'description' => 'ソートおよびフィルタリングのブランチは、大文字と小文字が区別されません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '--column[=<options>]',
                'description' => 'ブランチリストをカラムで表示する。オプションの構文については、設定変数 column.branch を参照してください。--オプションなしの-columnと--no-columnは、それぞれalwaysとneverに相当する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '-r',
                'description' => 'リモート追跡ブランチをリストアップするか、削除する（-d と共に使用する場合）。オプションのパターンにマッチするように --list と組み合わせます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '-a',
                'description' => 'リモート・トラッキング・ブランチとローカル・ブランチの両方をリストアップします。オプションのパターンにマッチするように --list と組み合わせます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '-l',
                'description' => 'ブランチをリストアップします。オプションで <pattern>... を指定すると、例えば git branch --list "maint-*" のように、パターンにマッチするブランチのみをリストアップします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '--show-current',
                'description' => '現在のブランチの名前を表示します。デタッチドHEAD状態では、何も表示されない。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '-v',
                'description' => 'リストモードの場合、各ヘッドの sha1 とコミット件名を表示し、上流ブランチとの関係も表示します (あれば)。2回指定した場合は、リンク先のワークツリーのパス（もしあれば）と上流ブランチの名前も表示します（git remote show <remote>も参照）。現在のワークツリーのHEADのパスは表示されないことに注意してください（常にあなたのカレントディレクトリになります）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '-q',
                'description' => 'ブランチの作成・削除時に、エラー以外のメッセージを抑制し、より静かにする。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '--abbrev=<n>',
                'description' => 'コミットオブジェクト名を表示する冗長リストで、オブジェクトを一意に参照する少なくとも<n>個の16桁の長さの最短接頭辞を表示します。デフォルト値は7で、core.abbrev設定オプションで上書きすることができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '--no-abbrev',
                'description' => '出力リストに、省略せずに完全な sha1 を表示する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '-t',
                'description' => '新しいブランチを作成する際には、branch.<name>.remote と branch.<name>.merge の設定項目を設けて、新しいブランチの "upstream" 追跡設定を設定します。この設定は、git statusやgit branch -vで2つのブランチの関係を表示するようにgitに指示します。さらに、新しいブランチがチェックアウトされたときにアップストリームからプルするように、引数なしで git pull に指示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '--no-track',
                'description' => 'branch.autoSetupMerge構成変数が設定されていても、「上流」構成を設定しないこと。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '--recurse-submodules',
                'description' => 'このオプションは実験的なものです submodule.propagateBranches が有効な場合に、現在のコマンドをサブモジュールに再帰させるようにします。git-config[1]のsubmodule.propagateBranchesを参照してください。現在のところ、ブランチの作成のみがサポートされています。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '--set-upstream',
                'description' => 'このオプションは構文がわかりにくかったため、現在ではサポート対象外となっています。代わりに-trackまたは-set-upstream-toを使用してください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '-u <upstream>',
                'description' => '<branchname>の追跡情報を設定し、<upstream>が<branchname>の上流ブランチとみなされるようにします。<branchname>が指定されない場合は、現在のブランチがデフォルトとなる。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '--unset-upstream',
                'description' => '<branchname>のアップストリーム情報を削除する。ブランチが指定されない場合は、現在のブランチがデフォルトとなります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '--edit-description',
                'description' => 'エディタを開き、ブランチが何のためにあるのかを説明するテキストを編集し、他のさまざまなコマンド (たとえば format-patch, request-pull, merge (if enabled)) で使用できるようにします。複数行の説明を使用することもできます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '--contains [<commit>]',
                'description' => '指定したコミットを含むブランチのみをリストアップします（指定しない場合はHEAD）。listを暗示する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '--no-contains [<commit>]',
                'description' => '指定したコミットを含まないブランチのみをリストアップします（指定しない場合はHEAD）。listを意味します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '--merged [<commit>]',
                'description' => '指定したコミット（指定しない場合はHEAD）から先端が到達可能なブランチのみをリストアップします。listを暗示する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '--no-merged [<commit>]',
                'description' => '指定したコミット（指定しない場合はHEAD）から先端が到達できないブランチのみをリストアップします。listを暗示する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '<branchname>',
                'description' => '作成あるいは削除するブランチの名前。新しいブランチ名は、git-check-ref-format[1] で定義されているすべてのチェックをパスしなければなりません。これらのチェックの中には、ブランチ名に使用できる文字が制限されているものもあります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '<start-point>',
                'description' => '新しいブランチヘッドは、このコミットを指すようになります。ブランチ名、コミットID、タグのいずれかを指定することができます。このオプションが省略された場合は、現在のヘッドが代わりに使用されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '<oldbranch>',
                'description' => '名前を変更する既存のブランチの名前です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '<newbranch>',
                'description' => '既存のブランチの新しい名前です。<branchname>と同じ制限が適用される。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '--sort=<key>',
                'description' => '与えられたキーに基づきソートする。Prefix - 値の降順でソートする。sort=<キー> オプションは複数回使用することができ、その場合は最後のキーが主キーとなります。対応するキーは、git for-each-ref のキーと同じです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '--points-at <object>',
                'description' => '与えられたオブジェクトのブランチのみをリストアップする。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 16,
                'git_option' => '--format <format>',
                'description' => '表示中のブランチリファレンスとそれが指すオブジェクトから%(フィールド名)を補間する文字列です。書式はgit-for-each-ref[1]と同じです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
