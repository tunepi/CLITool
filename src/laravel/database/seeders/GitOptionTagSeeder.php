<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionTagSeeder extends Seeder
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
                'git_id' => 23,
                'git_option' => '-a',
                'description' => '符号なし、注釈ありのタグオブジェクトを作る',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '-s',
                'description' => 'デフォルトのメールアドレスの鍵を使って、GPG署名されたタグを作成します。タグのGPG署名のデフォルトの動作は、設定変数tag.gpgSignが存在する場合はそれを制御し、そうでない場合は無効にします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '--no-sign',
                'description' => 'すべてのタグに署名させるために設定されているtag.gpgSign設定変数をオーバーライドします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '-u <key-id>',
                'description' => '与えられたキーを使って、GPG署名付きのタグを作成する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '-f',
                'description' => '既存のタグを指定された名前で置換する（失敗するのではなく）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '-d',
                'description' => '与えられた名前を持つ既存のタグを削除する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '-v',
                'description' => '与えられたタグ名のGPG署名を検証する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '-n<num>',
                'description' => '<num>は、-lを使用したときに、注釈の何行目を表示するかを指定します。listを意味する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '-l',
                'description' => 'タグをリストアップします。オプションで<pattern>...を指定すると、例えばgit tag --list "v-*"のように、パターンにマッチするタグのみをリストアップします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '--sort=<key>',
                'description' => '与えられたキーに基づきソートする。Prefix - 値の降順でソートする。sort=<key>オプションは複数回使用することができ、その場合は最後のキーが主キーとなる。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '--color[=<when>]',
                'description' => 'formatオプションで指定された色を尊重する。<when> フィールドには always, never, auto のいずれかを指定する（<when> がない場合は always が指定されたものとして動作する）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '-i',
                'description' => 'タグの並べ替えやフィルタリングは、大文字と小文字を区別しません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '--column[=<options>]',
                'description' => 'タグの一覧をカラムで表示する。オプションの構文については、設定変数 column.tag を参照してください。--オプションなしの-columnと--no-columnは、それぞれalwaysとneverに相当する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '--contains [<commit>]',
                'description' => '指定したコミットを含むタグだけをリストアップします（指定しない場合はHEAD）。listを暗示する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '--no-contains [<commit>]',
                'description' => '指定したコミットを含まないタグだけをリストアップします（指定しない場合はHEAD）。listを意味します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '--merged [<commit>]',
                'description' => '指定したコミットから到達可能なコミットを持つタグのみをリストアップします（指定しない場合はHEAD）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '--no-merged [<commit>]',
                'description' => '指定したコミットから到達できないコミットを持つタグのみをリストアップします（指定しない場合はHEAD）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '--points-at <object>',
                'description' => '与えられたオブジェクトのタグだけをリストアップします（指定がない場合はHEAD）。listを暗示する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '-m <msg>',
                'description' => '与えられたタグメッセージを使用する（プロンプトの代わりに）。複数の-mオプションが与えられた場合、それらの値は別々の段落として連結される。a、-s、-u <key-id>のいずれかが与えられていない場合、-aを意味する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '-F <file>',
                'description' => '与えられたファイルからタグメッセージを取り込む。標準入力からメッセージを読み込むには - を使用します．a，-s，-u＜key-id＞のいずれかが与えられていない場合は，-aを暗示する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '-e',
                'description' => '通常、-Fによるファイルからのメッセージと-mによるコマンドラインからのメッセージは、そのままタグメッセージとして使用されます。このオプションは、これらのソースから取得したメッセージをさらに編集することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '--cleanup=<mode>',
                'description' => 'このオプションは、タグメッセージをどのようにクリーンアップするかを設定します。<mode>には、verbatim、whitespace、stripのいずれかを指定することができる。stripモードはデフォルトです。verbatimモードはメッセージを全く変更せず、whitespaceは先頭/末尾の空白行だけを削除し、stripは空白と解説の両方を削除します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '--create-reflog',
                'description' => 'タグの reflog を作成します。タグの reflog をグローバルに有効にするには、git-config[1] の core.logAllRefUpdates を参照してください。否定形--no-create-reflogは、以前の--create-reflogを上書きするだけで、現在のところcore.logAllRefUpdatesの設定を否定するものではありません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '--format=<format>',
                'description' => '表示中のタグリフとそれが指すオブジェクトから%(フィールド名)を補間する文字列です。形式はgit-for-each-ref[1]のものと同じです。未指定の場合、デフォルトは %(refname:strip=2) です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '<tagname>',
                'description' => '作成、削除、または記述するタグの名前です。新しいタグ名は、git-check-ref-format[1] で定義されているすべてのチェックをパスしなければなりません。これらのチェックの中には、タグ名に使用できる文字が制限されているものもあります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 23,
                'git_option' => '<commit>',
                'description' => '新しいタグが参照するオブジェクトで、通常はコミットです。デフォルトはHEADです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
