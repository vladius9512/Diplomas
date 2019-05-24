<?php defined('BASEPATH') || exit('No direct script access allowed');
class agsis_view_absolvire_fds_probeabsolventi_model extends AGSIS_Model
{
    public $table_name	= 'View_Absolvire_FDS_ProbeAbsolventi';
    public $key		= 'ID_Facultate';
    public $date_format	= 'datetime';

    protected $log_user = true;

    public function __construct()
    {
        parent::__construct();
    }
}