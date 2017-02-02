<?php

use Illuminate\Database\Seeder;

class ActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activity')->delete();
        $date= date('Y/m/d h:i');
        DB::table('activity')->insert([
            'cv_id'=>1,
            'activity_name'=>'tham gia tiếp sức mùa thi',
            'position'=>'thành viên',
            'description'=>'hsjkjkj',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('activity')->insert([
            'cv_id'=>2,
            'activity_name'=>'Tham gia văn nghệ ở trường',
            'position'=>'Trưởng nhóm',
            'description'=>'jekkek',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('activity')->insert([
            'cv_id'=>3,
            'activity_name'=>'tham gia tình nguyện ở vùng núi cao',
            'position'=>'Đội phó',
            'description'=>'jjejek',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('activity')->insert([
            'cv_id'=>4,
            'activity_name'=>'tham gia thi plimpic  tin học',
            'position'=>'sinh viên',
            'description'=>'được giải nhất',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('activity')->insert([
            'cv_id'=>5,
            'activity_name'=>'tham  gia cuộc thi do samsung tổ chức',
            'position'=>'ứng viên',
            'description'=>'được giải đặc biệt',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
    }
}
