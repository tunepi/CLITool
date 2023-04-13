<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionRebaseSeeder extends Seeder
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
                'git_id' => 36,
                'git_option' => '--onto <newbase>',
                'description' => '新しいコミットを作成する開始点。onto オプションが指定されていない場合、開始点は <upstream> となります。既存のブランチ名だけでなく、有効なコミットを指定することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 36,
                'git_option' => '--keep-base',
                'description' => '新しいコミットを作成する開始点を、<upstream>と<branch>のマージベースに設定します。git rebase --keep-base <upstream> <branch> を実行すると、git rebase --reapply-cherry-picks --no-fork-point --onto <upstream>...<branch> <upstream> <branch> を実行するのと同じです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 36,
                'git_option' => '<upstream>',
                'description' => '比較対象となる上流ブランチ。既存のブランチ名だけでなく、有効なコミットを指定することができます。デフォルトは、現在のブランチに対して設定されているアップストリームです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 36,
                'git_option' => '<branch>',
                'description' => '作業ブランチ。デフォルトはHEADです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 36,
                'git_option' => '--apply',
                'description' => 'リベースに適用する戦略を使用します (内部的に git-am を呼び出します)。このオプションは、将来的にマージバックエンドが apply が行うすべてのことを処理するようになれば、不要になるかもしれません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 36,
                'git_option' => '--empty={drop,keep,ask}',
                'description' => '開始時は空ではなく、上流コミットのクリーンチェリーピックでもないが、リベース後に空になってしまうコミットをどのように扱うか（上流での変更のサブセットを含んでいるため）。drop (デフォルト) では、空になったコミットは削除されます。keepでは、そのようなコミットは保持されます。ask (--interactive で暗黙の了解) を使うと、空のコミットが適用されたときにリベースが停止し、そのコミットを削除するか、ファイルをさらに編集するか、空の変更をそのままコミットするかを選択することができます。他のオプション、例えば --exec は、-i/--interactive が明示的に指定されない限り、デフォルトの drop を使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 36,
                'git_option' => '--no-keep-empty',
                'description' => 'リベースの前に空から始まるコミット (つまり、親から何も変更していないコミット) を結果に残さないようにします。このようなコミットを作成するには git commit に --allow-empty override フラグを渡す必要があり、これはユーザーが意図的にこのようなコミットを作成し、それを保持したいことを意味します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 36,
                'git_option' => '--reapply-cherry-picks',
                'description' => '上流コミットのクリーンなチェリーピックをすべて再適用し、先取りして削除しないようにします。(これらのコミットがリベース後に空になった場合、上流の変更のサブセットを含んでいるため、それらに対する動作は --empty フラグによって制御されます)。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 36,
                'git_option' => '--allow-empty-message',
                'description' => 'No-opです。このオプションは、空のメッセージを持つコミットのリベースに失敗する動作を上書きし、空のメッセージを持つコミットのリベースを可能にします。現在では、空のメッセージを持つコミットはリベースが停止することはありません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 36,
                'git_option' => '-m',
                'description' => 'rebaseにマージ戦略を使用する（デフォルト）。 リベースのマージは、作業ブランチの各コミットを<upstream>ブランチの上で再生することで動作することに注意してください。このため、マージの衝突が起こった場合、我々のものとして報告された側は、<upstream>から始まるこれまでのリベース系列であり、彼らのものは作業ブランチとなります。つまり、左右が入れ替わるのです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 36,
                'git_option' => '-s <strategy>',
                'description' => 'デフォルトの ort の代わりに、指定されたマージ戦略を使用します。これは --merge を意味します。 git rebase は作業ブランチの各コミットを、与えられた戦略を用いて <upstream> ブランチの上に置き換えるので、ours 戦略を使うと <branch> からすべてのパッチが空になり、ほとんど意味がありません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 36,
                'git_option' => '-X <strategy-option>',
                'description' => '<strategy-option>をマージ戦略へ渡す。これは --merge を意味し、戦略が指定されていない場合は -s ort を意味する。mオプションの場合、oursとtheirsが逆になっていることに注意。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 36,
                'git_option' => '--rerere-autoupdate',
                'description' => 'rerere メカニズムが現在のコンフリクトの解決を再利用して作業ツリーのファイルを更新した後、解決結果でインデックスも更新することを許可します。--no-rerere-autoupdate は、git add でインデックスに結果をコミットする前に、rerere が行ったことをダブルチェックして潜在的なミスマッチを発見する良い方法です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 36,
                'git_option' => '-S[<keyid>]',
                'description' => 'GPG-signのコミットです。keyid引数はオプションで、デフォルトはコミッターのIDです。指定する場合は、オプションにスペースを入れずに貼り付ける必要があります。--no-gpg-signは、commit.gpgSign設定変数と、それ以前の--gpg-signの両方を打ち消すのに便利です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 36,
                'git_option' => '-q',
                'description' => '静かにしてください。--no-statを暗示している。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 36,
                'git_option' => '-v',
                'description' => '冗長であること。statを暗示する。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 36,
                'git_option' => '--stat',
                'description' => '前回のリベース以降に上流で何が変わったかを diffstat で表示します。diffstat は、設定オプション rebase.stat によっても制御されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 36,
                'git_option' => '-n',
                'description' => 'リベース処理の一環として、diffstatを表示しない。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 36,
                'git_option' => '--no-verify',
                'description' => 'このオプションは、プレリベースフックを回避するものです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 36,
                'git_option' => '--verify',
                'description' => 'デフォルトの pre-rebase フックの実行を許可します。このオプションは --no-verify を上書きするために使用することができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
