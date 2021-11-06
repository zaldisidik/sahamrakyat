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
class Binarytodecimal extends REST_Controller {

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
		
		$n = $this->post("input");
		$num = $n;
		$dec_value = 0;
		 
		// Initializing base value 
		// to 1, i.e 2^0
		$base = 1;
		 
		$temp = $num;
		while ($temp)
		{
			$last_digit = $temp % 10;
			$temp = $temp / 10;
			 
			$dec_value += $last_digit
							* $base;
			$base = $base*2;
		}
		echo $this->response( $dec_value,200);
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
