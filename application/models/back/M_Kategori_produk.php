<?php
use GuzzleHttp\Client;

class M_Kategori_produk extends CI_Model {
	private $_client;

    public function __construct()
    {
		#parent::__construct();
		$this->_client = new Client([
			'base_uri' => 'localhost/pandaisikek_api/',
        	'auth' => ['admin' , '1234x'] ,
		]);
	}

    public function getKategori($id = 0)
    {
        $url = 'Kategori/index';
        $response = $this->_client->request('GET',$url,
            [
            'query' => [
                /*'username'        => $where['username'],*/
                'id' => $id ,
                'ACCESS_TOKEN'  => '4quchynkqmu3chl4m4nhy4'
                ]
            ]
        );
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['kategori'];
    }

    public function addKategori($nama,$status)
    {
        $response = $this->_client->request('POST','Kategori/add',
            [
            'form_params' => [
                'nama'         => $nama,
                'status'       => 1,
                'ACCESS_TOKEN' => '4quchynkqmu3chl4m4nhy4'
                ]
            ]
        );

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function delKategori($id)
    {
        $response = $this->_client->request('DELETE','Kategori/delete',
            [
            'form_params' => [
                'id_kategori'  => $id,
                'ACCESS_TOKEN' => '4quchynkqmu3chl4m4nhy4'
                ]
            ]
        );

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}