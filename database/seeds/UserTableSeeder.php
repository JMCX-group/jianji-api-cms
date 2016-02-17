<?php
/**
 * Created by PhpStorm.
 * User: lyx
 * Date: 16/2/17
 * Time: 下午12:05
 */
use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        for($i=0; $i <10 ; $i++){
            User::create([
                'nickname' => 'TestUser_'.$i,
                'phone' => '1861234567'.$i,
                'password' => '123',
                'time' => date("Y-m-d H:i:s")
            ]);
        }
    }
}