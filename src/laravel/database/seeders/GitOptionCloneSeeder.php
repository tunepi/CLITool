<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionCloneSeeder extends Seeder
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
                'git_id' => 6,
                'git_option' => '-l',
                'description' => 'クローン元のリポジトリがローカルマシンにある場合、このフラグは通常の「Git aware」トランスポートメカニズムを回避し、HEAD と objects および refs ディレクトリー以下のすべてのコピーを作成することでリポジトリをクローンします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '--no-hardlinks',
                'description' => 'ローカルファイルシステム上のリポジトリからのクローン処理で、ハードリンクを使用する代わりに .git/objects ディレクトリの下にファイルをコピーするように強制します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '-s',
                'description' => 'クローンするリポジトリがローカルマシンにある場合、ハードリンクを使用する代わりに、自動的に .git/objects/info/alternates を設定して、オブジェクトをソースリポジトリと共有します。出来上がったリポジトリは、それ自身のオブジェクトを持たない状態からスタートします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '--reference[-if-able] <repository>',
                'description' => '参照用リポジトリがローカルマシンにある場合、参照用リポジトリからオブジェクトを取得するために .git/objects/info/alternates を自動的に設定します。すでに存在するリポジトリを代替物として使用することで、クローンされるリポジトリからコピーするオブジェクトが少なくなり、ネットワークやローカルストレージのコストが削減されます。reference-if-ableを使用する場合、存在しないディレクトリはクローンを中止する代わりに、警告を発してスキップされます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '--dissociate',
                'description' => 'ネットワーク転送を減らすために --reference オプションで指定した参照リポジトリからオブジェクトを借用し、借用したオブジェクトの必要なローカルコピーを作成してクローンを作成した後に借用を停止します。このオプションは、すでに別のリポジトリからオブジェクトを借用しているリポジトリからローカルにクローンを作成する場合にも使用することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '-q',
                'description' => '静かに（メッセージを減らす）オペレーションします。進行状況は標準エラーストリームに報告されません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '-v',
                'description' => '長々と（メッセージを増やす）実行します。標準エラーストリームへの進行状況のレポートには影響を及ぼしません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '--progress',
                'description' => '--quietが指定されていない限り、端末に接続されている場合、進捗状況はデフォルトで標準エラーストリームに報告されるようになっています。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '--server-option=<option>',
                'description' => 'プロトコルバージョン2を使用して通信する場合、指定された文字列をサーバーに送信します。指定された文字列にはNULまたはLF文字を含めることはできません。不明なオプションを含むサーバーオプションの処理はサーバー固有です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '-n',
                'description' => 'クローン完了後、ヘッドのチェックアウトは実行されません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '--bare',
                'description' => 'ベアGitリポジトリを作成します。つまりdirectory> を作成して管理ファイルを<directory>/.gitに置く代わりに、<directory> 自体を$GIT_DIRにします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '--sparse',
                'description' => 'スパースチェックアウトファイルを初期化し、ワークディレクトリがリポジトリのルートにあるファイルのみで開始されるようになります。スパースチェックアウトファイルは必要に応じてワークディレクトリを拡張するように変更することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '--filter=<filter-spec>',
                'description' => '部分クローン機能を使用し、サーバーが特定のオブジェクトフィルターに従ってリーチ可能なオブジェクトのサブセットを送信するように要求します。--filterを使用する場合、提供された<filter-spec> が部分クローンフィルターに使用されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '--also-filter-submodules',
                'description' => 'リポジトリ内の任意のサブモジュールに部分クローンフィルタを適用します。filterと--recurse-submodulesが必要です。clone.filterSubmodules設定オプションにより、デフォルトでオンにすることができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '--mirror',
                'description' => 'ソースリポジトリのミラーをセットアップする。これは --bare を意味します。-bareと比較して、-mirrorはソースのローカルブランチをターゲットのローカルブランチにマップするだけでなく、すべてのref（リモートトラッキングブランチ、ノートなどを含む）をマップし、ターゲットリポジトリのgitリモートアップデートによってこれらのすべてのrefが上書きされるようにrefspec設定をセットアップします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '-o <name>',
                'description' => '上流のリポジトリを追跡するためにリモート名 origin を使用する代わりに、<name> を使用します。configのclone.defaultRemoteNameを上書きします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '-b <name>',
                'description' => '新しく作成された HEAD をクローンリポジトリの HEAD が指すブランチに向けるのではなく、代わりに <name> ブランチに向けます。ベアでないリポジトリでは、これがチェックアウトされるブランチです。-branchはタグを取ることもでき、結果のリポジトリでそのコミットでHEADをデタッチします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '-u <upload-pack>',
                'description' => 'クローン元のリポジトリがssh経由でアクセスされる場合に指定すると、相手側で実行されるコマンドのデフォルトではないパスを指定します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '--template=<template-directory>',
                'description' => 'テンプレートが使用されるディレクトリを指定します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '-c <key>=<value>',
                'description' => '新しく作成されたリポジトリに設定変数を設定します。これは、リポジトリが初期化された直後で、リモート履歴の取得やファイルのチェックアウトが行われる前に有効になります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '--depth <depth>',
                'description' => '指定されたコミット数に切り詰めた履歴を持つ浅いクローンを作成します。すべてのブランチの先端付近の履歴を取得する --no-single-branch が与えられていない限り、--single-branch を意味する。サブモジュールを浅くクローンしたい場合は、--shallow-submodulesも渡してください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '--shallow-since=<date>',
                'description' => '指定時間以降の履歴を持つ浅いクローンを作成します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '--shallow-exclude=<revision>',
                'description' => '指定したリモートブランチまたはタグから到達可能なコミットを除外して、履歴を持つ浅いクローンを作成します。このオプションは複数回指定することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '--[no-]single-branch',
                'description' => 'ブランチの先端につながる履歴のみをクローンします。作成されたリポジトリにさらにフェッチすると、このオプションが最初のクローニングに使用されたブランチのリモート追跡ブランチのみが更新されます。リモートの HEAD が --single-branch clone 時にどのブランチも指していなかった場合、リモートトラッキングブランチは作成されません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '--no-tags',
                'description' => 'タグをクローンせず、設定で remote.<remote>.tagOpt=--no-tags とすることで、今後の git pull や git fetch 操作でタグを追わないようにします。これ以降、明示的にタグを取得することはできます 。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '--recurse-submodules[=<pathspec>]',
                'description' => 'クローンが作成された後、指定されたpathspecに基づき、内部のサブモジュールを初期化し、クローンを作成します。pathspecが提供されない場合、すべてのサブモジュールが初期化され、クローン化されます。このオプションは、複数の項目からなるpathspecに対して複数回指定することができます。出来上がったクローンは、submodule.activeに与えられたpathspecが設定され、pathspecが与えられなかった場合は"."（すべてのサブモジュールを意味する）が設定されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '--[no-]shallow-submodules',
                'description' => 'クローン化されるサブモジュールは、すべて深さ1の浅いものになります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '--[no-]remote-submodules',
                'description' => 'クローンされたすべてのサブモジュールは、スーパープロジェクトが記録したSHA-1ではなく、サブモジュールのリモート追跡ブランチのステータスを使用してサブモジュールを更新するようになります。git submodule update に --remote を渡すのと同じことです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '--separate-git-dir=<git-dir>',
                'description' => 'クローンリポジトリを本来あるべき場所に置くのではなく、指定したディレクトリにクローンリポジトリを置き、そこにファイルシステムにとらわれないGitシンボリックリンクを作成します。その結果、Git リポジトリを作業ツリーから切り離すことができるようになります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '-j <n>',
                'description' => '同時にフェッチされるサブモジュールの数。デフォルトはsubmodule.fetchJobsオプションです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '<repository>',
                'description' => 'クローン元となる（リモートの可能性もある）リポジトリです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '<directory>',
                'description' => 'クローン先となる新しいディレクトリの名前。ディレクトリが明示的に与えられていない場合は、ソースリポジトリの「humanish」部分が使用されます（repoは/path/to/repo.git、fooはhost.xz:foo/.git）。既存のディレクトリへのクローン作成は、そのディレクトリが空の場合のみ許可されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 6,
                'git_option' => '--bundle-uri=<uri>',
                'description' => 'リモートからフェッチする前に、与えられた<uri>からバンドルをフェッチし、データをローカルリポジトリにアンバンドリングします。バンドル内のrefは、hidden refs/bundle/*名前空間の下に保存されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
