<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionApplySeeder extends Seeder
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
                'git_id' => 34,
                'git_option' => '<patch>…​',
                'description' => 'パッチを読み込むためのファイルです。- は、標準入力から読み込むために使用することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 34,
                'git_option' => '--stat',
                'description' => 'パッチを適用する代わりに、入力に対してdiffstatを出力する。apply」をオフにする。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 34,
                'git_option' => '--numstat',
                'description' => 'statと似ているが、追加・削除された行数を10進数で表示し、パス名を省略せずに表示するので、より機械に優しい。バイナリファイルの場合、0 0 と言う代わりに 2 - を出力する。apply」をオフにする。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 34,
                'git_option' => '--summary',
                'description' => 'パッチを適用する代わりに、作成、リネーム、モード変更など、git diff拡張ヘッダから得られる情報を凝縮して出力します。apply」をオフにします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 34,
                'git_option' => '--check',
                'description' => 'パッチを適用する代わりに、パッチが現在の作業ツリーおよび/またはインデックスファイルに適用可能かどうかを確認し、エラーを検出する。適用」をオフにします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 34,
                'git_option' => '--index',
                'description' => 'パッチをインデックスと作業ツリーの両方に適用する（あるいは、--checkが有効な場合は、単に両方にきれいに適用されることをチェックする）。また、--index は、関連するパスのインデックスエントリと作業木のコピーが同一であることを期待し（それらの内容やファイルモードなどのメタデータが一致しなければならない）、たとえパッチがインデックスと作業木の両方に単独できれいに適用されるとしても、それらが異なる場合はエラーを発生させることに注意。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 34,
                'git_option' => '--cached',
                'description' => '作業ツリーには触れずに、インデックスだけにパッチを適用する。もし --check が有効なら、単にインデックスエントリにきれいに適用されるかどうかをチェックします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 34,
                'git_option' => '--intent-to-add',
                'description' => 'パッチを作業ツリーだけに適用する場合、新しいファイルをマークして後でインデックスに追加します。このオプションは、Git リポジトリで実行していて --index が指定されていない場合、無視されます。なお、--index は --cached や --3way などの他のオプションによって暗示される可能性があります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 34,
                'git_option' => '-3',
                'description' => 'パッチが適用すべきblobのIDを記録しており、それらのblobがローカルで利用可能である場合、3方向マージを試みますが、作業ツリーのファイル内の競合マーカーをユーザーが解決できるように残すことがあります。このオプションは、--cachedオプションが使用されていない限り、--indexオプションを意味し、--rejectオプションとは互換性がない。また，--rejectオプションとは相容れない． -cachedオプションと併用すると，競合があってもキャッシュの上位に残される．',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 34,
                'git_option' => '--build-fake-ancestor=<file>',
                'description' => '新しい git diff 出力には、パッチが適用される元のバージョンを特定するのに役立つ、各 blob のインデックス情報が埋め込まれています。このフラグが与えられているとき、そしてblobのオリジナルバージョンがローカルで利用可能であれば、それらのblobを含む一時的なインデックスを構築します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 34,
                'git_option' => '-R',
                'description' => 'パッチを逆に貼る。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 34,
                'git_option' => '--reject',
                'description' => 'アトミティクスのために、git apply はデフォルトでパッチ全体を失敗させ、ハンクの一部が適用されない場合でも作業ツリーを触らないようになっています。このオプションは、パッチのうち適用可能な部分を適用し、拒否されたハンクを対応する *.rej ファイルに残しておくようにします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 34,
                'git_option' => '-z',
                'description' => 'numstatが指定された場合、パス名をつぶさず、NULで終端された機械可読形式を使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 34,
                'git_option' => '-p<n>',
                'description' => '従来の diff パスから <n> 先頭のパス成分 (スラッシュで区切られている) を削除します。例：-p2を指定すると、a/dir/fileに対するパッチがfileに直接適用されます。デフォルトは1です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 34,
                'git_option' => '-C<n>',
                'description' => '各変更の前後で、周囲の文脈が少なくとも<n>行一致することを確認する。周囲の文脈の行数が少ない場合は、すべて一致させる必要があります。デフォルトでは、コンテキストを無視することはない。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 34,
                'git_option' => '--unidiff-zero',
                'description' => 'デフォルトでは、git apply は適用されるパッチが少なくとも一行のコンテキストを持つ unified diff であることを想定しています。これは安全策にはなりますが、--unified=0で生成されたdiffを適用する際には破綻します。これらのチェックを回避するには--unidiff-zeroを使います。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 34,
                'git_option' => '--apply',
                'description' => '上記の「Turns off apply」と書かれたオプションのいずれかを使用した場合、git apply はパッチを実際に適用することなく、要求された情報を読み出し、出力する。これらのフラグの後にこのフラグを指定すると、パッチを適用することもできます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 34,
                'git_option' => '--no-add',
                'description' => 'パッチを適用する際に、パッチによる追加を無視する。これは、2つのファイルに対してまずdiffを実行し、その結果をこのオプションで適用すると、削除部分は適用されるが、追加部分は適用されないというもので、2つのファイルの共通部分を抽出するために使用できます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 34,
                'git_option' => '--allow-binary-replacement',
                'description' => '歴史的に、我々はユーザーからの明示的な許可なしにバイナリパッチの適用を許可しておらず、このフラグはそうするための方法だった。現在では、常にバイナリパッチの適用を許可しているので、このフラグは無効になっています。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 34,
                'git_option' => '--exclude=<path-pattern>',
                'description' => '与えられたパスパターンに一致するファイルに対して変更を適用しないようにします。これは、パッチセットをインポートする際に、特定のファイルやディレクトリを除外したい場合に便利です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
