<?php
/**
 *
 */
class Detail_model extends CI_model
{

  function __construct()
  {
    parent::__construct();
  }

  public function detail($where='')
  {
    // SELECT * FROM `detail`
    $this->db->select('*');
    $this->db->from('detail d');
    if ( $where != '' ) $this->db->where( $where );
    $query = $this->db->get();
    return $query->result_array();
  }
}

?>
