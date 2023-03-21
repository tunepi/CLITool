<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionFastImportSeeder extends Seeder
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
                'git_id' => 46,
                'git_option' => '--force',
                'description' => '変更された既存のブランチを更新すると、コミットが失われる場合でも強制的に更新します (新しいコミットには古いコミットが含まれていないため)。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 46,
                'git_option' => '--quiet',
                'description' => '--stats によって表示される出力を無効にします。正常に実行された場合、高速インポートは通常サイレントになります。 ただし、インポート ストリームにユーザー出力を表示するためのディレクティブ (progress ディレクティブなど) がある場合、対応するメッセージは引き続き表示されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 46,
                'git_option' => '--stats',
                'description' => 'fast-import が作成したオブジェクト、それらが格納されたパックファイル、およびこの実行中に fast-import によって使用されたメモリに関するいくつかの基本的な統計を表示します。 この出力の表示は現在デフォルトですが、--quiet で無効にすることができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 46,
                'git_option' => '--allow-unsafe-features',
                'description' => 'feature コマンドまたは option コマンドを使用して、多くのコマンドライン オプションを高速インポート ストリーム自体の一部として提供できます。 ただし、これらのオプションの一部は安全ではありません (たとえば、fast-import がリポジトリ外のファイルシステムにアクセスできるようにするなど)。 これらのオプションはデフォルトで無効になっていますが、コマンド ラインでこのオプションを指定することで許可できます。 これは現在、export-marks、import-marks、および import-marks-if-exists 機能コマンドのみに影響します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 46,
                'git_option' => '--cat-blob-fd=<fd>',
                'description' => 'get-mark、cat-blob、および ls クエリへの応答を、stdout ではなくファイル記述子 <fd> に書き込みます。 エンドユーザー向けの進行状況出力を他の出力から分離できるようにします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 46,
                'git_option' => '--date-format=<fmt>',
                'description' => 'フロントエンドが作成者、コミッター、およびタグ付けコマンド内で高速インポートに提供する日付のタイプを指定します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 46,
                'git_option' => '--done',
                'description' => 'ストリームの最後に done コマンドがない場合は、エラーで終了します。 このオプションは、フロントエンドがストリームの書き込みを開始する前に終了する原因となるエラーを検出するのに役立つ場合があります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 46,
                'git_option' => '--export-marks=<file>',
                'description' => '完了すると、内部マーク テーブルを <file> にダンプします。 マークは :markid SHA-1 として 1 行に 1 つずつ書き込まれます。 フロントエンドはこのファイルを使用して、インポートが完了した後にインポートを検証したり、増分実行全体でマーク テーブルを保存したりできます。 <file> はチェックポイント (または完了) でのみ開かれ、切り捨てられるため、同じパスを --import-marks に安全に指定することもできます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 46,
                'git_option' => '--import-marks=<file>',
                'description' => '入力を処理する前に、<file> で指定されたマークをロードします。 入力ファイルが存在し、読み取り可能で、--export-marks によって生成されたものと同じ形式を使用している必要があります。 複数のマーク セットをインポートするために、複数のオプションを指定できます。 マークが異なる値に定義されている場合、最後のファイルが優先されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 46,
                'git_option' => '--import-marks-if-exists=<file>',
                'description' => '--import-marks と同様ですが、ファイルが存在しない場合、エラーを発生させる代わりに、黙ってスキップします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 46,
                'git_option' => '--[no-]relative-marks',
                'description' => '--relative-marks を指定した後、 --import-marks= および --export-marks= で指定されたパスは、現在のリポジトリの内部ディレクトリに対して相対的です。 git-fast-import では、これはパスが .git/info/fast-import ディレクトリに対して相対的であることを意味します。 ただし、他の輸入業者は別の場所を使用する場合があります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 46,
                'git_option' => '--rewrite-submodules-from=<name>:<file>',
                'description' => '<name> で指定されたサブモジュールのオブジェクト ID を、from <file> で使用される値から to <file> で使用される値に書き換えます。 from マークは git fast-export によって作成されている必要があり、to マークは同じサブモジュールをインポートするときに git fast-import によって作成されている必要があります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 46,
                'git_option' => '--active-branches=<n>',
                'description' => '一度にアクティブに維持できるブランチの最大数。 詳細については、以下の「メモリ使用量」を参照してください。 デフォルトは 5 です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 46,
                'git_option' => '--big-file-threshold=<n>',
                'description' => '高速インポートがデルタの作成を試みる blob の最大サイズ (バイト単位)。 デフォルトは 512m (512 MiB) です。 一部のインポーターは、メモリに制約のあるシステムでこれを下げたいと思うかもしれません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 46,
                'git_option' => '--depth=<n>',
                'description' => 'ブロブとツリーのデルタ化の最大デルタ深度。 デフォルトは 50 です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 46,
                'git_option' => '--export-pack-edges=<file>',
                'description' => 'パックファイルを作成した後、パックファイルのファイル名とそのパックファイルに書き込まれた各ブランチの最後のコミットを一覧表示するデータ行を <file> に出力します。 この情報は、合計オブジェクト セットが 4 GiB パックファイルの制限を超えるプロジェクトをインポートした後に役立つ場合があります。これらのコミットは、git の呼び出し中にエッジ ポイントとして使用できるためです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 46,
                'git_option' => '--max-pack-size=<n>',
                'description' => '各出力パックファイルの最大サイズ。 デフォルトは無制限です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
