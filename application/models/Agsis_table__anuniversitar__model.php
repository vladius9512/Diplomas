<?php defined('BASEPATH') || exit('No direct script access allowed');

class agsis_table__anuniversitar__model extends AGSIS_Model
{
    public $table_name	= 'AnUniversitar';
    public $key		= 'ID_AnUniv';
    public $date_format	= 'datetime';

    protected $log_user = true;

    public function __construct()
    {
        parent::__construct();
    }
}