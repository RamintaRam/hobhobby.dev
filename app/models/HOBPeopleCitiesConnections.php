<?php namespace App\models;



class HOBPeopleCitiesConnections extends CoreModel
{
    protected $table = 'hob_people_cities_connections';

    protected $fillable = ['id', 'people_id', 'hobby_id'];

}

