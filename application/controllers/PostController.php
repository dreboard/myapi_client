<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;


/**
 * Class PostController
 */
class PostController extends MY_Controller {

	/**
	 * PostController constructor.
	 */
	public function __construct() {
		parent::__construct();
	}

	/**
	 * GET version from API with POST
	 *
	 * @return void
	 */
	public function postVersion()
	{
		try {
			$client   = new \GuzzleHttp\Client();
			$response = $client->request( 'POST', 'http://api.dev-php.site/v1/', [
				'form_params' => [
					'post_var'     => $this->input->post('post_var'),
				],
				'headers'     => [
					'User-Agent'   => 'testing/1.0',
					'Accept'       => 'application/json',
					'Content-type' => 'application/json',
					'API_Auth'      => '123',
					'X-Foo'        => [ 'Bar', 'Baz' ]
			]
			]);

			echo $response->getStatusCode(); // 200
			echo $response->getReasonPhrase(); // OK
			echo $response->getProtocolVersion(); // 1.1
			echo $response->getBody();

		} catch (RequestException | Throwable $e) {
			echo $e->getMessage();
		}

	}

}