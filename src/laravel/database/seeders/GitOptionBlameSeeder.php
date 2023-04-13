<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionBlameSeeder extends Seeder
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
                'git_id' => 39,
                'git_option' => '-b',
                'description' => '境界コミットの空白の SHA-1 を表示します。 これは、blame.blankBoundary 構成オプションを介して制御することもできます。境界コミットの空白の SHA-1 を表示します。 これは、blame.blankBoundary 構成オプションを介して制御することもできます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 39,
                'git_option' => '--root',
                'description' => 'ルート コミットを境界として扱わないでください。 これは、blame.showRoot 構成オプションを介して制御することもできます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 39,
                'git_option' => '--show-stats',
                'description' => 'Blame 出力の最後に追加の統計を含めます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 39,
                'git_option' => '-L <start>,<end>',
                'description' => '<start>、<end>、または関数名の正規表現 <funcname> で指定された行範囲のみに注釈を付けます。 複数回指定できます。 範囲の重複は許可されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 39,
                'git_option' => '-l',
                'description' => '長いリビジョンを表示します (デフォルト: オフ)。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 39,
                'git_option' => '-t',
                'description' => '生のタイムスタンプを表示します (デフォルト: オフ)。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 39,
                'git_option' => '-S <revs-file>',
                'description' => 'git-rev-list[1] を呼び出す代わりに、revs-file からのリビジョンを使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 39,
                'git_option' => '--reverse <rev>..<rev>',
                'description' => '履歴を後方ではなく前方に移動します。 行が出現したリビジョンを表示する代わりに、行が存在した最後のリビジョンを表示します。 これには、非難するパスがSTARTに存在するSTART..ENDのような範囲のリビジョンが必要です。 git Blame --reverse START は、便宜上 git Blame --reverse START..HEAD と見なされます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 39,
                'git_option' => '--first-parent',
                'description' => 'マージ コミットが表示されたら、最初の親コミットのみに従います。 このオプションは、行が履歴全体に導入された時期ではなく、特定の統合ブランチに導入された時期を判別するために使用できます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 39,
                'git_option' => '-p',
                'description' => 'マシン消費用に設計された形式で表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 39,
                'git_option' => '--line-porcelain',
                'description' => '磁器形式で表示しますが、コミットが最初に参照されたときだけでなく、各行のコミット情報を出力します。 --磁器を意味します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 39,
                'git_option' => '--incremental',
                'description' => 'マシン消費用に設計された形式で結果を段階的に表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 39,
                'git_option' => '--encoding=<encoding>',
                'description' => '作成者名とコミットの要約を出力するために使用されるエンコーディングを指定します。 none に設定すると、blame は変換されていないデータを出力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 39,
                'git_option' => '--contents <file>',
                'description' => '<rev> が指定されていない場合、コマンドは作業ツリーのコピーからさかのぼって変更に注釈を付けます。 このフラグは、作業ツリーのコピーが指定されたファイルの内容を持っているかのようにコマンドを装わせます (コマンドを標準入力から読み取るようにするには、- を指定します)。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 39,
                'git_option' => '--date <format>',
                'description' => '日付の出力に使用する形式を指定します。 --date が指定されていない場合は、blame.date 構成変数の値が使用されます。 Blame.date 構成変数も設定されていない場合は、iso 形式が使用されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 39,
                'git_option' => '--[no-]progress',
                'description' => '進行状況は、端末に接続されている場合、デフォルトで標準エラー ストリームで報告されます。 このフラグは、端末に接続されていない場合でも進行状況レポートを有効にします。 --progress を --porcelain または --incremental と一緒に使用することはできません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 39,
                'git_option' => '-M[<num>]',
                'description' => 'ファイル内の移動またはコピーされた行を検出します。 コミットが行のブロックを移動またはコピーする場合 (たとえば、元のファイルに A があり、次に B があり、コミットがそれを B に変更し、次に A に変更する場合)、従来の非難アルゴリズムは移動の半分しか認識せず、通常は移動された行を非難します。 親に上に移動（つまり、B）し、子コミットに下に移動（つまり、A）した行に責任を割り当てます。 このオプションを使用すると、追加の検査パスを実行することにより、行の両方のグループが親のせいになります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 39,
                'git_option' => '-C[<num>]',
                'description' => '-M に加えて、同じコミットで変更された他のファイルから移動またはコピーされた行を検出します。 これは、プログラムを再編成し、コードをファイル間で移動する場合に役立ちます。 このオプションを 2 回指定すると、コマンドはさらに、ファイルを作成するコミット内の他のファイルからのコピーを探します。 このオプションを 3 回指定すると、コマンドは任意のコミットで他のファイルからのコピーを追加で検索します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 39,
                'git_option' => '--ignore-rev <rev>',
                'description' => 'あたかも変更が起こらなかったかのように、責任を割り当てるときにリビジョンによって行われた変更を無視します。 無視されたコミットによって変更または追加された行は、その行または近くの行を変更した前のコミットのせいになります。 このオプションを複数回指定して、複数のリビジョンを無視することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 39,
                'git_option' => '--ignore-revs-file <file>',
                'description' => 'fsck.skipList と同じ形式である必要があるファイルにリストされているリビジョンを無視します。 このオプションは繰り返すことができ、これらのファイルは、blame.ignoreRevsFile 構成オプションで指定されたファイルの後に処理されます。 空のファイル名 "" は、以前に処理されたファイルからリビジョンのリストをクリアします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
