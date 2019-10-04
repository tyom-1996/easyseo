<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(Request $request)
    {

        $category = Category::where('main_cat_id','=','2')->get();

        $arr_cat = [];

        foreach ($category as $row) {

            if(empty($arr_cat[$row['parent_cat_id']])) {
                $arr_cat[$row['parent_cat_id']] = array();
            }
            $arr_cat[$row['parent_cat_id']][] = [
                'id' => $row->id,
                'title' => $row->cat_name_en,
                'parent_id' => $row->parent_cat_id,
                'main_id' => $row->main_cat_id,
            ];

        }


//        print "<pre>";
//        print_r($arr_cat);
        return response()->json(['category' => $arr_cat]);



//       $this->view_cat($arr_cat);
    }


   public function view_cat($arr,$parent_id = 0)
   {
       //Условия выхода из рекурсии
       if(empty($arr[$parent_id])) {
           return;
       }
       echo '<ul>';
       //перебираем в цикле массив и выводим на экран
       for($i = 0; $i < count($arr[$parent_id]);$i++) {
           echo '<li><a href="?category_id='.$arr[$parent_id][$i]['id'].'&parent_id='.$parent_id.'">'.$arr[$parent_id][$i]['title'].'</a>';
           //рекурсия - проверяем нет ли дочерних категорий
           $this->view_cat($arr,$arr[$parent_id][$i]['id']);
           echo '</li>';
       }
       echo '</ul>';

   }



   public function get_cat()
   {
       $category = Category::where('main_cat_id','=','2')->get();
       $arr_cat = [];

       foreach ($category as $row) {
           if(empty($arr_cat[$row['parent_cat_id']])) {
               $arr_cat[$row['parent_cat_id']] = array();
           }
           $arr_cat[$row['parent_cat_id']][] = [
               'id' => $row->id,
               'parent_id' => $row->parent_cat_id,
               'main_id' => $row->main_cat_id,
           ];
       }

   }







}
