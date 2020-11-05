<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Train extends CI_Model {
public function __construct()
{
	parent::__construct();
	
}
	
	function insert1($data)
	{
		$this->db->insert('trainnumber',$data);   
    }
    function insert2($data2)
	{
		$this->db->insert('start',$data2);   
    }
    function insert3($data3)
	{
		$this->db->insert('huayrach',$data3);   
    }
    function insert4($data4)
	{
		$this->db->insert('end',$data4);   
    }
    
   function select(){
       $query=$this->db->select('*')
        ->from('trainnumber')
        ->join('start','start.id = trainnumber.id')
        ->join('huayrach','huayrach.id = trainnumber.id')
        ->join('end','end.id = trainnumber.id')
        ->where('h_to <=', '06:00')
        ->get();
        return $query->result_array();
    }
   
}
