<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionBundleSeeder extends Seeder
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
                'git_id' => 53,
                'git_option' => 'create [options] <file> <git-rev-list-args>',
                'description' => 'file という名前のバンドルを作成するために使用されます。 これには、バンドルの内容を定義する <git-rev-list-args> 引数が必要です。 options には、git bundle create サブコマンドに固有のオプションが含まれています。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 53,
                'git_option' => 'verify <file>',
                'description' => 'バンドル ファイルが有効であり、現在のリポジトリに完全に適用されることを確認するために使用されます。 これには、バンドル形式自体のチェックと、前提条件のコミットが存在し、現在のリポジトリに完全にリンクされていることのチェックが含まれます。 次に、git bundle は、欠落しているコミットがあれば、そのリストを出力します。 最後に、「オブジェクト フィルタ」などの追加機能に関する情報が出力されます。 詳細については、gitformat-bundle[5] の「機能」を参照してください。 終了コードは成功の場合はゼロですが、バンドル ファイルが無効な場合はゼロ以外になります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 53,
                'git_option' => 'list-heads <file>',
                'description' => 'バンドルで定義されている参照を一覧表示します。 参考文献のリストが続く場合、指定されたものに一致する参考文献のみが出力されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 53,
                'git_option' => 'unbundle <file>',
                'description' => 'リポジトリに保存するためにバンドル内のオブジェクトを git index-pack に渡し、定義されたすべての参照の名前を出力します。 参考文献のリストが与えられた場合、リスト内の参考文献と一致する参考文献のみが印刷されます。 このコマンドは、git fetch によってのみ呼び出されることを意図しており、実際には配管作業です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 53,
                'git_option' => '<git-rev-list-args>',
                'description' => 'git rev-parse および git rev-list に受け入れられる引数のリスト (および名前付き ref を含む。以下の参照の指定を参照) は、特定のオブジェクトとトランスポートへの参照を指定します。 たとえば、master~10..master を指定すると、現在のマスター参照が、10 回目の祖先コミット以降に追加されたすべてのオブジェクトとともにパッケージ化されます。 パッケージ化できる参照とオブジェクトの数に明示的な制限はありません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 53,
                'git_option' => '[<refname>…​]',
                'description' => '利用可能と報告された参考文献を制限するために使用される参考文献のリスト。 これは主に git fetch に使用されます。git fetch は、要求された参照のみを受け取ることを期待しており、必ずしもパック内のすべてではありません (この場合、git bundle は git fetch-pack のように機能します)。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 53,
                'git_option' => '--progress',
                'description' => '進行状況は、-q が指定されていない限り、端末に接続されている場合、デフォルトで標準エラー ストリームに報告されます。 このフラグは、標準エラー ストリームが端末に向けられていない場合でも、進行状況を強制します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 53,
                'git_option' => '--all-progress',
                'description' => '--stdout が指定されている場合、進行状況レポートはオブジェクト カウントおよび圧縮フェーズ中に表示されますが、書き込みフェーズ中は禁止されます。 その理由は、場合によっては、出力ストリームが別のコマンドに直接リンクされているためです。このコマンドは、受信パック データを処理する際に、それ自体の進行状況を表示する必要がある場合があります。 このフラグは、--stdout が使用されている場合でも、書き込みフェーズの進行状況レポートも強制することを除いて、--progress に似ています。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 53,
                'git_option' => '--all-progress-implied',
                'description' => 'これは、進行状況表示がアクティブ化されるたびに --all-progress を暗示するために使用されます。 --all-progress とは異なり、このフラグは実際には進行状況の表示を強制しません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 53,
                'git_option' => '--version=<version>',
                'description' => 'バンドル バージョンを指定します。 バージョン 2 は古い形式であり、SHA-1 リポジトリでのみ使用できます。 新しいバージョン 3 には、拡張を許可する機能が含まれています。 デフォルトは、使用中のハッシュ アルゴリズムに基づく、サポートされている最も古い形式です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 53,
                'git_option' => '-q',
                'description' => 'このフラグは、コマンドが標準エラー ストリームで進行状況を報告しないようにします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
