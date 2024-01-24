<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionRestoreSeeder extends Seeder
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
                'git_id' => 12,
                'git_option' => '-s',
                'description' => '作業ツリーのファイルを、指定されたツリーの内容で復元します。ソースツリーには、コミット、ブランチ、タグなどの名前を付けて指定するのが一般的です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 12,
                'git_option' => '-p',
                'description' => 'リストア元とリストア先の違いでハンクをインタラクティブに選択します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 12,
                'git_option' => '-S',
                'description' => 'リストア先を指定します。どちらのオプションも指定しない場合、デフォルトで作業ツリーがリストアされます。stagedを指定すると、インデックスのみがリストアされます。bothを指定すると、両方がリストアされます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 12,
                'git_option' => '-q',
                'description' => '静かに、フィードバックメッセージを抑制する。no-progressを意味する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 12,
                'git_option' => '--progress',
                'description' => 'ターミナルにアタッチされている場合、--quietが指定されていない限り、デフォルトで進捗状況が標準エラーストリームに報告されます。このフラグは、ターミナルにアタッチされていない場合でも、--quietに関係なく進捗状況を報告することを可能にします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 12,
                'git_option' => '--ours',
                'description' => 'インデックスから作業ツリーのファイルをリストアする場合、マージされていないパスにはステージ#2（ours）または#3（theirs）を使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 12,
                'git_option' => '-m',
                'description' => 'インデックスから作業ツリー上のファイルをリストアする場合、競合したマージをマージされていないパスに再作成する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 12,
                'git_option' => '--conflict=<style>',
                'description' => '上記の--mergeオプションと同じですが、競合するハンクの表示方法を変更し、merge.conflictStyle構成変数をオーバーライドします。設定可能な値は、"merge"（デフォルト）、"diff3"、"zdiff3 "です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 12,
                'git_option' => '--ignore-unmerged',
                'description' => 'インデックスから作業ツリー上のファイルをリストアする場合、マージされていないエントリがあり、--ours、--theirs、--merge、--conflictのいずれも指定されていない場合は、操作を中断しない。作業ツリー上のマージされていないパスは、そのまま放置されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 12,
                'git_option' => '--ignore-skip-worktree-bits',
                'description' => 'スパースチェックアウトモードでは、デフォルトでは、$GIT_DIR/info/sparse-checkoutの<pathspec>とスパースパターンでマッチするエントリのみを更新します。このオプションは、スパースパターンを無視し、無条件で<pathspec>にあるファイルをリストアします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 12,
                'git_option' => '--recurse-submodules',
                'description' => '<pathspec>にアクティブなサブモジュールの名前があり、復元場所に作業ツリーが含まれている場合、このオプションが与えられた場合のみサブモジュールが更新されます。この場合、作業ツリーはスーパープロジェクトに記録されたコミットに復元され、ローカルな修正は上書きされます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 12,
                'git_option' => '--overlay',
                'description' => 'オーバーレイモードでは、リストア時にファイルを削除することはありません。no-overlayモードでは、-sourceツリーに表示されない追跡ファイルが削除され、<tree>に正確に一致するようになります。デフォルトはno-overlayモードです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 12,
                'git_option' => '--pathspec-from-file=<file>',
                'description' => 'Pathspecは、コマンドラインの引数の代わりに<file>で渡されます。もし <file> が正確に - ならば、標準入力が使用されます。Pathspecの要素はLFまたはCR/LFで区切られます。Pathspecの要素は、設定変数core.quotePathの説明に従って引用することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 12,
                'git_option' => '--pathspec-file-nul',
                'description' => 'pathspec-from-fileとの組み合わせでのみ意味があります。Pathspecの要素はNUL文字で区切られ、それ以外の文字は（改行や引用符を含めて）文字通りに解釈されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 12,
                'git_option' => '<pathspec>…​',
                'description' => '操作によって影響を受けるパスを制限する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
