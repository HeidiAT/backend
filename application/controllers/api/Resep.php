<?php
use Restserver\Libraries\REST_Controller;
/**
 *
 */
class Resep extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('resep_model');
  }

  public function jeniskue_get()
  {
    $data = $this->resep_model->jeniskuelist();
    $this->response(['Resep'=> $data], 200);
  }

  public function kuekering_get()
  {
    $data = $this->resep_model->kuekeringlist();
    $this->response(['Resep'=> $data], 200);
  }

  public function kuebasah_get()
  {
    $data = $this->resep_model->kuebasahlist();
    $this->response(['Resep'=> $data], 200);
  }

  public function kueultah_get()
  {
    $data = $this->resep_model->kueultahlist();
    $this->response(['Resep'=> $data], 200);
  }

  public function video_get()
  {
    $data = $this->resep_model->video();
    $this->response(['Video' => $data], 200);
  }

  public function deskripsikue_get()
  {
    $data = $this->resep_model->deskripsi();
    $this->response(['Deskripsi' => $data], 200);
  }
}
