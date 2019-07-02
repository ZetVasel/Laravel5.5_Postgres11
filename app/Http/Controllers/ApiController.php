<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Resources\Actor as ActorResource;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page = $request->has('page') ? $request->get('page') : 1;
        $limit = $request->has('limit') ? $request->get('limit') : 10;

        if(request()->has('name')){
            $one = DB::table('film_actor')->join('actor', 'film_actor.actor_id', '=', 'actor.actor_id')
                ->join('film', 'film_actor.film_id', '=', 'film.film_id')
                ->join('category', 'film_actor.actor_id', '=', 'category.category_id')
                ->where('name', request('name'))->paginate($limit)->appends('name', request('name'));
        }else {
            $one = DB::table('film_actor')
                ->join('actor', 'film_actor.actor_id', '=', 'actor.actor_id')
                ->join('film', 'film_actor.film_id', '=', 'film.film_id')
                ->join('category', 'film_actor.actor_id', '=', 'category.category_id')
                ->select('film_actor.*', 'actor.first_name', 'actor.last_name', 'film.title', 'category.name')
                ->orderBy('actor_id', 'DESC')
                ->limit($limit)
                ->offset(($page - 1) * $limit)
                ->paginate($limit);
        }


        //return ActorResource::collection($one); // for postman testing
        return view('actor', compact('one'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
