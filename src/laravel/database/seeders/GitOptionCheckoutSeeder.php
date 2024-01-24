<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionCheckoutSeeder extends Seeder
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
                'git_id' => 17,
                'git_option' => '-q',
                'description' => 'フィードバック メッセージを抑制します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '--progress',
                'description' => 'ターミナルにアタッチされている場合、--quietが指定されていない限り、デフォルトで進捗状況が標準エラーストリームに報告されます。このフラグは、ターミナルにアタッチされていない場合でも、--quietに関係なく進捗状況を報告することを可能にします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '-f',
                'description' => 'ブランチを切り替えるとき、インデックスや作業ツリーがHEADと異なっていても、また邪魔な未追跡のファイルがあっても、処理を進めます。これは、ローカルの変更や邪魔な未追跡のファイルやディレクトリを捨てるために使います。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '--ours',
                'description' => 'インデックスからパスをチェックアウトする際は、ステージ#2（当方）または#3（当方）で、マージされていないパスをチェックアウトしてください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '-b',
                'description' => '<new-branch>という名前の新しいブランチを作成し、<start-point>から開始し、出来上がったブランチをチェックアウトします。詳細はgit-branch[1]を参照してください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '-B',
                'description' => 'ブランチ <new-branch> を作成し、それを <start-point> で開始します。すでに存在する場合は、それを <start-point> にリセットします。そして、出来上がったブランチをチェックアウトします。これは、"git branch" に "-f" をつけて実行し、その後にそのブランチを "git checkout" するのと同じです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '-t',
                'description' => '新しいブランチを作成する際に、"upstream "の設定を行います。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '--no-track',
                'description' => 'branch.autoSetupMerge設定変数がtrueの場合でも、「上流」構成を設定しないようにします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '--guess',
                'description' => '<branch>が見つからないが、ちょうど1つのリモート（<remote>と呼ぶ）に、一致する名前の追跡ブランチが存在する場合、以下と同じように扱われます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '-l',
                'description' => '新しいブランチの reflog を作成します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '-d',
                'description' => 'ブランチをチェックアウトして作業するのではなく、コミットをチェックアウトして検査や捨て身の実験を行います。これは、<commit>がブランチ名でないときのgit checkout <commit>のデフォルトの動作です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '--orphan <new-branch>',
                'description' => '<new-branch> という名前の、<start-point> から始まる新しい孤児ブランチを作成し、それに切り替えます。この新しいブランチで行われた最初のコミットは親を持たず、他のすべてのブランチやコミットから完全に切り離された新しい履歴のルートとなります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '--ignore-skip-worktree-bits',
                'description' => 'スパースチェックアウトモードでは、git checkout -- <paths>は、$GIT_DIR/info/sparse-checkoutの<paths>とスパースパターンでマッチするエントリのみを更新します。このオプションはスパースパターンを無視し、<paths>にあるファイルをすべて追加します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '-m',
                'description' => 'ブランチを切り替える際、現在のブランチと切り替え先のブランチとで異なる1つまたは複数のファイルをローカルで修正した場合、コマンドは修正内容をコンテキストに保持するためにブランチの切り替えを拒否しています。しかし、このオプションを使用すると、現在のブランチ、作業ツリーの内容、および新しいブランチの間で3方向のマージが行われ、新しいブランチに移動することになります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '--conflict=<style>',
                'description' => '上記の--mergeオプションと同じですが、競合するハンクの表示方法を変更し、merge.conflictStyle構成変数をオーバーライドします。設定可能な値は、"merge"（デフォルト）、"diff3"、"zdiff3 "です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '-p',
                'description' => '<tree-ish>（未指定の場合はインデックス）と作業木の間にあるハンクを対話的に選択する。選択されたハンクは、作業ツリー（<tree-ish>が指定されている場合はインデックス）に対して逆に適用されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '--ignore-other-worktrees',
                'description' => 'git checkoutは、欲しい参照元がすでに他のワークツリーによってチェックアウトされている場合は拒否します。このオプションは、とにかくその参照元をチェックアウトするようにします。言い換えれば、その参照は複数のワークツリーによって保持することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '--overwrite-ignore',
                'description' => 'ブランチの切り替え時に、無視されているファイルを静かに上書きする。これはデフォルトの動作です。新しいブランチに無視されたファイルがある場合、--no-overwrite-ignoreを使用して操作を中止します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '--recurse-submodules',
                'description' => 'recurse-submodulesを使うと、スーパープロジェクトに記録されたコミットに従って、すべてのアクティブなサブモジュールの内容を更新します。サブモジュールのローカルな変更が上書きされる場合、-fが使用されていない限りチェックアウトは失敗します。何もしない (あるいは --no-recurse-submodules) と、サブモジュールの作業ツリーは更新されません。git-submodule[1] と同様に、サブモジュールの HEAD を切り離します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '--overlay',
                'description' => 'デフォルトのオーバーレイモードでは、git checkout はインデックスや作業ツリーからファイルを削除することはありません。no-overlayを指定すると、インデックスや作業ツリーにはあるが<tree-ish>にはないファイルを削除し、<tree-ish>と完全に一致させることができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '--pathspec-from-file=<file>',
                'description' => 'Pathspecは、コマンドラインの引数の代わりに<file>で渡されます。もし <file> が正確に - ならば、標準入力が使用されます。Pathspecの要素はLFまたはCR/LFで区切られます。Pathspecの要素は、設定変数core.quotePathの説明に従って引用することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '--pathspec-file-nul',
                'description' => 'pathspec-from-fileとの組み合わせでのみ意味があります。Pathspecの要素はNUL文字で区切られ、それ以外の文字は（改行や引用符を含めて）文字通りに解釈されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '<branch>',
                'description' => 'チェックアウトするブランチ。もしそれがブランチ（つまり、"refs/heads/"を先頭につけたときに、有効な参照先となる名前）を参照しているなら、そのブランチはチェックアウトされます。そうでない場合、それが有効なコミットを参照している場合、あなたのHEADは「デタッチ」され、あなたはもはやどのブランチにもいません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '<new-branch>',
                'description' => '新しいブランチを作成する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '<start-point>',
                'description' => '新しいブランチを開始するコミットの名前です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '<tree-ish>',
                'description' => 'パスが与えられている場合）チェックアウトするためのツリー。指定しない場合は、インデックスが使用されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 17,
                'git_option' => '<pathspec>…​',
                'description' => '操作によって影響を受けるパスを制限する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
