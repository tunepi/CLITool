<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionAddSeeder extends Seeder
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
                'git_id' => 7,
                'git_option' => '<pathspec>…​',
                'description' => 'コンテンツを追加するファイルです。ファイル名 (例: *.c) を指定すると、一致するすべてのファイルが追加されます。また、ディレクトリ名 (例: dir で dir/file1 と dir/file2 を追加) を指定すると、ディレクトリ全体の現在の状態に合わせてインデックスを更新します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 7,
                'git_option' => '-n',
                'description' => '実際にファイルを追加するのではなく、ファイルが存在するか、または無視されるかを表示するだけです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 7,
                'git_option' => '-v',
                'description' => '冗長であること。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 7,
                'git_option' => '-f',
                'description' => '無視されていたファイルを追加できるようにする。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 7,
                'git_option' => '--sparse',
                'description' => 'sparse-checkout 円錐の外側にあるインデックスエントリの更新を許可するようにしました。通常、git add はパスが sparse-checkout 円錐の範囲に収まらないインデックスエントリを更新することを拒否します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 7,
                'git_option' => '-i',
                'description' => '作業ツリーで変更された内容を対話的にインデックスに追加する。オプションのパス引数を与えることで、作業を作業木のサブセットに限定することができる。詳細は「対話型モード」を参照。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 7,
                'git_option' => '-p',
                'description' => 'インデックスとワークツリーの間にあるパッチの塊をインタラクティブに選択し、インデックスに追加する。これにより、変更された内容をインデックスに追加する前に、ユーザーに差分を確認する機会を与えることができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 7,
                'git_option' => '-e',
                'description' => 'エディタでdiffとindexを開き、ユーザーに編集させる。エディターを閉じた後、ハンクヘッダを調整し、パッチをインデックスに適用する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 7,
                'git_option' => '-u',
                'description' => 'すでに<pathspec>に一致するエントリがあるところだけ、インデックスを更新する。これは、作業ツリーに合わせてインデックスのエントリを削除したり修正したりしますが、新しいファイルを追加することはありません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 7,
                'git_option' => '-A',
                'description' => '作業ツリーに<pathspec>に一致するファイルがある場合だけでなく、インデックスにすでにエントリがある場合もインデックスを更新します。これは、作業ツリーに合わせてインデックスのエントリを追加、変更、削除するものです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 7,
                'git_option' => '--no-all',
                'description' => 'インデックスに未知の新しいファイルと作業ツリーで変更されたファイルを追加してインデックスを更新し、作業ツリーから削除されたファイルは無視します。このオプションは、<pathspec>が使用されていないときは、no-opとなる。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 7,
                'git_option' => '-N',
                'description' => 'パスが後で追加されるという事実だけを記録する。パスのエントリは、内容を伴わないインデックスに置かれます。これは、特に、このようなファイルのステージされていない内容を git diff で表示したり、git commit -a でコミットしたりするのに便利です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 7,
                'git_option' => '--refresh',
                'description' => 'ファイルを追加せず、インデックスのstat()情報のみを更新します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 7,
                'git_option' => '--ignore-errors',
                'description' => 'インデックス付けに失敗してファイルを追加できなかった場合でも、操作を中断せず、他のファイルの追加を続行する。この場合、コマンドは0以外のステータスで終了します。設定変数add.ignoreErrorsにtrueを設定することで、この動作をデフォルトにすることができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 7,
                'git_option' => '--ignore-missing',
                'description' => 'このオプションは、-dry-runと一緒にのみ使用できます。このオプションを使用すると、与えられたファイルが作業ツリーに既に存在するかどうかに関係なく、無視されるかどうかを確認することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 7,
                'git_option' => '--no-warn-embedded-repo',
                'description' => 'デフォルトでは、git submodule add を使って .gitmodules にエントリを作成せずに埋め込みリポジトリをインデックスに追加すると、git add は警告を表示します。このオプションを指定すると、警告を抑制することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 7,
                'git_option' => '--renormalize',
                'description' => '強制的にインデックスに追加するために、トラックされたすべてのファイルに "clean "プロセスを新たに適用します。これは、core.autocrlfの設定やtext属性を変更した後に、間違ったCRLF/LFの行末で追加されたファイルを修正するために有用です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 7,
                'git_option' => '--chmod=(+|-)x',
                'description' => '追加されたファイルの実行可能ビットを上書きする。実行ビットが変更されるのはインデックスのみで、ディスク上のファイルは変更されないままです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 7,
                'git_option' => '--pathspec-from-file=<file>',
                'description' => 'Pathspecはコマンドラインの引数の代わりに<file>で渡されます。もし <file> が正確に - ならば、標準入力が使用されます。Pathspecの要素はLFまたはCR/LFで区切られます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 7,
                'git_option' => '--pathspec-file-nul',
                'description' => 'pathspec-from-fileとの組み合わせでのみ意味があります。Pathspecの要素はNUL文字で区切られ、それ以外の文字は（改行や引用符を含めて）文字通りに解釈されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
