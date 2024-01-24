<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionCatFileSeeder extends Seeder
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
                'git_id' => 56,
                'git_option' => '<object>',
                'description' => '表示するオブジェクトの名前。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 56,
                'git_option' => '-t',
                'description' => 'コンテンツの代わりに、<object> で識別されるオブジェクト タイプを表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 56,
                'git_option' => '-s',
                'description' => 'コンテンツの代わりに、<object> で識別されるオブジェクトのサイズを表示します。 --use-mailmap オプションとともに使用すると、mailmap メカニズムを使用して ID を置き換えた後に、更新されたオブジェクトのサイズが表示されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 56,
                'git_option' => '-e',
                'description' => '<object> が存在し、それが有効なオブジェクトである場合、ゼロステータスで終了します。 <object> が無効な形式の場合、0 以外で終了し、stderr でエラーを出力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 56,
                'git_option' => '-p',
                'description' => '<object> の内容をそのタイプに基づいてプリティプリントします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 56,
                'git_option' => '<type>',
                'description' => '通常、これは <object> の実際の型と一致しますが、指定された <object> から自明に逆参照できる型を要求することも許可されます。 例として、<object> がそれを含むコミット オブジェクトである「ツリー」を要求するか、または <object> がそれを指すタグ オブジェクトである「blob」を要求することが挙げられます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 56,
                'git_option' => '--[no-]mailmap',
                'description' => 'mailmap ファイルを使用して、作成者、コミッター、タグ付け者の名前と電子メール アドレスを正規の実名と電子メール アドレスにマップします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 56,
                'git_option' => '--textconv',
                'description' => 'textconv フィルターによって変換されたコンテンツを表示します。 この場合、<path> のインデックスに記録されたコンテンツにフィルタを適用するには、<object> は <tree-ish>:<path> または :<path> の形式である必要があります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 56,
                'git_option' => '--filters',
                'description' => '指定された <path> の現在の作業ツリーで構成されたフィルターによって変換されたコンテンツを表示します (つまり、スマッジ フィルター、行末変換など)。 この場合、<object> は <tree-ish>:<path> または :<path> の形式である必要があります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 56,
                'git_option' => '--path=<path>',
                'description' => '--textconv または --filters と共に使用して、オブジェクト名とパスを別々に指定できるようにします。 ブロブの元のリビジョンを特定するのが難しい場合。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 56,
                'git_option' => '--batch',
                'description' => 'stdin で提供される各オブジェクトのオブジェクト情報と内容を出力します。 --textconv、--filters、または --use-mailmap 以外のオプションまたは引数と組み合わせることはできません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 56,
                'git_option' => '--batch-check',
                'description' => 'stdin で提供される各オブジェクトのオブジェクト情報を出力します。 --textconv、--filters、または --use-mailmap 以外のオプションや引数と組み合わせることはできません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 56,
                'git_option' => '--batch-command',
                'description' => 'stdin からコマンドと引数を読み取るコマンド モードに入ります。 --buffer、--textconv、--use-mailmap、または --filters とのみ組み合わせることができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 56,
                'git_option' => '--batch-all-objects',
                'description' => 'stdin でオブジェクトのリストを読み取る代わりに、リポジトリ内のすべてのオブジェクトと代替オブジェクト ストア (到達可能なオブジェクトだけでなく) に対して要求されたバッチ操作を実行します。 --batch または --batch-check を指定する必要があります。 デフォルトでは、オブジェクトはハッシュでソートされた順序でアクセスされます。 以下の --unordered も参照してください。 オブジェクトは、git-replace[1] の「置換」メカニズムを考慮せずに、そのまま表示されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 56,
                'git_option' => '--buffer',
                'description' => '通常、バッチ出力は各オブジェクトが出力された後にフラッシュされるため、プロセスは cat-file から対話的に読み書きできます。 このオプションを使用すると、出力は通常の stdio バッファリングを使用します。 これは、多数のオブジェクトに対して --batch-check または --batch-command を呼び出すときにはるかに効率的です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 56,
                'git_option' => '--unordered',
                'description' => '--batch-all-objects が使用されている場合、ハッシュ順よりもオブジェクトのコンテンツにアクセスするのに効率的な順序でオブジェクトにアクセスします。 順序の正確な詳細は指定されていませんが、特定の順序が必要ない場合は、通常、特に --batch を使用すると、出力が速くなります。 cat-file は、リポジトリに複数回保存されている場合でも、各オブジェクトを 1 回しか表示しないことに注意してください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 56,
                'git_option' => '--allow-unknown-type',
                'description' => '-s または -t が不明なタイプの壊れた/破損したオブジェクトを照会できるようにします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 56,
                'git_option' => '--follow-symlinks',
                'description' => '--batch または --batch-check を使用して、tree-ish:path-in-tree の形式の拡張 SHA-1 式でオブジェクトを要求するときに、リポジトリ内のシンボリック リンクをたどります。 リンク自体に関する出力を提供する代わりに、リンク先オブジェクトに関する出力を提供します。 シンボリック リンクがツリーの外側を指している場合 (たとえば、/foo へのリンクまたは ../foo へのルート レベルのリンク)、ツリーの外側にあるリンクの部分が出力されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
