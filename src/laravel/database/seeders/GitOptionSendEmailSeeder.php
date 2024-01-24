<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionSendEmailSeeder extends Seeder
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
                'git_id' => 43,
                'git_option' => '--annotate',
                'description' => '送信しようとしている各パッチを確認して編集します。 デフォルトは sendemail.annotate の値です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 43,
                'git_option' => '--bcc=<address>,…​',
                'description' => 'メールごとに「Bcc:」の値を指定します。 デフォルトは sendemail.bcc の値です。このオプションは複数回指定できます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 43,
                'git_option' => '--cc=<address>,…​',
                'description' => '各電子メールの開始「Cc:」値を指定します。 デフォルトは sendemail.cc の値です。このオプションは複数回指定できます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 43,
                'git_option' => '--compose',
                'description' => 'テキスト エディター (git-var[1] の GIT_EDITOR を参照) を呼び出して、パッチ シリーズの紹介メッセージを編集します。 --compose を使用すると、git send-email は From、Subject、および In-Reply-To ヘッダーを使用します。 メッセージで指定されています。 メッセージの本文 (ヘッダーと空行の後に入力するもの) に空行 (または Git: プレフィックス付き) しか含まれていない場合、概要は送信されませんが、From、Subject、および In-Reply-To ヘッダーは送信されます。 削除しない限り使用できます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 43,
                'git_option' => '--from=<address>',
                'description' => 'メールの送信者を指定します。 コマンドラインで指定されていない場合、sendemail.from 構成オプションの値が使用されます。 コマンド行オプションも sendemail.from も設定されていない場合、ユーザーは値の入力を求められます。 プロンプトのデフォルトは、「git var -l」によって返されるように、GIT_AUTHOR_IDENT、または設定されていない場合は GIT_COMMITTER_IDENT の値になります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 43,
                'git_option' => '--reply-to=<address>',
                'description' => '受信者からの返信の宛先アドレスを指定します。 メッセージへの返信が --from パラメータで指定されたものとは別のアドレスに送られる必要がある場合は、これを使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 43,
                'git_option' => '--in-reply-to=<identifier>',
                'description' => '最初のメール (または --no-thread が指定されたすべてのメール) が指定された Message-Id への返信として表示されるようにします。これにより、新しいパッチ シリーズを提供するためにスレッドが中断されるのを回避できます。 2 回目以降のメールは、 --[no-]chain-reply-to の設定に従って返信として送信されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 43,
                'git_option' => '--subject=<string>',
                'description' => 'メール スレッドの最初の件名を指定します。 --compose も設定されている場合にのみ必要です。 --compose が設定されていない場合は、プロンプトが表示されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 43,
                'git_option' => '--to=<address>,…​',
                'description' => '生成された電子メールの主要な受信者を指定します。 通常、これは関連するプロジェクトの上流のメンテナーになります。 デフォルトは sendemail.to 構成値の値です。 それが指定されておらず、--to-cmd が指定されていない場合は、プロンプトが表示されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 43,
                'git_option' => '--8bit-encoding=<encoding>',
                'description' => 'エンコードを宣言していない非 ASCII メッセージまたは件名に遭遇した場合は、ヘッダー/引用を追加して、それが <encoding> でエンコードされていることを示します。 デフォルトは sendemail.assume8bitEncoding の値です。 それが指定されていない場合、ASCII 以外のファイルが検出された場合にプロンプトが表示されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 43,
                'git_option' => '--compose-encoding=<encoding>',
                'description' => '作成メッセージのエンコーディングを指定します。 デフォルトは sendemail.composeencoding の値です。 それが指定されていない場合、UTF-8 が想定されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 43,
                'git_option' => '--transfer-encoding=(7bit|8bit|quoted-printable|base64|auto)',
                'description' => 'SMTP 経由でメッセージを送信するために使用する転送エンコーディングを指定します。 7bit は非 ASCII メッセージに遭遇すると失敗します。 quoted-printable は、キャリッジ リターンを含むファイルがリポジトリに含まれている場合に便利ですが、生のパッチ メール ファイル (MUA から保存されたもの) を手動で検査するのがはるかに困難になります。 base64 はさらに確実ですが、さらに不透明です。 auto は可能な場合は 8 ビットを使用し、それ以外の場合は quoted-printable を使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 43,
                'git_option' => '--xmailer',
                'description' => '「X-Mailer:」ヘッダーを追加 (または追加しないように) します。 デフォルトではヘッダーが追加されますが、sendemail.xmailer 構成変数を false に設定することでオフにすることができます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 43,
                'git_option' => '--envelope-sender=<address>',
                'description' => '電子メールの送信に使用されるエンベロープ送信者を指定します。 これは、デフォルトのアドレスがリストに登録されているアドレスでない場合に便利です。 From アドレスを使用するには、値を「auto」に設定します。 sendmail バイナリーを使用する場合は、-f パラメーターに対する適切な特権が必要です。 デフォルトは sendemail.envelopeSender 構成変数の値です。 それが指定されていない場合、エンベロープ送信者の選択は MTA に委ねられます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 43,
                'git_option' => '--sendmail-cmd=<command>',
                'description' => 'メールを送信するために実行するコマンドを指定します。 コマンドは sendmail に似ている必要があります。 具体的には、-i オプションをサポートする必要があります。 コマンドは、必要に応じてシェルで実行されます。 デフォルトは sendemail.sendmailcmd の値です。 指定されていない場合、および --smtp-server も指定されていない場合、git-send-email は /usr/sbin、/usr/lib、および $PATH で sendmail を検索します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 43,
                'git_option' => '--smtp-encryption=<encryption>',
                'description' => 'SMTP 接続の暗号化を開始する方法を指定します。 有効な値は ssl と tls です。 他の値はプレーン (暗号化されていない) SMTP に戻り、デフォルトはポート 25 になります。名前に関係なく、両方の値は同じ新しいバージョンの TLS を使用しますが、歴史的な理由からこれらの名前が付けられています。 ssl は、デフォルトでポート 465 を使用する「暗黙の」暗号化 (SMTPS と呼ばれることもあります) を指します。 tls は、デフォルトでポート 25 を使用する「明示的な」暗号化 (STARTTLS とも呼ばれます) を指します。 デフォルト以外のポートが SMTP サーバーによって使用される場合があります。 一般的に見られる tls および暗号化されていない代替ポートは 587 です。プロバイダーのドキュメントまたはサーバー構成を確認して、独自のケースを確認する必要があります。 デフォルトは sendemail.smtpEncryption の値です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 43,
                'git_option' => '--smtp-domain=<FQDN>',
                'description' => 'HELO/EHLO コマンドで使用される完全修飾ドメイン名 (FQDN) を SMTP サーバーに指定します。 一部のサーバーでは、FQDN が IP アドレスと一致する必要があります。 設定されていない場合、git send-email は FQDN を自動的に決定しようとします。 デフォルトは sendemail.smtpDomain の値です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 43,
                'git_option' => '--smtp-auth=<mechanisms>',
                'description' => '許可された SMTP-AUTH メカニズムの空白で区切られたリスト。 この設定は、リストされたメカニズムのみを強制的に使用します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 43,
                'git_option' => '--smtp-pass[=<password>]',
                'description' => 'SMTP-AUTH のパスワード。 引数はオプションです。引数が指定されていない場合、空の文字列がパスワードとして使用されます。 デフォルトは sendemail.smtpPass の値ですが、 --smtp-pass は常にこの値を上書きします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 43,
                'git_option' => '--no-smtp-auth',
                'description' => 'SMTP 認証を無効にします。 --smtp-auth=none の省略形',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
