<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionInitSeeder extends Seeder
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
                'git_id' => 5,
                'git_option' => '-q',
                'description' => 'エラーメッセージと警告メッセージのみを出力し、その他の出力は抑制されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 5,
                'git_option' => '--bare',
                'description' => 'ベアリポジトリを作成します。GIT_DIR環境が設定されていない場合は、現在の作業ディレクトリに設定されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 5,
                'git_option' => '--object-format=<format>',
                'description' => 'リポジトリに指定されたオブジェクトフォーマット（ハッシュアルゴリズム）を指定します。有効な値はsha1および（有効な場合）sha256です。sha1はデフォルトです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 5,
                'git_option' => '--template=<template-directory>',
                'description' => 'テンプレートが使用されるディレクトリを指定します。(後述の「TEMPLATE DIRECTORY」セクションを参照）。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 5,
                'git_option' => '--separate-git-dir=<git-dir>',
                'description' => 'リポジトリを $GIT_DIR や ./.git/ にディレクトリとして初期化する代わりに、実際のリポジトリへのパスを含むテキストファイルをそこに作成します。このファイルは、ファイルシステムに依存しない Git のリポジトリへのシンボリックリンクとして機能します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 5,
                'git_option' => '-b <branch-name>',
                'description' => '新しく作成されたリポジトリの初期ブランチに指定された名前を使用します。指定がない場合は、デフォルトの名前に戻ります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 5,
                'git_option' => '--shared[=(false|true|umask|group|all|world|everybody|<perm>)]',
                'description' => 'Git リポジトリを複数のユーザーで共有することを指定します。これにより、同じグループに属するユーザーがそのリポジトリにプッシュすることができるようになります。指定すると、設定変数 "core.sharedRepository" が設定され、$GIT_DIR 以下のファイルやディレクトリが要求されたパーミッションで作成されるようになります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
