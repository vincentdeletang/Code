<?php
use Illuminate\Database\Seeder;
class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_tag')->insert(
            [
                [
                    'post_id' => rand(1,10),
                    'tag_id' => rand(1,5)
                ],
                [
                    'post_id' => rand(1,10),
                    'tag_id' => rand(1,5)
                ],
                [
                    'post_id' => rand(1,10),
                    'tag_id' => rand(1,5)
                ],
                [
                    'post_id' => rand(1,10),
                    'tag_id' => rand(1,5)
                ],
                [
                    'post_id' => rand(1,10),
                    'tag_id' => rand(1,5)
                ],
            ]
        );
    }
}
