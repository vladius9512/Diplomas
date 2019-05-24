<?php defined('BASEPATH') || exit('No direct script access allowed');

class AGSIS_Model extends BF_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database( 'agsis', TRUE );
    }
}   // by Victor Afteni: victor.afteni@ontotech.ro