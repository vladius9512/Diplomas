<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Bonfire
 *
 * An open source project to allow developers to jumpstart their development of
 * CodeIgniter applications.
 *
 * @package   Bonfire
 * @author    Bonfire Dev Team
 * @copyright Copyright (c) 2011 - 2014, Bonfire Dev Team
 * @license   http://opensource.org/licenses/MIT The MIT License
 * @link      http://cibonfire.com
 * @since     Version 1.0
 * @filesource
 */

/**
 * Home controller
 *
 * The base controller which displays the homepage of the Bonfire site.
 *
 * @package    Bonfire
 * @subpackage Controllers
 * @category   Controllers
 * @author     Bonfire Dev Team
 * @link       http://guides.cibonfire.com/helpers/file_helpers.html
 *
 */
class Home extends Front_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('application');
        $this->load->library('Template');
        $this->load->library('Assets');
        $this->lang->load('application');
        $this->load->library('events');

        $this->load->library('installer_lib');
        if (! $this->installer_lib->is_installed()) {
            $ci =& get_instance();
            $ci->hooks->enabled = false;
            redirect('install');
        }

        $this->requested_page = isset( $_SESSION['requested_page'] ) ? $_SESSION['requested_page'] : null;
    }
    public function index()
    {
        $this->load->library('users/auth');
        if ( $this->auth->is_logged_in()) {
            $this->load->model('users/user_model');
            $this->load->library('users/auth');
            $this->lang->load( 'users/users' );
            if( $this->auth->restrict() )
            {
                $this->set_current_user();
            }
        } else {
            $this->home__set_current_user();
        }
        Template::render();
    }
    protected function home__set_current_user()
    {
        if (class_exists('Auth')) {

            if ($this->auth->is_logged_in()) 
            {
                $this->current_user = clone $this->auth->user();

                $this->current_user->user_img = gravatar_link($this->current_user->email, 22, $this->current_user->email, "{$this->current_user->email} Profile");

                if (isset($this->current_user->language)) {
                    $this->config->set_item('language', $this->current_user->language);
                }
            } else {
                    $this->current_user = null;
            }
            if ( !class_exists('Template') ) 
            {
                $this->load->library('Template');
            }
            Template::set('current_user', $this->current_user);
        }
    }
    public function about()
    {
        Template::render();
    }
}
/* end ./application/controllers/home.php */
