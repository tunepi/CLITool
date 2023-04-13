<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionShortLogSeeder extends Seeder
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
                'git_id' => 32,
                'git_option' => '-n',
                'description' => '著者のアルファベット順ではなく、著者ごとのコミット数で出力をソートします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 32,
                'git_option' => '-s',
                'description' => 'コミットの説明を抑制し、コミット数のサマリーのみを提供します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 32,
                'git_option' => '-e',
                'description' => '各著者のメールアドレスを表示する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 32,
                'git_option' => '--format[=<format>]',
                'description' => 'コミットの件名の代わりに、他の情報を使って各コミットを説明します。<format> には git log の --format オプションで指定できる任意の文字列を指定します* [%h] %s. ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 32,
                'git_option' => '--date=<format>',
                'description' => 'Show dates formatted according to the given date string. Useful with --group=format:<format>.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 32,
                'git_option' => '--group=<type>',
                'description' => 'コミットを <type> に基づいてグループ化する。groupオプションが指定されない場合、デフォルトはauthorです。<type>は以下のいずれかです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 32,
                'git_option' => '-c',
                'description' => 'これは--group=committerの別名である。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 32,
                'git_option' => '-w[<width>[,<indent1>[,<indent2>]]]',
                'description' => '各行をwidthで折り返すことにより、出力を改行する。各エントリーの1行目はindent1スペースで、2行目以降はindent2スペースでインデントされる。width、indent1、indent2のデフォルトはそれぞれ76、6、9である。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 32,
                'git_option' => '<revision-range>',
                'description' => '指定したリビジョン範囲内のコミットのみを表示します。<revision-range> を指定しない場合は、デフォルトで HEAD (つまり現在のコミットまでの全履歴) になります。origin..HEAD は現在のコミット (つまり HEAD) から到達できるすべてのコミットを指定し、origin からのコミットは指定しません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 32,
                'git_option' => '[--] <path>…​',
                'description' => '指定されたパスに一致するファイルがどのように存在するようになったかを説明するのに十分なコミットのみを考慮する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 32,
                'git_option' => '-<number>',
                'description' => '出力するコミット数を制限する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 32,
                'git_option' => '--skip=<number>',
                'description' => 'コミット出力の表示を開始する前に、コミット数をスキップする。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 32,
                'git_option' => '--since=<date>',
                'description' => '特定の日付より新しいコミットを表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 32,
                'git_option' => '--since-as-filter=<date>',
                'description' => '指定した日付より新しいコミットをすべて表示します。これは、特定の日付より古い最初のコミットで停止するのではなく、その範囲内のすべてのコミットを訪問します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 32,
                'git_option' => '--until=<date>',
                'description' => '特定の日付より古いコミットを表示する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 32,
                'git_option' => '--author=<pattern>',
                'description' => '出力されるコミットを、指定されたパターン（正規表現）にマッチする作者/コミッターのヘッダー行を持つものに限定する。複数の --author=<pattern> を指定すると、作者が指定したパターンのいずれかに一致するコミットが選ばれます（複数の --committer=<pattern> も同様です）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 32,
                'git_option' => '--grep-reflog=<pattern>',
                'description' => '指定されたパターン（正規表現）にマッチする reflog エントリーを持つコミットの出力を制限します。複数の --grep-reflog を指定すると、与えられたパターンのいずれかにマッチする reflog メッセージを持つコミットが選ばれます。このオプションは、--walk-reflogs が使用されていない限り、エラーとなる。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 32,
                'git_option' => '--grep=<pattern>',
                'description' => '指定されたパターン（正規表現）にマッチするログメッセージを持つコミットに限定して出力します。複数の --grep=<pattern> を指定すると、指定されたパターンのいずれかにマッチするメッセージを持つコミットが選ばれます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 32,
                'git_option' => '--all-match',
                'description' => 'コミットの出力を、少なくとも1つにマッチするものではなく、与えられた --grep のすべてにマッチするものに限定する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 32,
                'git_option' => '--invert-grep',
                'description' => 'ログメッセージが--grep=<pattern>で指定したパターンに一致しないコミットを限定して出力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
