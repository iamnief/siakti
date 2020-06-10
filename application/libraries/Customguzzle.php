<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require './vendor/autoload.php';
class Customguzzle 
{
	private $client = null;
	private $basic_token = '';

	public function __construct()
	{
		// $this->client = new GuzzleHttp\Client(['base_uri' =>  'https://yourapi.com/']); // plate your api url here
		$this->client = new GuzzleHttp\Client(['base_uri' =>  'localhost/siakti-api/']); // plate your api url here
	}

	public function getPlain($url,$contentType,$isAsync='')
	{
		if (!$url) {
			return false;
			exit();
		}

		if (!$contentType) {
			$contentTypes = "application/json";
		}

		$contentTypes = $contentType;

		$header = [
			'Content-Type' => $contentTypes
		];

		try {
			if ($isAsync) {
				$response = $this->client->getAsync('GET',$url,['headers' => $header]);
			}
			else{
				$response = $this->client->request('GET',$url,['headers' => $header]);
			}

			return $this->generateResult($response->getBody()->getContents(), 'data');

		}catch (\GuzzleHttp\Exception\ConnectException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			
			return $this->generateResult('','',$desc,$status);
			exit();
		} catch (\GuzzleHttp\Exception\ClientException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			
			return $this->generateResult('','',$desc,$status);
			exit();
		} catch (\GuzzleHttp\Exception\ServerException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			
			return $this->generateResult('','',$desc,$status);
			exit();
		}
	}
	
	public function getBearerToken($url,$token,$contentType,$isAsync='')
	{
		if (!$url) {
			return false;
			exit();
		}

		if (!$contentType) {
			$contentTypes = "application/json";
		}

		$auth = "Bearer " . $token;
		$contentTypes = $contentType;

		$header = [
			'Authorization' => $auth,
			'Content-Type' => $contentTypes
		];

		try {
			if ($isAsync) {
				$response = $this->client->getAsync('GET',$url,['headers' => $header]);
			}
			else{
				$response = $this->client->request('GET',$url,['headers' => $header]);
			}

			return $this->generateResult($response->getBody()->getContents(), 'data');

		}catch (\GuzzleHttp\Exception\ConnectException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			
			return $this->generateResult('','',$desc,$status);
			exit();
		} catch (\GuzzleHttp\Exception\ClientException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			
			return $this->generateResult('','',$desc,$status);
			exit();
		} catch (\GuzzleHttp\Exception\ServerException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			
			return $this->generateResult('','',$desc,$status);
			exit();
		}
	}

	public function getBasicToken($url,$contentType,$isAsync='')
	{
		if (!$url) {
			return false;
			exit();
		}

		if (!$contentType) {
			$contentTypes = "application/json";
		}

		$auth = "Basic " . $this->basic_token;
		$contentTypes = $contentType;

		$header = [
			'Authorization' => $auth,
			'Content-Type' => $contentTypes
		];

		try {
			if ($isAsync) {
				$response = $this->client->getAsync('GET',$url,['headers' => $header]);
			}
			else{
				$response = $this->client->request('GET',$url,['headers' => $header]);
			}

			return $this->generateResult($response->getBody()->getContents(), 'data');

		}catch (\GuzzleHttp\Exception\ConnectException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			
			return $this->generateResult('','',$desc,$status);
			exit();
		} catch (\GuzzleHttp\Exception\ClientException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			
			return $this->generateResult('','',$desc,$status);
			exit();
		} catch (\GuzzleHttp\Exception\ServerException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			
			return $this->generateResult('','',$desc,$status);
			exit();
		}
	}

