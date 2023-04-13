<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionFetchSeeder extends Seeder
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
                'git_id' => 25,
                'git_option' => '--all',
                'description' => 'すべてのリモートを取得する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 25,
                'git_option' => '-a',
                'description' => '.git/FETCH_HEADの既存のコンテンツに、取得したrefの名前とオブジェクト名を追加します。このオプションをつけないと、.git/FETCH_HEADの古いデータは上書きされます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 25,
                'git_option' => '--atomic',
                'description' => 'アトミックトランザクションを使用してローカルRefを更新する。すべてのrefが更新されるか、エラー時にrefが更新されないかのどちらかです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 25,
                'git_option' => '--depth=<depth>',
                'description' => '各リモートブランチの履歴の先端から指定したコミット数まで取得を制限します。git clone で --depth=<depth> オプションを指定して浅いリポジトリを作成した場合 (git-clone[1] を参照)、指定したコミット数まで履歴を深くしたり短くしたりします。深くなったコミットのタグは取得されません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 25,
                'git_option' => '-deepen=<depth>',
                'description' => 'depthと似ていますが、リモートブランチ履歴の先端からではなく、現在の浅い境界からのコミット数を指定する点が異なります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 25,
                'git_option' => '--shallow-since=<date>',
                'description' => '浅いリポジトリの履歴を深くしたり短くしたりして、<date>以降の到達可能なすべてのコミットを含むようにします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 25,
                'git_option' => '--shallow-exclude=<revision>',
                'description' => '浅いリポジトリの履歴を深くしたり短くしたりして、指定したリモートブランチやタグから到達可能なコミットを除外します。このオプションは複数回指定することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 25,
                'git_option' => '--unshallow',
                'description' => 'ソースリポジトリが完全である場合、浅いリポジトリを完全なリポジトリに変換し、浅いリポジトリに課されるすべての制限を取り除きます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 25,
                'git_option' => '--update-shallow',
                'description' => 'シャローリポジトリから取得する場合、デフォルトでは git fetch は .git/shallow の更新を必要とする参照は拒否します。このオプションは .git/shallow を更新し、そのような ref を受け入れるようにします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 25,
                'git_option' => '--negotiation-tip=<commit|glob>',
                'description' => 'デフォルトでは、Git は受信するパックファイルのサイズを小さくするために、すべてのローカル refs から到達可能なコミットをサーバーに報告し、共通のコミットを探します。指定すると、Git は指定した tips から到達可能なコミットのみを報告します。これは、どのローカル ref が取得するアップストリーム ref と共通のコミットを持っているか知っている場合に、取得を高速化するのに便利です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 25,
                'git_option' => '--negotiate-only',
                'description' => 'サーバーから何も取得せず、代わりにサーバーと共通で持っている、与えられた --negotiation-tip=* 引数の先祖を表示する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 25,
                'git_option' => '--dry-run',
                'description' => '変更を加えずに、何が行われるかを示す。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 25,
                'git_option' => '--[no-]write-fetch-head',
                'description' => 'FETCH_HEADファイルで取得したリモート参照リストを$GIT_DIR直下に書き込む。これはデフォルトです。コマンドラインから --no-write-fetch-head を渡すと、ファイルを書き込まないように Git に指示します。dry-runオプションでは、ファイルは決して書き込まれません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 25,
                'git_option' => '-f',
                'description' => 'git fetch を <src>:<dst> の refspec と共に使用すると、後述の <refspec> の部分で説明するように、ローカルブランチの更新を拒否することがあります。このオプションはそのチェックを無効にします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 25,
                'git_option' => '-k',
                'description' => 'ダウンロードしたパックを保管する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 25,
                'git_option' => '--multiple',
                'description' => '<repository>と<group>の引数を複数指定できるようにする。<refspec>を指定することはできない。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 25,
                'git_option' => '--[no-]auto-maintenance',
                'description' => 'git maintenance run --auto を最後に実行すると、必要に応じてリポジトリの自動メンテナンスが行われます。(--[no-]auto-gcは同義語です。) これはデフォルトで有効になっています。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 25,
                'git_option' => '--[no-]write-commit-graph',
                'description' => 'フェッチ後にコミットグラフを書きます。これは、コンフィグ設定 fetch.writeCommitGraph をオーバーライドします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 25,
                'git_option' => '--prefetch',
                'description' => '設定されたrefspecを修正して、すべてのrefをrefs/prefetch/名前空間に配置します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 25,
                'git_option' => '-P',
                'description' => 'フェッチする前に、リモート上にもはや存在しないリモート追跡参照を削除します。タグは、デフォルトのタグ自動追従または --tags オプションによってのみフェッチされる場合、刈り込みの対象にはなりません。しかし、タグが明示的な refspec (コマンドラインまたはリモートの設定、たとえば --mirror オプションでリモートをクローンした場合) によって取得される場合、それらも刈り込みの対象となります。prune-tagsを指定することは、タグのrefspecを指定するための略記法です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
