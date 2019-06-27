<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $guarded = [];

    public static function destroy( $ids ){

        $query = self::whereIn( 'id', $ids )->get();

        parent::destroy( $ids );
    }
}
