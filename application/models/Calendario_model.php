<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendario_model extends CI_Model {

	public function __construct()
    {
            parent::__construct();
            $this->load->database();
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function getJogos()
	{
		$query = $this->db->get('calendario');

		return $query->result_array();
	}

	/*  O PHP nao deixa que se volte a declarar uma função com o mesmo nome
	 *  Esta função serve para retornar os jogos de um determinado grupo $grupo
	*/

	public function getJogosbyGroup($grupo)
	{
		$sql='SELECT * FROM calendario where grupo=?';
		$query=$this->db->query($sql, array('$grupo'));
		return $query->result_array();
	}

	public function getEquipas(){
		$query = $this->db->get('equipas');
		
		return $query->result_array();
	}
}
