<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
          'name'=>'株式会社サンプルデータ1',
          'status'=>'一次面接突破',
          'goodpoint1'=>'若い企業',
          'goodpoint2'=>'立地',
          'goodpoint3'=>'モダンな開発環境',
          'badpoint1'=>'給料が安い',
          'badpoint2'=>'退職金がない',
          'badpoint3'=>'残業が多そう',
          'reason'=>'スタートアップベンチャーで企業と共に成長できる',
          'platform'=>'doda',
          'myvalue'=>"前職での開発経験(PHP、JavaScript)",
          'address'=>'神奈川県川崎市宮前区犬蔵1-40-20',
          'url'=>'https://www.google.com/',
          'meetingday'=>Carbon::now(),
          'created_at'=>Carbon::now(),
          'updated_at'=>Carbon::now(),
        ];
      DB::table('companies')->insert($param);

      $param = [
          'name'=>'株式会社サンプルデータ2',
          'status'=>'二次面接突破',
          'goodpoint1'=>'金',
          'goodpoint2'=>'金',
          'goodpoint3'=>'金',
          'badpoint1'=>'残業',
          'badpoint2'=>'残業',
          'badpoint3'=>'残業',
          'reason'=>'大企業で安定した高収入を得られる',
          'platform'=>'doda',
          'myvalue'=>"前職での開発経験(PHP、JavaScript)",
          'address'=>'神奈川県川崎市宮前区犬蔵1-40-20',
          'url'=>'https://www.google.com/',
          'meetingday'=>Carbon::now(),
          'created_at'=>Carbon::now(),
          'updated_at'=>Carbon::now(),
        ];
      DB::table('companies')->insert($param);


      $param = [
          'name'=>'株式会社サンプルデータ3',
          'status'=>'二次面接突破',
          'goodpoint1'=>'定時上がり100%',
          'goodpoint2'=>'有給',
          'goodpoint3'=>'賞与',
          'badpoint1'=>'残業',
          'badpoint2'=>'立地',
          'badpoint3'=>'転勤有り',
          'reason'=>'福利厚生がしっかりしてろう',
          'platform'=>'doda',
          'myvalue'=>"前職での開発経験(PHP、JavaScript)",
          'address'=>'神奈川県川崎市宮前区犬蔵1-40-20',
          'url'=>'https://www.google.com/',
          'meetingday'=>Carbon::now(),
          'created_at'=>Carbon::now(),
          'updated_at'=>Carbon::now(),
        ];
      DB::table('companies')->insert($param);
    }
}
