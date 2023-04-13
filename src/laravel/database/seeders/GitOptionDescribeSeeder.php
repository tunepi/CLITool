<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionDescribeSeeder extends Seeder
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
                'git_id' => 33,
                'git_option' => '<commit-ish>…​',
                'description' => 'コミット的なオブジェクト名を記述する。省略した場合はHEADがデフォルトとなります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 33,
                'git_option' => '--dirty[=<mark>]',
                'description' => '作業ツリーの状態を記述します。作業ツリーがHEADに一致する場合は、"git describe HEAD "と同じものが出力されます。作業ツリーにローカルな変更がある場合は、"-dirty" が付加されます。ただし、「-broken」が指定された場合は、代わりに「-broken」というサフィックスが付加されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 33,
                'git_option' => '--all',
                'description' => 'アノテーションされたタグだけを使うのではなく、refs/名前空間で見つかったあらゆるrefを使う。このオプションは、既知のブランチ、リモートトラッキングブランチ、軽量タグのいずれにもマッチングさせることができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 33,
                'git_option' => '--tags',
                'description' => '注釈付きタグだけを使うのではなく、refs/tags名前空間にある任意のタグを使う。このオプションは、軽量（非注釈）タグのマッチングを可能にします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 33,
                'git_option' => '--contains',
                'description' => 'コミットより前のタグを見つける代わりに、コミットの後に来て、そのタグを含むタグを見つけます。自動的に-tagsを意味する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 33,
                'git_option' => '--abbrev=<n>',
                'description' => 'デフォルトの16進数(リポジトリ内のオブジェクト数に応じて変化し、デフォルトは7)の省略形オブジェクト名を使用する代わりに、<n>桁、または一意のオブジェクト名を形成するために必要な数の桁を使用します。<n>に0を指定すると、ロングフォーマットが抑制され、最も近いタグのみが表示されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 33,
                'git_option' => '--candidates=<n>',
                'description' => '入力されたcommit-ishを記述する候補として、最新の10個のタグだけを考慮するのではなく、最大<n>個の候補を考慮します。<n>を10より大きくすると、若干時間がかかりますが、より正確な結果が得られるかもしれません。<n>を0にすると、完全に一致するものだけが出力されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 33,
                'git_option' => '--exact-match',
                'description' => '完全一致（タグが指定されたコミットを直接参照する）のみを出力します。これは --candidates=0 の同義語です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 33,
                'git_option' => '--debug',
                'description' => '採用されている検索方法に関する情報を標準エラーに冗長に表示する。タグ名は標準出力に出力されたままです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 33,
                'git_option' => '--long',
                'description' => 'タグにマッチした場合でも、常に長いフォーマット（タグ、コミット数、コミット名の省略形）を出力するようにしました。これは、コミットがたまたまタグ付きバージョンであったとしても、コミットオブジェクト名の一部を "describe" 出力で確認したい場合に便利です。タグ名だけを出力するのではなく、v1.2-0-gdeadbee (タグ v1.2 から 0 番目のコミットで、オブジェクト deadbee を指している...) というようにコミットを記述することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 33,
                'git_option' => '--match <pattern>',
                'description' => '与えられた glob(7) パターンにマッチするタグのみを考慮し、"refs/tags/" 接頭辞は除外する。また、--all と一緒に使うと、そのパターンにマッチするローカルブランチとリモートトラッキングの参照も考慮され、それぞれ "refs/heads/" と "refs/remotes/" 接頭辞は除かれます。複数回指定すると、パターンのリストが蓄積され、いずれかのパターンにマッチするタグが考慮されます。パターンのリストをクリアしてリセットするには--no-matchを使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 33,
                'git_option' => '--exclude <pattern>',
                'description' => '与えられた glob(7) パターンにマッチするタグを考慮せず、"refs/tags/" 接頭辞を除きます。allと一緒に使うと、ローカルブランチとリモートトラッキングの参照も、それぞれ "refs/heads/" と "refs/remotes/" 接頭辞を除いて、そのパターンにマッチするものを考慮しない。複数回指定すると、パターンのリストが蓄積され、いずれかのパターンに一致するタグが除外されます。matchと組み合わせると、タグが少なくとも1つの--matchパターンに一致し、--excludeパターンのいずれにも一致しない場合に考慮されます。パターンのリストをクリアしてリセットするには、--no-excludeを使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 33,
                'git_option' => '--always',
                'description' => 'フォールバックとして、一意に省略されたコミットオブジェクトを表示する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 33,
                'git_option' => '--first-parent',
                'description' => 'マージコミットを見たときに、最初の親コミットだけをフォローします。これは、対象のコミットの履歴でマージされたブランチのタグにマッチしないようにしたい場合に便利です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
