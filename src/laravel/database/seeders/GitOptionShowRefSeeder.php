<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionShowRefSeeder extends Seeder
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
                'git_id' => 69,
                'git_option' => '--head',
                'description' => '通常は除外される場合でも、HEAD 参照を表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 69,
                'git_option' => '--heads',
                'description' => 'それぞれ「refs/heads」と「refs/tags」に制限します。 これらのオプションは相互に排他的ではありません。 両方を指定すると、「refs/heads」と「refs/tags」に格納された参照が表示されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 69,
                'git_option' => '-d',
                'description' => 'タグもオブジェクト ID に逆参照します。 「^{}」が追加されて表示されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 69,
                'git_option' => '-s',
                'description' => '参照名ではなく、SHA-1 ハッシュのみを表示します。 --dereference と組み合わせると、逆参照されたタグは引き続き SHA-1 の後に表示されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 69,
                'git_option' => '--verify',
                'description' => '正確な参照パスを要求することで、より厳密な参照チェックを有効にします。 --quiet が指定されていない場合は、エラー コード 1 を返すだけでなく、エラー メッセージも出力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 69,
                'git_option' => '--abbrev[=<n>]',
                'description' => 'オブジェクト名を省略します。 --hash を使用する場合、 --hash --abbrev; と指定する必要はありません。 --hash=n で十分です。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 69,
                'git_option' => '-q',
                'description' => '結果を stdout に出力しません。 --verify と組み合わせると、参照が存在するかどうかを黙ってチェックするために使用できます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 69,
                'git_option' => '--exclude-existing[=<pattern>]',
                'description' => 'git show-ref を、"^(?:<anything>\s)?<refname>(?:\^{})?$" の形式の stdin から参照を読み取り、それぞれに対して次のアクションを実行するフィルターとして機能させる : (1) 行末の「^{}」があれば削除します。 (2) pattern が提供され、refname と一致しない場合は無視します。 (3) refname が整形式の refname でない場合は警告し、スキップします。 (4) refname がローカルリポジトリに存在する ref である場合は無視します。 (5) それ以外の場合は行を出力します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 69,
                'git_option' => '<pattern>…​',
                'description' => '1 つ以上のパターンに一致する参照を表示します。 パターンはフル ネームの末尾から照合され、完全な部分のみが照合されます。 master は、refs/heads/master、refs/remotes/origin/master、refs/tags/jedi/master には一致しますが、refs/heads/mymaster または refs/remotes/master/jedi には一致しません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
