<?php namespace App\models;


class HOBPeople extends CoreModel
{
    protected $table = 'hob_people';

    protected $fillable = ['id', 'name', 'email', 'age', 'gender', 'city_id'];

}

