<?php
class Inventory_suppliers_model extends CI_Model {

private $primary_key='item_number';
private $table_name='inventory_suppliers';

function __construct(){
	parent::__construct();
}
	function save($data){
		return $this->db->insert($this->table_name,$data);
	}
	function update($id,$data){
		$this->db->where($this->primary_key,$id);
		$this->db->update($this->table_name,$data);
	}
	function delete($item_number,$kode){
		$this->db->query("delete from inventory_suppliers where item_number='".$item_number."' 
		and supplier_number='".$kode."'");
		return true;
	}

}
