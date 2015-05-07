<?php

/**
 * Created by PhpStorm.
 * User: Lemonka
 * Date: 16.04.2015
 * Time: 19:54
 */
class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        /*
         * Create admin
         */
        $user = new User();
        $user->email = 'lerayepishko@gmail.com';
        $user->password = Hash::make('t0pazmpw');
        $user->username = 'Lemonka';
        $user->isAdmin = true;
        $user->isActive = true;
        $user->activationCode = '';
        $user->remember_token = self::generateRandomsString(100);
        $user->save();
        /*
         * Creates users
         */
        $count = rand(1, 10);

        for ($i = 0; $i < $count; $i++) {
            $user = new User();
            $user->email = 'user_' . $i . '@mysite.dev';
            $user->password = Hash::make('12345678');
            $user->username = 'user_' . $i;
            $user->isAdmin = false;
            $user->isActive = rand(0, 1);
            $user->activationCode = '';
            $user->remember_token = self::generateRandomsString(100);
            $user->save();
    }

    }

    /**
     * Generate random string
     *
     * @param int $length
     * @return string
     */
    private  function generateRandomsString($length = 10) {
        $characters = '1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0;$i<$length;$i++){
            $randomString .=$characters[rand(0, $charactersLength-1)];
        }
          return $randomString;
    }
}