<?php
use GuzzleHttp\Client;

class M_produk extends CI_Model {
	private $_client;

    public function __construct()
    {
		#parent::__construct();
		$this->_client = new Client([
			'base_uri' => 'localhost/pandaisikek_api/',
        	'auth' => ['admin' , '1234x'] ,
		]);
	}

	public function getProduk()
	{
        #return $this->db->get('produk')->result();
        $response = $this->_client->request('GET','produk/index',
        	[
        	'query' => [
        		'ACCESS_TOKEN' => '4quchynkqmu3chl4m4nhy4'
        		]
        	]
        );

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['produk'];
	}
}