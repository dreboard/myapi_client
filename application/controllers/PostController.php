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
			$client   = new \GuzzleHttp\Client(['headers' => ['API_Auth' => '123']]);
			//$response = $client->request( 'POST', 'http://api.dev-php.site/v1/');
			/*$response = $client->post(API_URL, [
				'headers' => ['API_Auth' => '123'],
			'headers'     => [
					'User-Agent'   => 'testing/1.0',
					'Accept'       => 'application/json',
					'Content-type' => 'application/json',
					'API_Auth'      => '123',
					'X-Foo'        => [ 'Bar', 'Baz' ]
				'form_params' => [
					'post_var'     => $this->input->post('post_var'),
				],
				'body' => json_encode([
					'name' => 'Example name',
				])
			]);*/
			$response = $client->request( 'POST', API_URL, [
				'form_params' => [
					'post_var'     => $this->input->post('post_var'),
				],
				'headers'     => [
					'User-Agent'   => 'testing/1.0',
					'Accept'       => 'application/json',
					'Content-type' => 'application/json',
					'X-Auth'      => '123',
					'X-Foo'        => [ 'Bar', 'Baz' ]
			]
			]);
			echo filter_var($response->getStatusCode(), FILTER_SANITIZE_NUMBER_INT); // 200
			echo htmlspecialchars($response->getReasonPhrase(), ENT_QUOTES, 'utf-8'); // OK
			echo htmlspecialchars($response->getProtocolVersion(), ENT_QUOTES, 'UTF-8'); // 1.1
			//echo htmlspecialchars($response->getBody(), ENT_QUOTES, 'utf-8');
			echo $response->getBody();

		} catch (RequestException | Throwable $e) {
			echo $e->getMessage();
		}

	}

}