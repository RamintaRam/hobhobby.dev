<?php namespace App\models;



class HOBPeopleCitiesConnections extends CoreModel
{
    protected $table = 'hob_cities';

    protected $fillable = ['id', 'people_id', 'hobby_id'];

}

