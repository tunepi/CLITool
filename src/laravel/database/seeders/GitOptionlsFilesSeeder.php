<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionlsFilesSeeder extends Seeder
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
                'git_id' => 63,
                'git_option' => '-c',
                'description' => 'Git のインデックスにキャッシュされたすべてのファイル、つまり追跡されたすべてのファイルを表示します。 (これは、-c/-s/-d/-o/-u/-k/-m/--resolve-undo オプションが指定されていない場合のデフォルトです。)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 63,
                'git_option' => '-d',
                'description' => 'ステージングされていない削除を含むファイルを表示する',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 63,
                'git_option' => '-m',
                'description' => 'ステージングされていない変更を含むファイルを表示します (ステージングされていない削除もステージングされていない変更としてカウントされることに注意してください)。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 63,
                'git_option' => '-o',
                'description' => '出力に他の (追跡されていない) ファイルを表示する',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 63,
                'git_option' => '-i',
                'description' => '無視されたファイルのみを出力に表示します。 -c または -o を明示的に指定して使用する必要があります。 インデックス内のファイルを表示する場合 (つまり、-c と共に使用する場合)、除外パターンに一致するファイルのみを出力します。 「その他」のファイルを表示する場合 (つまり、-o と共に使用する場合)、除外パターンに一致するファイルのみを表示します。 標準の無視ルールは自動的にアクティブ化されないため、少なくとも 1 つの --exclude* オプションが必要です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 63,
                'git_option' => '-s',
                'description' => 'ステージングされたコンテンツのモード ビット、オブジェクト名、およびステージ番号を出力に表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 63,
                'git_option' => '--directory',
                'description' => 'ディレクトリ全体が「その他」に分類されている場合は、その内容全体ではなく、その名前のみを (末尾にスラッシュを付けて) 表示します。 -o/--others なしでは効果がありません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 63,
                'git_option' => '--no-empty-directory',
                'description' => '空のディレクトリを一覧表示しないでください。 --directory なしでは効果がありません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 63,
                'git_option' => '-u',
                'description' => 'マージされていないファイルに関する情報を出力に表示しますが、他の追跡されたファイルは表示しません (--stage を強制し、--cached をオーバーライドします)。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 63,
                'git_option' => '-k',
                'description' => '追跡されたファイルをファイルシステムに書き込むことができるようにするために、ファイル/ディレクトリの競合のために削除する必要があるファイルシステム上の追跡されていないファイルを表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 63,
                'git_option' => '--resolve-undo',
                'description' => 'インデックスに解決元に戻す情報を持つファイルを、それらの解決元に戻す情報とともに表示します。 (resolve-undo 情報は、「git checkout -m $PATH」を実装するために使用されるものです。つまり、誤って解決されたマージ競合を再作成するために使用されます)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 63,
                'git_option' => '-z',
                'description' => '出力時に \0 行を終了し、ファイル名を引用しません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 63,
                'git_option' => '--deduplicate',
                'description' => 'ファイル名のみが表示されている場合は、マージ中に複数の段階が発生したり、 --deleted と --modified オプションを同時に指定したりすることで発生する可能性のある重複を抑制します。 -t、--unmerged、または --stage オプションのいずれかが使用されている場合、このオプションは効果がありません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 63,
                'git_option' => '-x <pattern>',
                'description' => 'パターンに一致する追跡されていないファイルをスキップします。 pattern はシェルのワイルドカード パターンであることに注意してください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 63,
                'git_option' => '-X <file>',
                'description' => '<file> から除外パターンを読み取ります。 1 行に 1 つ。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 63,
                'git_option' => '--exclude-per-directory=<file>',
                'description' => '<file> 内のディレクトリとそのサブディレクトリにのみ適用される追加の除外パターンをお読みください。 非推奨。 代わりに --exclude-standard を使用してください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 63,
                'git_option' => '--exclude-standard',
                'description' => '標準の Git 除外を追加します: .git/info/exclude、各ディレクトリの .gitignore、およびユーザーのグローバル除外ファイル。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 63,
                'git_option' => '--error-unmatch',
                'description' => '<file> がインデックスに表示されない場合は、これをエラーとして扱います (1 を返します)。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 63,
                'git_option' => '--with-tree=<tree-ish>',
                'description' => '--error-unmatch を使用して、ユーザーが指定した <file> (つまり、パス パターン) 引数をパスに展開する場合、名前付きの <tree-ish> が存在するため、インデックスで削除されたパスがまだ存在するふりをします。 このオプションを -s または -u オプションと一緒に使用しても意味がありません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 63,
                'git_option' => '-t',
                'description' => 'ファイル名と一緒にステータスタグを表示します。 スクリプト作成の目的で、git-status[1] --porcelain と git-diff-files[1] --name-status はほとんど常に優れた代替手段であり、ユーザーは git-status[1] --short または git-diff[1] --name-status よりユーザーフレンドリーな代替手段。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
