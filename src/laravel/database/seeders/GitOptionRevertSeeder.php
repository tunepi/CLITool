<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionRevertSeeder extends Seeder
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
                'git_id' => 37,
                'git_option' => '<commit>…​',
                'description' => 'リバートするコミット。コミットの集合を指定することもできますが、デフォルトでは走査は行われません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 37,
                'git_option' => '-e',
                'description' => 'このオプションを使用すると、git revert はコミットする前にコミットメッセージを編集できるようになります。これは、ターミナルからコマンドを実行した場合のデフォルトです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 37,
                'git_option' => '-m parent-number',
                'description' => '通常、マージのどちら側をメインラインと見なす必要があるかがわからないため、マージを元に戻すことはできません。 このオプションは、メインラインの親番号 (1 から始まる) を指定し、revert が指定された親に関連する変更を元に戻すことができるようにします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 37,
                'git_option' => '--no-edit',
                'description' => 'このオプションを使用すると、git revert はコミット メッセージ エディターを起動しません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 37,
                'git_option' => '--cleanup=<mode>',
                'description' => 'このオプションは、コミット機構に渡される前にコミット メッセージをクリーンアップする方法を決定します。 詳細については、git-commit[1] を参照してください。 特に、<モード> にはさみの値が指定されている場合、競合が発生した場合に渡される前に、はさみが MERGE_MSG に追加されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 37,
                'git_option' => '-n',
                'description' => '通常、このコマンドは、元に戻されたコミットを示すコミット ログ メッセージを含むいくつかのコミットを自動的に作成します。 このフラグは、名前付きコミットを作業ツリーとインデックスに戻すために必要な変更を適用しますが、コミットは行いません。 さらに、このオプションを使用する場合、インデックスは HEAD コミットと一致する必要はありません。 元に戻すは、インデックスの開始状態に対して行われます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 37,
                'git_option' => '-S[<keyid>]',
                'description' => 'GPG署名コミット。 keyid 引数はオプションで、デフォルトはコミッター ID です。 指定する場合は、スペースなしでオプションに貼り付ける必要があります。 --no-gpg-sign は、commit.gpgSign 構成変数と以前の --gpg-sign の両方を取り消すのに役立ちます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 37,
                'git_option' => '-s',
                'description' => 'コミット メッセージの最後に Signed-off-by トレーラーを追加します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 37,
                'git_option' => '--strategy=<strategy>',
                'description' => '指定されたマージ戦略を使用します。 一度だけ使用してください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 37,
                'git_option' => '-X<option>',
                'description' => 'マージ戦略固有のオプションをマージ戦略に渡します.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 37,
                'git_option' => '--rerere-autoupdate',
                'description' => 'rerere メカニズムが現在の競合で記録された解決を再利用して作業ツリー内のファイルを更新した後、解決の結果でインデックスも更新できるようにします。 --no-rerere-autoupdate は、別の git add で結果をインデックスにコミットする前に、rerere が行ったことを再確認し、潜在的なミスマージをキャッチするための良い方法です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 37,
                'git_option' => '--reference',
                'description' => 'ログメッセージの本文を「This reverts <元に戻すコミットの完全なオブジェクト名>.」で始める代わりに、「--pretty=reference」形式を使用してコミットを参照してください。 revert.reference 構成変数を使用して、このオプションをデフォルトで有効にすることができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
