<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionPushSeeder extends Seeder
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
                'git_id' => 27,
                'git_option' => '<repository>',
                'description' => 'プッシュ操作の宛先となる「リモート」リポジトリです。このパラメータには、URLまたはリモートの名前を指定できます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 27,
                'git_option' => '<refspec>…​',
                'description' => 'どのソースオブジェクトでどのデスティネーションリフレを更新するかを指定する。<refspec>パラメータの形式は、オプションのプラス+、ソースオブジェクト<src>、コロン:、デスティネーションRef<dst>の順で続きます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 27,
                'git_option' => '--all',
                'description' => 'すべてのブランチをプッシュする（つまり、refs/heads/以下のrefs）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 27,
                'git_option' => '--prune',
                'description' => 'ローカルに対応するブランチが存在しないリモートブランチを削除します。たとえばリモートブランチ tmp は、同じ名前のローカルブランチがもう存在しない場合に削除されます。例えば git push --prune remote refs/heads/*:refs/tmp/* は、refs/heads/foo が存在しない場合にリモートの refs/tmp/foo を確実に削除します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 27,
                'git_option' => '--mirror',
                'description' => 'プッシュする各refに名前をつける代わりに、refs/以下(refs/heads/, refs/remotes/, refs/tags/を含むがこれに限らない)のすべてのrefをリモートリポジトリにミラーリングするように指定します。新しく作成されたローカルなrefはリモート側にプッシュされ、ローカルに更新されたrefはリモート側で強制更新され、削除されたrefはリモート側で削除されます。これは、設定オプション remote.<remote>.mirror が設定されている場合の既定値です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 27,
                'git_option' => '-n',
                'description' => '実際にアップデートを送信する以外のすべての操作を行います。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 27,
                'git_option' => '--porcelain',
                'description' => '機械可読の出力を生成します。各refの出力ステータス行はタブ区切りで, stderrの代わりにstdoutに送られます. refの完全なシンボリック名が与えられます.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 27,
                'git_option' => '-d',
                'description' => 'リストアップされたすべてのrefは、リモートリポジトリから削除されます。これは、すべてのrefの前にコロンを付けるのと同じです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 27,
                'git_option' => '--tags',
                'description' => 'コマンドラインで明示的にリストされたrefspecに加え、refs/tags以下のすべてのrefがプッシュされます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 27,
                'git_option' => '--follow-tags',
                'description' => 'このオプションがなければプッシュされるであろうすべてのrefをプッシュし、さらにリモートにはないがプッシュされるrefから到達可能なコミット的なものを指しているref/tagsの注釈付きタグをプッシュします。これは、設定変数push.followTagsで指定することも可能です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 27,
                'git_option' => '--[no-]signed',
                'description' => '受信側のrefを更新するためのpushリクエストにGPG署名を行い、フックによるチェックやログ取得を可能にする。false または --no-signed の場合、署名は試みられません。trueまたは--signedの場合、サーバーが署名付きプッシュをサポートしていない場合、プッシュは失敗します。if-asked に設定すると、サーバーが署名付きプッシュをサポートしている場合のみ、署名します。gpg --sign の呼び出しに失敗した場合にも、プッシュは失敗します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 27,
                'git_option' => '--[no-]atomic',
                'description' => 'リモート側でアトミックトランザクションが利用できる場合は利用する。すべてのrefが更新されるか、エラー時にはrefが更新されない。サーバーがアトミックプッシュをサポートしていない場合、プッシュは失敗します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 27,
                'git_option' => '-o <option>',
                'description' => '与えられた文字列をサーバーに送信し、サーバーは受信前フックと受信後フックにそれらを渡します。与えられた文字列は、NULやLF文字を含んではならない。複数の-push-option=<option>を与えると、コマンドラインに記載された順番で全て相手側に送信される。コマンドラインから --push-option=<option> が与えられない場合、設定変数 push.pushOption の値が代わりに使用されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 27,
                'git_option' => '--receive-pack=<git-receive-pack>',
                'description' => 'リモート側にある git-receive-pack プログラムへのパス。ssh でリモートリポジトリにプッシュする際に、デフォルトの $PATH にあるディレクトリにそのプログラムがない場合に便利なことがあります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 27,
                'git_option' => '--[no-]force-with-lease',
                'description' => '通常、"git push "は、上書きするために使用されるローカル参照の祖先でないリモート参照の更新を拒否します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 27,
                'git_option' => '-f',
                'description' => '通常、コマンドは、上書きするために使用されるローカルrefの祖先でないリモートrefの更新を拒否します。また、-force-with-leaseオプションが使用されている場合、コマンドは、現在の値が期待されるものと一致しないリモートrefの更新を拒否する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 27,
                'git_option' => '--[no-]force-if-includes',
                'description' => 'リモートトラッキングのrefの先端がローカルに統合されている場合のみ、強制的に更新する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 27,
                'git_option' => '--repo=<repository>',
                'description' => 'このオプションは、<repository>引数と同等です。両方が指定された場合、コマンドライン引数が優先されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 27,
                'git_option' => '-u',
                'description' => '最新の状態にある、あるいはプッシュに成功したブランチごとに、アップストリーム（追跡）参照を追加します。引数なしの git-pull[1] やその他のコマンドで使用します。A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 27,
                'git_option' => '--[no-]thin',
                'description' => 'これらのオプションはgit-send-pack[1]に渡されます。thin転送は、送信者と受信者が多くの同じオブジェクトを共有している場合に、送信データ量を大幅に削減することができます。デフォルトは --thin です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
