<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
    protected $table = 'actor';
    protected $guarded = [];

    public static function destroy( $ids ){

        $query = self::whereIn( 'id', $ids )->get();

        parent::destroy( $ids );
    }
}
