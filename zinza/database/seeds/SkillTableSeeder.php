<?php

use Illuminate\Database\Seeder;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skill')->delete();
        $date= date('Y/m/d h:i');
        DB::table('skill')->insert([
            'cv_id'=>1,
            'skill_name'=>'lập trình c,c++ thành thạo',
            'number_year'=>'1 năm',
            'description'=>'hshj',
            'skill_type'=>'cứng',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('skill')->insert([
            'cv_id'=>2,
            'skill_name'=>'lập trình java thành thạo',
            'number_year'=>'1 năm',
            'description'=>'hshj',
            'skill_type'=>'cứng',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('skill')->insert([
            'cv_id'=>3,
            'skill_name'=>'lập trình sql thành thạo',
            'number_year'=>'1 năm',
            'description'=>'hshj',
            'skill_type'=>'cứng',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('skill')->insert([
            'cv_id'=>4,
            'skill_name'=>'kĩ năng thuyết trình tốt ',
            'number_year'=>'1 năm',
            'description'=>'hshj',
            'skill_type'=>'mềm',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('skill')->insert([
            'cv_id'=>5,
            'skill_name'=>'làm việc nhóm tốt',
            'number_year'=>'1 năm',
            'description'=>'hshj',
            'skill_type'=>'mềm',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
    }
}
