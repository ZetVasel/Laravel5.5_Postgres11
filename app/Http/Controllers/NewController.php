<?php

namespace App\Http\Controllers;
use App\Actors;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;


class NewController extends BaseController
{

    public function index(){

        $query = DB::table('actor')->paginate(10);

        //$query = Actors::all(); // Вывести всех

        //$query = Actors::take(100)->paginate (10); // вывод с пагинацией

        //$query = Actors::where('actor_id', '22')->get(); // выбор конкретной записи

        //return $query;
        $category = DB::table('category')->paginate(10);

        return view('new', compact( [$query,'query'],[$category, 'category']));
    }

    public function film(){
        //$category = DB::table('category')->paginate(10);


        //return view('new', compact($category, 'category'));
    }

}
