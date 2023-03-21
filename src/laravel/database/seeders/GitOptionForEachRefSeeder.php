<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GitOptionForEachRefSeeder extends Seeder
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
                'git_id' => 61,
                'git_option' => '<pattern>…​',
                'description' => '1 つ以上のパターンが指定された場合、fnmatch(3) を使用して、または文字どおりに、少なくとも 1 つのパターンと一致する ref のみが表示されます。後者の場合、完全に一致するか、最初からスラッシュまで一致します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 61,
                'git_option' => '--count=<count>',
                'description' => 'デフォルトでは、コマンドは <pattern> に一致するすべての参照を表示します。 このオプションは、多くの参照を表示した後に停止します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 61,
                'git_option' => '--sort=<key>',
                'description' => 'ソートするフィールド名。 プレフィックス - 値の降順でソートします。 指定しない場合、refname が使用されます。 --sort=<key> オプションを複数回使用できます。その場合、最後のキーが主キーになります。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 61,
                'git_option' => '--format=<format>',
                'description' => '表示されている ref とそれが指すオブジェクトから %(fieldname) を補間する文字列。 fieldname の前にアスタリスク (*) が付いていて、ref がタグ オブジェクトを指している場合は、(タグ オブジェクトのフィールドではなく) タグ オブジェクトが参照するオブジェクトのフィールドの値を使用します。 指定されていない場合、<format> はデフォルトで %(objectname) SPC %(objecttype) TAB %(refname) になります。 また、%% を % に補間し、%xx (xx は 16 進数) を 16 進コード xx の文字に補間します。 たとえば、%00 は \0 (NUL) に、%09 は \t (TAB) に、%0a は \n (LF) に補間されます。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 61,
                'git_option' => '--color[=<when>]',
                'description' => '--format オプションで指定されたすべての色を尊重します。 <when> フィールドは、always、never、または auto のいずれかでなければなりません (<when> が存在しない場合、always が指定されているかのように動作します)。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 61,
                'git_option' => '--shell',
                'description' => '指定された場合、%(fieldname) プレースホルダーを置換する文字列は、指定されたホスト言語に適した文字列リテラルとして引用されます。 これは、直接「評価」できるスクリプトレットを作成するためのものです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 61,
                'git_option' => '--points-at=<object>',
                'description' => '指定されたオブジェクトを指す参照のみをリストします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 61,
                'git_option' => '--merged[=<object>]',
                'description' => '指定されたコミット (指定されていない場合は HEAD) からヒントに到達できる参照のみを一覧表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 61,
                'git_option' => '--no-merged[=<object>]',
                'description' => '指定されたコミット (指定されていない場合は HEAD) からヒントに到達できない参照のみを一覧表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 61,
                'git_option' => '--contains[=<object>]',
                'description' => '指定されたコミット (指定されていない場合は HEAD) を含む参照のみを一覧表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 61,
                'git_option' => '--no-contains[=<object>]',
                'description' => '指定されたコミット (指定されていない場合は HEAD) を含まない参照のみを一覧表示します。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'git_id' => 61,
                'git_option' => '--ignore-case',
                'description' => '参照のソートとフィルタリングでは、大文字と小文字が区別されません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
