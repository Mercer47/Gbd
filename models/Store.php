<?php

/**
 * 
 */
class Store extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function fetchorders()
	{
		$query=$this->db->query('SELECT * FROM orders ORDER BY Timestamp DESC');
		$result=$query->result();
		return $result;
	}

	function fetchinvoicedata($id)
	{
		$sql='SELECT * FROM orders WHERE OrderId=?';
		$query=$this->db->query($sql,$id);
		$result=$query->result();
		return $result;
	}

	function getbooks()
	{
		$sql=$this->db->query('SELECT * FROM books ORDER BY Timestamp DESC');
		$result=$sql->result();
		return $result;
	}

		function getcategories()
	{
		$query=$this->db->query('SELECT * FROM bookcat');
		$result=$query->result();
		return $result;
	}

	function insertbook($data)
	{
		$this->db->insert('books',$data);
	}

	function getbookdetails($id)
	{
		$sql='SELECT * FROM books WHERE id=?';
		$query=$this->db->query($sql,$id);
		$result=$query->result();
		return $result;
	}

	function updatebook($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('books',$data);
	}

	function deletebook($id)
	{
		$sql='DELETE FROM books WHERE id=?';
		$query=$this->db->query($sql,$id);
	}
}

?>