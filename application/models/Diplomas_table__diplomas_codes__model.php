<?php defined('BASEPATH') || exit('No direct script access allowed');

class diplomas_table__diplomas_codes__model extends MY_Model
{
    public $table_name	= 'diplomas_codes';
    public $key		= 'Diploma_Code_Value';

    protected $log_user = true;

    protected $date_format = 'datetime';

    protected $skip_validation = true;

    public function __construct()
    {
        parent::__construct();
    }
}
