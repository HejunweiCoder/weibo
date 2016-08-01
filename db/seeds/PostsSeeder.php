<?php

use Phinx\Seed\AbstractSeed;

class PostsSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data[] = [
            'user_id' => 1,
            'title'   => '我是标题',
            'content' => '哈哈哈哈哈',
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'user_id' => 2,
            'title'   => '我是第二个人',
            'content' => '测试哈哈哈',
            'created' => date('Y-m-d H:i:s'),
        ];
        $this->insert('posts', $data);

        $this->insert('tags',[
            ['name'=>'玄幻','created' => date('Y-m-d H:i:s'),],
            ['name'=>'黑客','created' => date('Y-m-d H:i:s'),],
        ]);

        $this->insert('post_tags',[
            ['tag_id'=>1,'post_id'=>1,'created' => date('Y-m-d H:i:s'),],
            ['tag_id'=>2,'post_id'=>1,'created' => date('Y-m-d H:i:s'),],
            ['tag_id'=>2,'post_id'=>2,'created' => date('Y-m-d H:i:s'),],
        ]);
    }
}
