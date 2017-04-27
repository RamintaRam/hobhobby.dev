<?php namespace App\models;


class HOBPeople extends CoreModel
{
    protected $table = 'hob_cities';

    protected $fillable = ['id', 'name', 'email', 'age', 'gender'];

}

