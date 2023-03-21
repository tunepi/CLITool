<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionLogSeeder extends Seeder
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
                'git_id' => 21,
                'git_option' => '--follow',
                'description' => 'ファイルのリネーム以外の履歴をリストアップし続ける（単一ファイルに対してのみ動作）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 21,
                'git_option' => '--no-decorate',
                'description' => '表示されているコミットの ref 名を出力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 21,
                'git_option' => '--decorate-refs=<pattern>',
                'description' => '各参照候補について、-decorate-refs-excludeで指定したパターンのいずれかにマッチする場合、または-decorate-refsで指定したパターンのいずれにもマッチしない場合は、装飾に使用しないようにします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 21,
                'git_option' => '--clear-decorations',
                'description' => 'このオプションを指定すると、以前の --decorate-refs または --decorate-refs-exclude オプションをすべてクリアし、すべての参照を含むようにデフォルトの装飾フィルタを緩和します。このオプションは、設定値 log.initialDecorationSet が all に設定されている場合に使用されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 21,
                'git_option' => '--source',
                'description' => '各コミットに到達したコマンドラインで与えられたref名を出力する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 21,
                'git_option' => '--[no-]mailmap',
                'description' => 'メールマップファイルを使用して、著者とコミッターの名前と電子メールアドレスを、正規の実名と電子メールアドレスにマッピングします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 21,
                'git_option' => '--full-diff',
                'description' => 'このフラグがない場合、git log -p <path>... は指定したパスに触れたコミットと、同じ指定パスに関する diff を表示します。このフラグを指定すると、指定したパスに触れたコミットの diff が完全に表示されます。つまり、「<path>...」はコミットのみを制限し、そのコミットの diff を制限しないことを意味します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 21,
                'git_option' => '--log-size',
                'description' => '各コミットの出力に "log size <number>" という行を含める。<number> はそのコミットのメッセージの長さをバイト数で表したもの。git log 出力からログメッセージを読み取るツールで、事前にスペースを確保することで高速化を図ることを意図しています。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 21,
                'git_option' => '-L<start>,<end>:<file>',
                'description' => '<file> 内の <start>,<end> または関数名 regex <funcname> で指定された行範囲の変遷をたどる。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 21,
                'git_option' => '<revision-range>',
                'description' => '指定したリビジョン範囲内のコミットのみを表示します。<revision-range> を指定しない場合は、デフォルトで HEAD (つまり現在のコミットまでの全履歴) になります。 origin..HEAD は、現在のコミット (つまり HEAD) から到達できるすべてのコミットを指定しますが、origin からのコミットは指定しません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 21,
                'git_option' => '-<number>',
                'description' => '出力するコミット数を制限する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 21,
                'git_option' => '--skip=<number>',
                'description' => 'コミット出力の表示を開始する前に、コミット数をスキップする。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 21,
                'git_option' => '--since=<date>',
                'description' => '特定の日付より新しいコミットを表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 21,
                'git_option' => '--since-as-filter=<date>',
                'description' => '指定した日付より新しいコミットをすべて表示します。これは、特定の日付より古い最初のコミットで停止するのではなく、その範囲内のすべてのコミットを訪問します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 21,
                'git_option' => '--until=<date>',
                'description' => '特定の日付より古いコミットを表示する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 21,
                'git_option' => '--author=<pattern>',
                'description' => '出力されるコミットを、指定されたパターン（正規表現）にマッチする作者/コミッターのヘッダー行を持つものに限定する。複数の --author=<pattern> を指定すると、作者が指定したパターンのいずれかに一致するコミットが選ばれます（複数の --committer=<pattern> も同様です）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 21,
                'git_option' => '--grep-reflog=<pattern>',
                'description' => '指定されたパターン（正規表現）にマッチする reflog エントリーを持つコミットの出力を制限します。複数の --grep-reflog を指定すると、与えられたパターンのいずれかにマッチする reflog メッセージを持つコミットが選ばれます。このオプションは、--walk-reflogs が使用されていない限り、エラーとなる。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 21,
                'git_option' => '--grep=<pattern>',
                'description' => '指定されたパターン（正規表現）にマッチするログメッセージを持つコミットに限定して出力します。複数の --grep=<pattern> を指定すると、指定されたパターンのいずれかにマッチするメッセージを持つコミットが選ばれます（ただし --all-match を参照）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 21,
                'git_option' => '--all-match',
                'description' => 'コミットの出力を、少なくとも1つにマッチするものではなく、与えられた --grep のすべてにマッチするものに限定する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 21,
                'git_option' => '--invert-grep',
                'description' => 'ログメッセージが--grep=<pattern>で指定したパターンに一致しないコミットを限定して出力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 21,
                'git_option' => '-i',
                'description' => '文字の大文字小文字を区別せずに、正規表現の限定パターンにマッチさせる。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
