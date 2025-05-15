<?php


class Gruppa extends Table
{
    public $gruppa_id = 0;
    public $name = '';
    public $special_id = 0;
    public $date_begin = '1990-05-15';
    public $date_end = null;
    public function validate()
    {
        return false;
    }
}