	public function postBlank($url,$contentType,$data,$isAsync='')
	{
		if (!$url || !$data) {
			return false;
			exit();
		}
		
		$body = [];

		switch ($contentType) {
			case 'application/json': #json
			$options = ['json' => $data];
			break;

			case 'application/form-data': #multipart
			foreach ($data as $key => $value) {
				$body[] = ['name' => $key, 'contents' => $value]; 
			}
			$options = ['multipart' => $body];
			break;

			case 'application/x-www-form-urlencoded': #form-params
			$options = ['form_params' => $data];

			break;
			
			default:
			foreach ($data as $key => $value) {
				$body[] = ['name' => $key, 'contents' => $value]; 
			}
			$options = ['multipart' => $body];
			break;
		}

		try {
			if ($isAsync) {
				$response = $this->client->postAsync('POST',$url,$options);
			}
			else{
				$response = $this->client->post($url,$options);
			}
			return $this->generateResult($response->getBody()->getContents(), 'data');
		} catch (\GuzzleHttp\Exception\ConnectException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			return $this->generateResult('','',$desc,$status);
			exit();
		} catch (\GuzzleHttp\Exception\ClientException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			return $this->generateResult('','',$desc,$status);
			
			exit();
		} catch (\GuzzleHttp\Exception\ServerException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			return $this->generateResult('','',$desc,$status);
			
			exit();
		}
	}

	public function postBearerToken($url,$token,$contentType,$data,$isAsync='')
	{
		if (!$url || !$data) {
			return false;
			exit();
		}
		
		$body = [];
		$auth = "Bearer " . $token;

		switch ($contentType) {
			case 'application/json': #json
			$options = ['json' => $data, 'headers' => ['Authorization' => $auth]];
			break;

			case 'application/form-data': #multipart
			foreach ($data as $key => $value) {
				$body[] = ['name' => $key, 'contents' => $value]; 
			}
			$options = ['multipart' => $body, 'headers' => ['Authorization' => $auth]];
			break;

			case 'application/x-www-form-urlencoded': #form-params
			$options = ['form_params' => $data, 'headers' => ['Authorization' => $auth]];

			break;
			
			default:
			foreach ($data as $key => $value) {
				$body[] = ['name' => $key, 'contents' => $value]; 
			}
			$options = ['multipart' => $body, 'headers' => ['Authorization' => $auth]];
			break;
		}

		try {
			if ($isAsync) {
				$response = $this->client->postAsync('POST',$url,$options);
			}
			else{
				$response = $this->client->post($url,$options);
			}
			return $this->generateResult($response->getBody()->getContents(), 'data');
		} catch (\GuzzleHttp\Exception\ConnectException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			return $this->generateResult('','',$desc,$status);
			exit();
		} catch (\GuzzleHttp\Exception\ClientException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			return $this->generateResult('','',$desc,$status);
			
			exit();
		} catch (\GuzzleHttp\Exception\ServerException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			return $this->generateResult('','',$desc,$status);
			
			exit();
		}
	}

	public function postBasicToken($url,$contentType,$data,$isAsync='')
	{
		if (!$url || !$data) {
			return false;
			exit();
		}

		if ($data == 'refresh') {
			$data = '';
		}

		if (!$contentType) {
			$contentTypes = "";
		}

		$auth = "Basic " . $this->basic_token;
		$contentTypes = $contentType;

		$option = [
			'body' => $data,
			'headers' => [
				'Authorization' => $auth,
				'Content-Type' => $contentTypes
			]
		];

		try {
			if ($isAsync) {
				$response = $this->client->postAsync('POST',$url,$option);
			}
			else{
				$response = $this->client->request('POST',$url,$option);
			}
			return $this->generateResult($response->getBody()->getContents(), 'data');
			
		} catch (\GuzzleHttp\Exception\ConnectException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			
			return $this->generateResult('','',$desc,$status);
			exit();
		} catch (\GuzzleHttp\Exception\ClientException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			
			return $this->generateResult('','',$desc,$status);
			exit();
		} catch (\GuzzleHttp\Exception\ServerException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			
			return $this->generateResult('','',$desc,$status);
			exit();
		}
	}

