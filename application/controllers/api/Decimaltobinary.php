<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

// use namespace
use Restserver\Libraries\REST_Controller;

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Decimaltobinary extends REST_Controller {

    function __construct($config = 'rest')
    {
        // Construct the parent class
        parent::__construct($config);

    }
	public function index_get()
	{   
		echo "GET_request";
	}   

	public function index_post()
	{
		
		$dec = $this->post("input");
		$binStr = '';
		while ($dec>=1){
			$bin = $dec % 2;
			$dec = round($dec/2, 0, PHP_ROUND_HALF_DOWN);
			$binStr .= $bin;
		}
		$binStr = strrev($binStr);
		echo $this->response( $binStr,200);
	}

	public function index_put()
	{
		echo "PUT_request";
	}

	public function index_patch()
	{
		echo "PATCH_request";
	}

	public function index_delete()
	{
		echo "DELETE_request";
	}
}
