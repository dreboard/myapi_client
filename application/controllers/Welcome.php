<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class Welcome extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	/**
	 * GET version from API
	 */
	public function getVersion()
	{
		//echo 1; exit;
		try {
			$client = new \GuzzleHttp\Client();

			$res = $client->request('GET', 'http://api.dev-php.site/v1/', [
				'headers' => [
					'User-Agent' => 'testing/1.0',
					'Accept'     => 'application/json',
					'Content-type'     => 'application/json',
					'X-Foo'      => ['Bar', 'Baz']
				]
			]);

			//echo $res->getBody();
			return json_decode($res->getBody(), true);
			//var_dump($response); //['version'];
		} catch (RequestException $e) {
			echo $e->getMessage();
		}

	}
	public function index()
	{
		$this->load->view('welcome');
		//$this->ci_smarty->assign("elapsed_time", "30");
		//$this->ci_smarty->view('welcome');
	}
}
