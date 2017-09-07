<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;


/**
 * Class PostController
 */
class UserController extends MY_Controller {

	protected const USER_URL = 'http://api.dev-php.dev/v1/users/all';

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
	public function getAllUsersPost()
	{
		try {
			$client   = new \GuzzleHttp\Client(['headers' => ['API_Auth' => '123']]);
			$response = $client->request( 'POST', self::USER_URL, [
				'headers'     => [
					'User-Agent'   => 'testing/1.0',
					'Accept'       => 'application/json',
					'Content-type' => 'application/json',
					'X-Auth'      => '123',
					'X-Foo'        => [ 'Bar', 'Baz' ]
			]
			]);
			//echo filter_var($response->getStatusCode(), FILTER_SANITIZE_NUMBER_INT); // 200
			//echo htmlspecialchars($response->getReasonPhrase(), ENT_QUOTES, 'utf-8'); // OK
			//echo htmlspecialchars($response->getProtocolVersion(), ENT_QUOTES, 'UTF-8'); // 1.1
			/*$body = json_decode($response->getBody(), true);
			var_dump($body);
			$body = array_walk($body, function(&$item, $key){
				filter_var($item,FILTER_SANITIZE_STRING);
			});
			var_dump($response->getBody());
			echo json_encode($body);*/
			$body = json_decode($response->getBody(), true);
			echo $body;

		} catch (RequestException | Throwable $e) {
			echo $e->getMessage();
		}

	}

}