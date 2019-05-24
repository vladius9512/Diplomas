<?php defined('BASEPATH') || exit('No direct script access allowed');

class diplomas_table__diplomas_config__model extends MY_Model
{
    public $table_name	= 'diplomas_config';
    public $key		= 'Diploma_Config_Id';

    protected $log_user = true;

    protected $date_format = 'datetime';

    protected $skip_validation = true;

    public function __construct()
    {
        parent::__construct();
    }
}
