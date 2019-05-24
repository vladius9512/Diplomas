<?php defined('BASEPATH') || exit('No direct script access allowed');

class agsis_table__tipcicluinvatamant__model extends AGSIS_Model
{
    public $table_name	= 'TipCicluInvatamant';
    public $key		= 'ID_TipCiclu';
    public $date_format	= 'datetime';

    protected $log_user = true;

    public function __construct()
    {
        parent::__construct();
    }
}