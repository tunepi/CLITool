<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionGrepSeeder extends Seeder
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
                'git_id' => 40,
                'git_option' => '--cached',
                'description' => '作業ツリーで追跡対象のファイルを検索する代わりに、インデックス ファイルに登録されている BLOB を検索します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 40,
                'git_option' => '--no-index',
                'description' => 'Git によって管理されていない現在のディレクトリ内のファイルを検索します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 40,
                'git_option' => '--untracked',
                'description' => '作業ツリー内の追跡されたファイルを検索することに加えて、追跡されていないファイルも検索します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 40,
                'git_option' => '--no-exclude-standard',
                'description' => '.gitignore メカニズムを無視して、無視されたファイルも検索します。 --untracked でのみ有用です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 40,
                'git_option' => '--exclude-standard',
                'description' => '.gitignore メカニズムを介して指定された無視されたファイルに注意を払わないでください。 --no-index を使用して現在のディレクトリ内のファイルを検索する場合にのみ役立ちます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 40,
                'git_option' => '--recurse-submodules',
                'description' => 'リポジトリでアクティブでチェックアウトされている各サブモジュールを再帰的に検索します。 <tree> オプションと組み合わせて使用すると、すべてのサブモジュール出力のプレフィックスは、親プロジェクトの <tree> オブジェクトの名前になります。 --no-index が指定されている場合、このオプションは効果がありません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 40,
                'git_option' => '-a',
                'description' => 'バイナリ ファイルをテキストのように処理します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 40,
                'git_option' => '--textconv',
                'description' => 'textconv フィルター設定を尊重します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 40,
                'git_option' => '--no-textconv',
                'description' => 'textconv フィルター設定を尊重しません。 これがデフォルトです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 40,
                'git_option' => '-i',
                'description' => 'パターンとファイルの間の大文字と小文字の違いは無視してください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 40,
                'git_option' => '-I',
                'description' => 'バイナリ ファイルのパターンを一致させないでください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 40,
                'git_option' => '--max-depth <depth>',
                'description' => 'コマンド ラインで指定された <pathspec> ごとに、ディレクトリの最大 <depth> レベルまで下降します。 -1 の値は制限がないことを意味します。 <pathspec> にアクティブなワイルドカードが含まれている場合、このオプションは無視されます。 つまり、「a*」が「a*」という名前のディレクトリと一致する場合、「*」は文字通り一致するため、--max-depth は引き続き有効です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 40,
                'git_option' => '-r',
                'description' => '--max-depth=-1; と同じ。 これがデフォルトです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 40,
                'git_option' => '--no-recursive',
                'description' => '--max-depth=0 と同じ。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 40,
                'git_option' => '-w',
                'description' => '単語境界でのみパターンに一致します (行の先頭で開始するか、単語以外の文字が先行するか、行末で終了するか、単語以外の文字が続きます)。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 40,
                'git_option' => '-v',
                'description' => '一致しない行を選択します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 40,
                'git_option' => '-h',
                'description' => 'デフォルトでは、コマンドは各一致のファイル名を表示します。 -h オプションを使用して、この出力を抑制します。 -H は完全を期すためにあり、コマンドラインで以前に指定された -h をオーバーライドする以外は何もしません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 40,
                'git_option' => '--full-name',
                'description' => 'サブディレクトリから実行すると、コマンドは通常、現在のディレクトリからの相対パスを出力します。 このオプションは、パスがプロジェクトのトップ ディレクトリに相対的に出力されるように強制します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 40,
                'git_option' => '-E',
                'description' => 'パターンには POSIX 拡張/基本正規表現を使用します。 デフォルトでは、基本的な正規表現を使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 40,
                'git_option' => '-P',
                'description' => 'パターンには Perl 互換の正規表現を使用します。これらのタイプの正規表現のサポートは、オプションのコンパイル時の依存関係です。 Git がそれらをサポートするようにコンパイルされていない場合、このオプションを提供すると、Git が停止します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
