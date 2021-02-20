<?php
use Restserver\Libraries\REST_Controller;
/**
 *
 */
class Details extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('detail_model');
  }

  public function detailresep_get()
  {
    $where='';
    if (null !== $this->get('Resep_ID')) {
      $kue = $this->get('Resep_ID');
      $where = "Resep_ID LIKE '" . $kue . "'" ;
    }
    $data = $this->detail_model->detail($where);
    $this->response(['details'=> $data], 200);
  }
}
