<?php

use Phinx\Seed\AbstractSeed;

class TableSeeder extends AbstractSeed
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
        //users
        $faker = Faker\Factory::create();
        $users[] = [
            'username'   => 'hejunwei',
            'password'   => sha1(123456),
            'email'      => 'hejunweimake@gmail.com',
            'gender'      => '男',
            'introduction'  => $faker->paragraph,
            'created'    => date('Y-m-d H:i:s'),
        ];
        for ($i = 0; $i < 100; $i++) {
            $users[] = [
                'username'   => $faker->userName,
                'password'   => sha1(123456),
                'email'      => $faker->email,
                'gender'      => $faker->randomElement(['男','女']),
                'introduction'  => $faker->paragraph,
                'created'    => date('Y-m-d H:i:s'),
            ];
        }

        $this->insert('users', $users);

        //roles
//        $data = [
//            'name'        => '超级管理员',
//            'description' => '拥有所有权限',
//            'created'     => date('Y-m-d H:i:s'),];
//        $this->insert('roles', $data);

        //posts
        $posts = [];
        for ($i = 0; $i < 100; $i++) {
            $posts[] = [
                'user_id' => $faker->numberBetween(1,50),
                'title'   => $faker->sentence,
                'content' => $faker->paragraph,
                'created' => date('Y-m-d H:i:s'),
            ];
        }
        $this->insert('posts', $posts);

        //tags
        $this->insert('tags', [
            ['name' => '玄幻', 'created' => date('Y-m-d H:i:s'),],
            ['name' => '黑客', 'created' => date('Y-m-d H:i:s'),],
        ]);

        //post_tags
        $this->insert('post_tags', [
            ['tag_id' => 1, 'post_id' => 1, 'created' => date('Y-m-d H:i:s'),],
            ['tag_id' => 2, 'post_id' => 1, 'created' => date('Y-m-d H:i:s'),],
            ['tag_id' => 2, 'post_id' => 2, 'created' => date('Y-m-d H:i:s'),],
        ]);

        //admins
        $admins = [
            'name'     => 'admin',
            'password' => sha1('admin'),
            'email'    => 'hejunwei@gmail.com',
            'created'  => date('Y-m-d H:i:s'),];
        $this->insert('admins', $admins);

    }
}
