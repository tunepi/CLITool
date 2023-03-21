<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionCleanSeeder extends Seeder
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
                'git_id' => 47,
                'git_option' => '-d',
                'description' => '通常、 <pathspec> が指定されていない場合、 git clean は追跡されていないディレクトリに再帰的に移動し、削除しすぎないようにします。 -d を指定すると、そのようなディレクトリにも再帰します。 <pathspec> が指定されている場合、-d は無関係です。 指定されたパスに一致する追跡されていないすべてのファイル (--force で言及されているネストされた git ディレクトリを除く) が削除されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 47,
                'git_option' => '-f',
                'description' => 'Git 構成変数 clean.requireForce が false に設定されていない場合、git clean は、-f または -i を指定しない限り、ファイルまたはディレクトリの削除を拒否します。 2 番目の -f が指定されない限り、Git は追跡されていないネストされた git リポジトリ (.git サブディレクトリを持つディレクトリ) の変更を拒否します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 47,
                'git_option' => '-f',
                'description' => 'Git 構成変数 clean.requireForce が false に設定されていない場合、git clean は、-f または -i を指定しない限り、ファイルまたはディレクトリの削除を拒否します。 2 番目の -f が指定されない限り、Git は追跡されていないネストされた git リポジトリ (.git サブディレクトリを持つディレクトリ) の変更を拒否します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 47,
                'git_option' => '-i',
                'description' => '何が行われるかを示し、インタラクティブにファイルを消去します。 詳しくは「インタラクティブモード」をご覧ください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 47,
                'git_option' => '-n',
                'description' => '実際に何かを削除するのではなく、何が行われるかを示すだけです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 47,
                'git_option' => '-q',
                'description' => '黙って、エラーのみを報告し、正常に削除されたファイルは報告しません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 47,
                'git_option' => '-e <pattern>',
                'description' => '標準の無視ルールに加えて、指定された除外パターンを使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 47,
                'git_option' => '-x',
                'description' => '標準の無視ルール (gitignore[5] を参照) を使用しないでください。ただし、コマンド ラインから -e オプションで指定された無視ルールを引き続き使用してください。 これにより、ビルド プロダクトを含む、追跡されていないすべてのファイルを削除できます。 これを (おそらく git restore または git reset と組み合わせて) 使用して、元の作業ディレクトリを作成し、クリーン ビルドをテストできます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
