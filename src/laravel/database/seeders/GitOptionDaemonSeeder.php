<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionDaemonSeeder extends Seeder
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
                'git_id' => 54,
                'git_option' => '--strict-paths',
                'description' => 'パスを正確に一致させ (つまり、実際のパスが "/foo/repo.git" または "/foo/repo/.git" である場合に "/foo/repo" を許可しない)、ユーザー相対パスを実行しないでください。 このオプションが有効で、ディレクトリ引数が指定されていない場合、git デーモンは起動を拒否します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 54,
                'git_option' => '--base-path=<path>',
                'description' => '指定されたパスを基準にして、すべてのパス リクエストを再マップします。 これは一種の「Git ルート」です。example.com で --base-path=/srv/git を指定して git デーモンを実行した場合、後で git://example.com/hello.git をプルしようとすると、git デーモンはパスを /srv/git/hello.git として解釈します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 54,
                'git_option' => '--base-path-relaxed',
                'description' => '--base-path が有効で、リポジトリのルックアップが失敗した場合、このオプションを使用すると、git デーモンはベース パスのプレフィックスを付けずにルックアップを試みます。 これは、古いパスを引き続き許可しながら、 --base-path の使用に切り替えるのに役立ちます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 54,
                'git_option' => '--interpolated-path=<pathtemplate>',
                'description' => '仮想ホスティングをサポートするために、補間パス テンプレートを使用して代替パスを動的に構築できます。 テンプレートは、クライアントによって提供されるがすべて小文字に変換されるターゲット ホスト名の %H、標準ホスト名の %CH、サーバーの IP アドレスの %IP、ポート番号の %P、および絶対パスの %D をサポートします。 名前付きリポジトリ。 補間の後、パスはディレクトリ リストに対して検証されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 54,
                'git_option' => '--export-all',
                'description' => 'git-daemon-export-ok ファイルがない場合でも、Git リポジトリのように見えるすべてのディレクトリ (objects と refs サブディレクトリがある) からのプルを許可します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 54,
                'git_option' => '-inetd',
                'description' => 'サーバーを inetd サービスとして実行します。 --syslog を意味します (--log-destination= でオーバーライドされる場合があります)。 --detach、--port、--listen、--user、および --group オプションと互換性がありません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 54,
                'git_option' => '--listen=<host_or_ipaddr>',
                'description' => '特定の IP アドレスまたはホスト名でリッスンします。 サポートされている場合、IP アドレスは IPv4 アドレスまたは IPv6 アドレスのいずれかになります。 IPv6 がサポートされていない場合、 --listen=hostname もサポートされていないため、 --listen には IPv4 アドレスを指定する必要があります。 複数回与えることができます。 --inetd オプションと互換性がありません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 54,
                'git_option' => '--port=<n>',
                'description' => '代替ポートでリッスンします。 --inetd オプションと互換性がありません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 54,
                'git_option' => '--init-timeout=<n>',
                'description' => '接続が確立されてからクライアント要求が受信されるまでのタイムアウト (秒単位) (基本的に即時であるため、通常はかなり低い値)。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 54,
                'git_option' => '--timeout=<n>',
                'description' => '特定のクライアント サブリクエストのタイムアウト (秒単位)。 これには、サーバーがサブリクエストを処理するのにかかる時間と、次のクライアントのリクエストを待つのに費やされる時間が含まれます.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 54,
                'git_option' => '--max-connections=<n>',
                'description' => '同時クライアントの最大数。デフォルトは 32 です。制限なしの場合はゼロに設定します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 54,
                'git_option' => '--syslog',
                'description' => '--log-destination=syslog の略。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 54,
                'git_option' => '--log-destination=<destination>',
                'description' => '指定された宛先にログ メッセージを送信します。 このオプションは --verbose を意味しないため、デフォルトではエラー状態のみがログに記録されることに注意してください。 <destination> は次のいずれかである必要があります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 54,
                'git_option' => '--user-path',
                'description' => 'リクエストで ~user 表記を使用できるようにします。 パラメータなしで指定した場合、git://host/~alice/foo へのリクエストは、ユーザー alice のホーム ディレクトリにある foo リポジトリへのアクセス リクエストと見なされます。 --user-path=path が指定されている場合、同じリクエストは、ユーザー alice のホーム ディレクトリにある path/foo リポジトリへのアクセス リクエストと見なされます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 54,
                'git_option' => '--verbose',
                'description' => '着信接続と要求されたファイルに関する詳細をログに記録します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 54,
                'git_option' => '--reuseaddr',
                'description' => 'リッスン ソケットをバインドするときに SO_REUSEADDR を使用します。 これにより、古い接続がタイムアウトするのを待たずにサーバーを再起動できます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 54,
                'git_option' => '--detach',
                'description' => 'シェルから切り離します。 --syslog を意味します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 54,
                'git_option' => '--pid-file=<file>',
                'description' => 'プロセス ID をファイルに保存します。 デーモンが --inetd の下で実行されている場合は無視されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 54,
                'git_option' => '--user=<user>',
                'description' => 'サービス ループに入る前に、デーモンの uid と gid を変更します。 --user のみが --group なしで指定された場合、ユーザーのプライマリ グループ ID が使用されます。 オプションの値は getpwnam(3) と getgrnam(3) に与えられ、数値 ID はサポートされていません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 54,
                'git_option' => '--enable=<service>',
                'description' => 'デフォルトでサイト全体のサービスを有効/無効にします。 サイト全体で無効になっているサービスは、上書き可能とマークされていて、リポジトリが構成アイテムでサービスを有効にしている場合、リポジトリごとに有効にできることに注意してください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
