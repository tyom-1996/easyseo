<?php // Code within app\Helpers\ListContentParse.php

namespace App\Helpers;

require_once(dirname(__FILE__).'/phpQuery/phpQuery/phpQuery.php');


class ListContentParse extends \phpQuery
{


    public static function get_contents($url)
    {
        $file = file_get_contents($url);
        return self::newDocument($file);
    }

    public function car_id($auto)
    {
        $auto = pq($auto);
        return str_replace('/item/','',$auto->attr('href'));
    }

    public function get_car_photo($full_content_html)
    {
        $photo_style = $full_content_html['head']->find('style')->text();

        if(stristr($photo_style, '.pv .t div{background-image') !== FALSE) {

            $photos_arr = [];

            $links_r = strstr($photo_style, ')',true);
            $links_l = explode('?p=', $links_r);
            $links = explode('-',end($links_l));

            foreach ($links as $link)
            {
                $short_key = substr($link, -3);
                $photos_arr[] = "//s.list.am/f/$short_key/$link.jpg";
            }

            return $photos_arr;
        }
    }

    public function get_phone_number($id)
    {
        $phone_html = self::get_contents( 'https://www.list.am/?w=12&warn=0&i='.$id.'/' );

        $phone_content = $phone_html->find('.c > .phones')->html();

        return [
            'phone' => str_replace('tel:','',$phone_html->find('.c > .phones > a')->attr('href')),
            'phone_content' => !empty($phone_content) ? $phone_content : 'No phone number'
        ];
    }

    private function get_more_info($content)
    {
        $more_info = [];

        foreach ( $content->find('#pcontent > .vi > #attr > .c') as $c ){
            $more_i = pq($c);

            $label = str_replace(' ','_',trim(mb_strtolower($more_i->find('.t')->text()))); ;
            $value = $more_i->find('.i')->text();

            $more_info[$label] = $value;
        }
        return $more_info;
    }

    public static function get_car_info($auto,$lang)
    {
        $LCP = new ListContentParse();


        $car_id = $LCP->car_id($auto);
        $full_content_html = self::get_contents("https://www.list.am/$lang/item/$car_id/");
        $more_info = $LCP->get_more_info($full_content_html) ;

        $body_desc       = $full_content_html->find('#pcontent > .vi  > .body')->text();
        $created_at      = trim(str_replace('Дата:','',$full_content_html->find('#pcontent > .vi  > .footer > span:eq(1)')->text()));
        $updated_at      = trim(str_replace('Обновлено:','',$full_content_html->find('#pcontent > .vi  > .footer > span:eq(2)')->text()));

        $photos_arr = $LCP->get_car_photo($full_content_html) ;
        $phone = $LCP->get_phone_number($car_id);


        $car_info['ads_id']        = $car_id;
        $car_info['title']         = $full_content_html->find('#pcontent > .vi > .vit > .vih > h1')->text();
        $car_info['price']         = $full_content_html->find('#pcontent > .vi > .vit > .vih > #abar span.price')->text();
        $car_info['main_photo']    = $full_content_html->find('#pcontent > .vi > .vit > .pv > .p img')->attr('src');
        $car_info['photos']        = json_encode($photos_arr);
        $car_info['location']      = $full_content_html->find('#pcontent > .vi > .vit > .vih >  #abar > .loc > a')->text();

        $car_info['make']            =  isset($more_info['make'])  ? $more_info['make'] : 'No data';
        $car_info['model']           =  isset($more_info['model']) ? $more_info['model'] : 'No data';
        $car_info['body_type']       =  isset($more_info['body_type']) ? $more_info['body_type'] : 'No data';
        $car_info['year']            =  isset($more_info['year']) ? $more_info['year'] : 'No data';
        $car_info['mileage']         =  isset($more_info['mileage']) ? $more_info['mileage'] : 'No data';
        $car_info['engine_type']     =  isset($more_info['engine_type']) ? $more_info['engine_type'] : 'No data';
        $car_info['engine_size']     =  isset($more_info['engine_size']) ? $more_info['engine_size'] : 'No data';
        $car_info['transmission']    =  isset($more_info['transmission']) ? $more_info['transmission'] : 'No data';
        $car_info['steering_wheel']  =  isset($more_info['steering_wheel']) ? $more_info['steering_wheel'] : 'No data';
        $car_info['cleared_customs'] =  isset($more_info['cleared_customs']) ? $more_info['cleared_customs'] : 'No data';
        $car_info['drive_type']      =  isset($more_info['drive_type']) ? $more_info['drive_type'] : 'No data';
        $car_info['color']           =  isset($more_info['color']) ? $more_info['color'] : 'No data';

        $car_info['body_desc']     = str_replace("'","''", $body_desc );
        $car_info['lang']          = $lang;
        $car_info['created_at']    = $created_at;
        $car_info['updated_at']    = $updated_at;
        $car_info['phone']         = $phone['phone'];
        $car_info['phone_content'] = $phone['phone_content'];


        print "<pre>";
        print_r($car_info);

        return $car_info ;
    }




    public function d()
    {
        return 'd';
    }

    public static function t()
    {
        $ListContentParse = new ListContentParse();
        dd($ListContentParse->d());die;
    }

}