	public function delBlank($url,$contentType,$data,$isAsync='')
	{
		if (!$url || !$data) {
			return false;
			exit();
		}
		
		$body = [];

		switch ($contentType) {
			case 'application/json': #json
			$options = ['json' => $data];
			break;

			case 'application/form-data': #multipart
			foreach ($data as $key => $value) {
				$body[] = ['name' => $key, 'contents' => $value]; 
			}
			$options = ['multipart' => $body];
			break;

			case 'application/x-www-form-urlencoded': #form-params
			$options = ['form_params' => $data];

			break;
			
			default:
			foreach ($data as $key => $value) {
				$body[] = ['name' => $key, 'contents' => $value]; 
			}
			$options = ['multipart' => $body];
			break;
		}

		try {
			if ($isAsync) {
				$response = $this->client->deleteAsync('delete',$url,$options);
			}
			else{
				$response = $this->client->delete($url,$options);
			}
			return $this->generateResult($response->getBody()->getContents(), 'data');
		} catch (\GuzzleHttp\Exception\ConnectException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			return $this->generateResult('','',$desc,$status);
			exit();
		} catch (\GuzzleHttp\Exception\ClientException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			return $this->generateResult('','',$desc,$status);
			
			exit();
		} catch (\GuzzleHttp\Exception\ServerException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			return $this->generateResult('','',$desc,$status);
			
			exit();
		}
	}

	public function delBearerToken($url,$token,$contentType,$data,$isAsync='')
	{
		if (!$url || !$data) {
			return false;
			exit();
		}
		
		$body = [];
		$auth = "Bearer " . $token;

		switch ($contentType) {
			case 'application/json': #json
			$options = ['json' => $data, 'headers' => ['Authorization' => $auth]];
			break;

			case 'application/form-data': #multipart
			foreach ($data as $key => $value) {
				$body[] = ['name' => $key, 'contents' => $value]; 
			}
			$options = ['multipart' => $body, 'headers' => ['Authorization' => $auth]];
			break;

			case 'application/x-www-form-urlencoded': #form-params
			$options = ['form_params' => $data, 'headers' => ['Authorization' => $auth]];

			break;
			
			default:
			foreach ($data as $key => $value) {
				$body[] = ['name' => $key, 'contents' => $value]; 
			}
			$options = ['multipart' => $body, 'headers' => ['Authorization' => $auth]];
			break;
		}

		try {
			if ($isAsync) {
				$response = $this->client->deleteAsync('delete',$url,$options);
			}
			else{
				$response = $this->client->delete($url,$options);
			}
			return $this->generateResult($response->getBody()->getContents(), 'data');
		} catch (\GuzzleHttp\Exception\ConnectException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			return $this->generateResult('','',$desc,$status);
			exit();
		} catch (\GuzzleHttp\Exception\ClientException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			return $this->generateResult('','',$desc,$status);
			
			exit();
		} catch (\GuzzleHttp\Exception\ServerException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			return $this->generateResult('','',$desc,$status);
			
			exit();
		}
	}

	public function delBasicToken($url,$contentType,$data,$isAsync='')
	{
		if (!$url || !$data) {
			return false;
			exit();
		}

		if ($data == 'refresh') {
			$data = '';
		}

		if (!$contentType) {
			$contentTypes = "";
		}

		$auth = "Basic " . $this->basic_token;
		$contentTypes = $contentType;

		$option = [
			'body' => $data,
			'headers' => [
				'Authorization' => $auth,
				'Content-Type' => $contentTypes
			]
		];

		try {
			if ($isAsync) {
				$response = $this->client->deleteAsync('delete',$url,$option);
			}
			else{
				$response = $this->client->request('delete',$url,$option);
			}
			return $this->generateResult($response->getBody()->getContents(), 'data');
			
		} catch (\GuzzleHttp\Exception\ConnectException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			
			return $this->generateResult('','',$desc,$status);
			exit();
		} catch (\GuzzleHttp\Exception\ClientException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			
			return $this->generateResult('','',$desc,$status);
			exit();
		} catch (\GuzzleHttp\Exception\ServerException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			
			return $this->generateResult('','',$desc,$status);
			exit();
		}
	}

