<?php

declare(strict_types=1);

namespace Tests\Commands\Upgrade\V5_5_10_0\Seeds;

use Illuminate\Database\Seeder;

class SiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sites')->delete();
        \DB::table('sites')->insert([
            0 => [
                'id'            => 1,
                'oauth_user_id' => 1,
                'name'          => '白俊遥博客',
                'description'   => '白俊遥的个人博客',
                'url'           => 'https://baijunyao.com',
                'audit'         => 1,
                'sort'          => 1,
                'created_at'    => '2018-11-15 20:35:12',
                'updated_at'    => '2018-11-15 20:35:12',
                'deleted_at'    => null,
            ],
        ]);
    }
}
