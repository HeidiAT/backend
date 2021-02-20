<?php
/**
 *
 */
class Resep_model extends CI_model
{

  function __construct()
  {
    parent::__construct();
  }

  public function jeniskuelist()
  {
    // SELECT * FROM resep JOIN jenis USING (ID_Jenis) JOIN detail USING(Resep_ID)
    $this->db->select('*');
    $this->db->from('resep r');
    $this->db->join('jenis j', 'ON(r.ID_Jenis = j.ID_Jenis)');
    $this->db->join('detail d', 'ON(r.Resep_ID = d.Resep_ID)');

    $query = $this->db->get();
    return $query->result_array();
  }

  public function kuekeringlist()
  {
    // SELECT * FROM resep JOIN jenis USING (ID_Jenis) JOIN detail USING(Resep_ID) WHERE(resep.ID_Jenis = J1)
    $this->db->select('*');
    $this->db->from('resep r');
    $this->db->join('jenis j', 'ON(r.ID_Jenis = j.ID_Jenis)');
    $this->db->join('detail d', 'ON(r.Resep_ID = d.Resep_ID)');
    $this->db->where("r.ID_jenis = 'J1'");

    $query = $this->db->get();
    return $query->result_array();
  }

  public function kuebasahlist()
  {
    // SELECT * FROM resep JOIN jenis USING (ID_Jenis) JOIN detail USING(Resep_ID) WHERE(resep.ID_Jenis = J2)
    $this->db->select('*');
    $this->db->from('resep r');
    $this->db->join('jenis j', 'ON(r.ID_Jenis = j.ID_Jenis)');
    $this->db->join('detail d', 'ON(r.Resep_ID = d.Resep_ID)');
    $this->db->where("r.ID_jenis = 'J2'");

    $query = $this->db->get();
    return $query->result_array();
  }

  public function kueultahlist()
  {
    // SELECT * FROM resep JOIN jenis USING (ID_Jenis) JOIN detail USING(Resep_ID) WHERE(resep.ID_Jenis = J3)
    $this->db->select('*');
    $this->db->from('resep r');
    $this->db->join('jenis j', 'ON(r.ID_Jenis = j.ID_Jenis)');
    $this->db->join('detail d', 'ON(r.Resep_ID = d.Resep_ID)');
    $this->db->where("r.ID_jenis = 'J3'");

    $query = $this->db->get();
    return $query->result_array();
  }

  public function video()
  {
    // SELECT resep.Resep_ID, resep.Nama_Resep, jenis.Jenis_Resep, resep.Deskripsi FROM resep JOIN jenis USING (ID_Jenis)
    $this->db->select('*');
    $this->db->from('resep r');
    $this->db->join('jenis j', 'ON(r.ID_Jenis = j.ID_Jenis)');

    $query = $this->db->get();
    return $query->result_array();
  }

  public function deskripsi()
  {
    // SELECT resep.Resep_ID, detail.Image, resep.Nama_Resep, resep.Deskripsi FROM resep JOIN detail USING (Resep_ID)
    $this->db->select('*');
    $this->db->from('resep r');
    $this->db->join('detail d', 'ON(r.Resep_ID = d.Resep_ID)');

    $query = $this->db->get();
    return $query->result_array();
  }
}

?>