	public function putBlank($url,$contentType,$data,$isAsync='')
	{
		if (!$url || !$data) {
			return false;
			exit();
		}
		
		$body = [];

		switch ($contentType) {
			case 'application/json': #json
			$options = ['json' => $data];
			break;

			case 'application/form-data': #multipart
			foreach ($data as $key => $value) {
				$body[] = ['name' => $key, 'contents' => $value]; 
			}
			$options = ['multipart' => $body];
			break;

			case 'application/x-www-form-urlencoded': #form-params
			$options = ['form_params' => $data];

			break;
			
			default:
			foreach ($data as $key => $value) {
				$body[] = ['name' => $key, 'contents' => $value]; 
			}
			$options = ['multipart' => $body];
			break;
		}

		try {
			if ($isAsync) {
				$response = $this->client->putAsync('put',$url,$options);
			}
			else{
				$response = $this->client->put($url,$options);
			}
			return $this->generateResult($response->getBody()->getContents(), 'data');
		} catch (\GuzzleHttp\Exception\ConnectException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			return $this->generateResult('','',$desc,$status);
			exit();
		} catch (\GuzzleHttp\Exception\ClientException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			return $this->generateResult('','',$desc,$status);
			
			exit();
		} catch (\GuzzleHttp\Exception\ServerException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			return $this->generateResult('','',$desc,$status);
			
			exit();
		}
	}

	public function putBearerToken($url,$token,$contentType,$data,$isAsync='')
	{
		if (!$url || !$data) {
			return false;
			exit();
		}
		
		$body = [];
		$auth = "Bearer " . $token;

		switch ($contentType) {
			case 'application/json': #json
			$options = ['json' => $data, 'headers' => ['Authorization' => $auth]];
			break;

			case 'application/form-data': #multipart
			foreach ($data as $key => $value) {
				$body[] = ['name' => $key, 'contents' => $value]; 
			}
			$options = ['multipart' => $body, 'headers' => ['Authorization' => $auth]];
			break;

			case 'application/x-www-form-urlencoded': #form-params
			$options = ['form_params' => $data, 'headers' => ['Authorization' => $auth]];

			break;
			
			default:
			foreach ($data as $key => $value) {
				$body[] = ['name' => $key, 'contents' => $value]; 
			}
			$options = ['multipart' => $body, 'headers' => ['Authorization' => $auth]];
			break;
		}

		try {
			if ($isAsync) {
				$response = $this->client->putAsync('put',$url,$options);
			}
			else{
				$response = $this->client->put($url,$options);
			}
			return $this->generateResult($response->getBody()->getContents(), 'data');
		} catch (\GuzzleHttp\Exception\ConnectException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			return $this->generateResult('','',$desc,$status);
			exit();
		} catch (\GuzzleHttp\Exception\ClientException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			return $this->generateResult('','',$desc,$status);
			
			exit();
		} catch (\GuzzleHttp\Exception\ServerException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			return $this->generateResult('','',$desc,$status);
			
			exit();
		}
	}

	public function putBasicToken($url,$contentType,$data,$isAsync='')
	{
		if (!$url || !$data) {
			return false;
			exit();
		}

		if ($data == 'refresh') {
			$data = '';
		}

		if (!$contentType) {
			$contentTypes = "";
		}

		$auth = "Basic " . $this->basic_token;
		$contentTypes = $contentType;

		$option = [
			'body' => $data,
			'headers' => [
				'Authorization' => $auth,
				'Content-Type' => $contentTypes
			]
		];

		try {
			if ($isAsync) {
				$response = $this->client->putAsync('put',$url,$option);
			}
			else{
				$response = $this->client->request('put',$url,$option);
			}
			return $this->generateResult($response->getBody()->getContents(), 'data');
			
		} catch (\GuzzleHttp\Exception\ConnectException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			
			return $this->generateResult('','',$desc,$status);
			exit();
		} catch (\GuzzleHttp\Exception\ClientException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			
			return $this->generateResult('','',$desc,$status);
			exit();
		} catch (\GuzzleHttp\Exception\ServerException $e) {
			$status = $e->getResponse()->getStatusCode();
			$desc = $e->getResponse()->getBody()->getContents();
			
			return $this->generateResult('','',$desc,$status);
			exit();
		}
	}

	// ----
	// You can use this function if your api or middleware didn't pass complete result
	// ----
	public function generateResult($data='',$returnType='',$description='',$status='')
	{
		$return = array(
			"error" => true,
			"status" => "401",
			"data" => null,
			"description" => $description
		);

		if ($returnType == "data" && $data) {
			$return = array(
				"error" => false,
				"status" => "200",
				"data" => $data,
				"description" => ""
			);
		}

		return $return;
	}







}