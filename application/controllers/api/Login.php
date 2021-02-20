<?php
use Restserver\Libraries\REST_Controller;

/**
 *
 */
class Login extends REST_Controller
{

  public function daftarmember_get()
  {
    $data=$this->login_model->register();
    $this->response( ['member'=> $data ], 200 );
  }

  public function registermember_post()
  {
      $data=[
      "Usernama"=>$this->post('Username'),
      "Email"=>$this->post('Email'),
      "Password"=>password_hash($this->post('Password'),PASSWORD_DEFAULT),
      "Nama"=>$this->post('Password'),
      "Umur"=>$this->post('Umur'),
      "Pekerjaan"=>$this->post('pekerjaan'),
      "No.Telp"=>$this->post('notelp')
    ];
    $rs=$this->db->insert('member',$data);
    if ($rs) {
        $this->response( ['message'=>"success"], 200 );
    } else {
      $this->response( ['message'=>""], 502 );
    }
  }

  public function loginmember_post()
  {
    $email=$this->post('Email');
    $password=$this->post('Password');
    $data=$this->login_model->login($email);
    $login=false;
    foreach ($data as $m) {
      if (password_verify($password,$m->password)) {
        $login=true;
      }
    }
    if ($login) {
      $this->response( ['message'=>"success"], 200 );
    } else {
      $this->response( ['message'=>"failed"], 200 );
    }
  }
}
?>
