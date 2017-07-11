<?php

namespace CodeBot;

use GuzzleHttp/Client;

class SendApi
{
	const URL = 'http://graph.facebook/v2.6/me/messages';	
	private $pageAccessToken;
	
	public function __construct(string $pageAccessToken)
	{
			$this->pageAccessToken = $pageAccessToken;
	}
	
	public function make(array $message, string $url = null, $method='POST') :string
	{
		$client = new Client;
		$url = $url ?? SendApi::URL;
		
		$response = $client->request($method, $url, [
		    'json' =>$message,
			'query'=>['access_token'=> $this->$pageAccessToken]
		]);
		
		return (string)$response->getBody();
	}
}