<?php

use Phinx\Seed\AbstractSeed;

class AdminsSeeder extends AbstractSeed
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
        $data = [
            'name'   => 'admin',
            'password'   => sha1('admin'),
            'email'      => 'hejunwei@gmail.com',
            'role_id'      => 1,
            'created'    => date('Y-m-d H:i:s'),];
        $this->insert('admins', $data);
    }
}
