<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class congrats_model extends CI_Model{
  function __construct()
  {
    parent::__construct();
  }

  function congrats_list()
  {
    $sql    = 'SELECT * FROM `congrats` WHERE 1';
    $query  = $this->db->query($sql);
    $result = $query->result();
    return $result;
  }

  function congrats_add()
  {
    $name       = $this->input->post('name');
    $email      = $this->input->post('email');
    $r_congrats = $this->input->post('congrats_data');

    $sql    = "SELECT 1 FROM congrats_list WHERE email = '$email' LIMIT 1";
    $query  = $this->db->query($sql);
    $result = $query->result();

    if (empty($result))
    {
      $data = array(
                'name'  => $name,
                'email' => $email                    
              );
      $this->db->insert('congrats_list', $data);    
      $insert_id = $this->db->insert_id();

      foreach ($r_congrats as $congrats_id)
      {
        $data1 = array(
                  'list_id'     => $insert_id,
                  'congrats_id' => $congrats_id,
                );
        $this->db->insert('congrats_data',$data1);  
      }
    }else{
      $data = array('err'=>1,'msg'=>'Email Sudah Pernah Dipakai.');
    }

    return $data;
  }

  function congrats_data()
  {
    $sql    = 'SELECT `l`.`id`, `name`, `email`, `title`
                  FROM `congrats_list` AS l 
                  LEFT JOIN `congrats_data` AS d ON(l.id=d.list_id)
                  LEFT JOIN `congrats` AS c ON(d.congrats_id=c.id) WHERE 1 ORDER BY `l`.`id` DESC, `d`.`id` ASC';
    $query  = $this->db->query($sql);
    $result = $query->result();

    $r = [];
    foreach ($result as $dt)
    {
      $r[$dt->id]['data']       = array('name' => $dt->name, 'email'=> $dt->email);
      $r[$dt->id]['congrats'][] = $dt->title;
    }
    return $r;
    // return $result;
  }
}