<?php

class Login_model extends CI_model {

  public function __construct() {
      parent::__construct();

  }

  /**   * Menambahkan user baru   */
  public function register(){
    // membuat user_ID otomatis
    // menggunakan UNIX Timestamp --> date('U')
  //  $nick = substr( $this->input->post('nama'), 0 , 3 );
    // 3 huruf pertama dari nama user
    //$user_id = "U-".$nick.date('U');

    // menyiapkan data
    $data = [
          //  'user_ID' => $user_id,
            'nama' => $this->input->post('nama'),
            'username' =>$this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => md5( $this->input->post('pass') ),
            'umur'=>$this->input->post('umur'),
            'pekerjaan'=>$this->input->post('pekerjaan'),
            'no_hp'=>$this->input->post('no_hp')
          ];

    // simpan ke database dalam tabel 'login'
    $this->db->insert( 'login', $data );
  }

  public function login( $username ){

    $sql = "SELECT * FROM login WHERE Username='".$username."'";

    $query = $this->db->query( $sql );

    // if( !empty( $query->row_array() ) ) {
      return $query->row_array();
    // }

    // return false;
  }
}
