<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ListContentParse;
use App\cars;

class GetListContent extends Controller
{
    public function getAllAuto()
    {

        $i         = 0;
        $lang      = 'en';
        $car_info  = [];
        $next_page = '';

        do{
            if ($i == 0) {
                $url = 'https://www.list.am/category/23/';
                $pageination_class = '.dl > .dlf > a';
            } else {
                $url = 'https://www.list.am'.$next_page;
                $pageination_class = '.dl > .dlf > a:eq(1)';
            }

            $content = ListContentParse::get_contents($url);
            $next_page =  $content->find($pageination_class)->attr('href');

            foreach ($content->find('#contentr > .dl > .gl > a') as $auto)
            {
                $info = ListContentParse::get_car_info($auto,$lang);
                $car_info[] = $info;

                $newUser = cars::updateOrCreate( ['ads_id' =>$info['ads_id']],$info);

            }

            $i++;

//} while(!empty($next_page));
        } while($i < 1);


    }
}
