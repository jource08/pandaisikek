<?php
use GuzzleHttp\Client;

class M_login extends CI_Model {
	private $_client;

    public function __construct()
    {
		#parent::__construct();
		$this->_client = new Client([
			'base_uri' => 'localhost/pandaisikek_api/',
        	'auth' => ['admin' , '1234x'] ,
		]);
	}

	public function getLogin($where)
	{
        #return $this->db->get('produk')->result();
        $response = $this->_client->request('GET','Backend_Login/login?',
        	[
        	'query' => [
        		'username' 		=> $where['username'],
        		'password' 		=> $where['password'],
        		'ACCESS_TOKEN' 	=> '4quchynkqmu3chl4m4nhy4'
        		]
        	]
        );

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['admin_web'];
	}
}