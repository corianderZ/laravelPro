<?php

use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('test')->insert([[
        //     'name'=>'xiaoming',
        //     'password'=>'123456'
        // ],[
        //     'name'=>'xiaohong',
        //     'password'=>'123456'
        // ]]);
        DB::table('test')->where('id','=',2)->update(['name'=>'xiaolu']);
    }
}
