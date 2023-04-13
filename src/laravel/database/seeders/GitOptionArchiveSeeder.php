<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionArchiveSeeder extends Seeder
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
                'git_id' => 52,
                'git_option' => '--format=<fmt>',
                'description' => '結果のアーカイブの形式。 可能な値は、tar、zip、tar.gz、tgz、および構成オプション tar.<format>.command を使用して定義された任意の形式です。 --format が指定されておらず、出力ファイルが指定されている場合、形式は可能であればファイル名から推測されます (たとえば、foo.zip に書き込むと、出力が zip 形式になります)。 それ以外の場合、出力形式は tar です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 52,
                'git_option' => '-l',
                'description' => '利用可能なすべてのフォーマットを表示',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 52,
                'git_option' => '-v',
                'description' => '進行状況を stderr に報告します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 52,
                'git_option' => '--prefix=<prefix>/',
                'description' => '<prefix>/ をアーカイブ内のパスに追加します。 繰り返すことができます。 その右端の値がすべての追跡ファイルに使用されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 52,
                'git_option' => '-o <file>',
                'description' => 'アーカイブを stdout ではなく <file> に書き込みます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 52,
                'git_option' => '--add-file=<file>',
                'description' => '追跡されていないファイルをアーカイブに追加します。 複数のファイルを追加するために繰り返すことができます。 アーカイブ内のファイルのパスは、この --add-file の前の最後の --prefix オプション (存在する場合) の値と <file> のベース名を連結することによって構築されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 52,
                'git_option' => '--add-virtual-file=<path>:<content>',
                'description' => '指定されたコンテンツをアーカイブに追加します。 複数のファイルを追加するために繰り返すことができます。 アーカイブ内のファイルのパスは、最後の --prefix オプション (存在する場合) の値を、この --add-virtual-file と <path> の前に連結することによって構築されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 52,
                'git_option' => '--worktree-attributes',
                'description' => '作業ツリーの .gitattributes ファイルでも属性を探します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 52,
                'git_option' => '--mtime=<time>',
                'description' => 'アーカイブ エントリの変更時刻を設定します。 このオプションがないと、 <tree-ish> がコミットまたはタグの場合はコミッター時間が使用され、ツリーの場合は現在の時間が使用されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 52,
                'git_option' => '<extra>',
                'description' => 'これは、アーカイバ バックエンドが理解できる任意のオプションです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 52,
                'git_option' => '--remote=<repo>',
                'description' => 'ローカル リポジトリから tar アーカイブを作成する代わりに、リモート リポジトリから tar アーカイブを取得します。 リモート リポジトリでは、<tree-ish> で許可される sha1 式に制限が設けられる場合があることに注意してください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 52,
                'git_option' => '--exec=<git-upload-archive>',
                'description' => '--remote とともに使用して、リモート側の git-upload-archive へのパスを指定します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 52,
                'git_option' => '<tree-ish>',
                'description' => 'アーカイブを生成するツリーまたはコミット。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 52,
                'git_option' => '<path>',
                'description' => 'オプションのパス パラメータを指定しないと、現在の作業ディレクトリのすべてのファイルとサブディレクトリがアーカイブに含まれます。 1 つ以上のパスが指定されている場合は、これらのパスのみが含まれます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
