<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function output_json($array)
{
  $output = '{}';
  if (!empty($array))
  {
    if (is_object($array))
    {
      $array = (array)$array;
    }
    if (!is_array($array))
    {
      $output = $array;
    }else{
      if (defined('JSON_PRETTY_PRINT'))
      {
        $output = json_encode($array, JSON_PRETTY_PRINT);
      }else{
        $output = json_encode($array);
      }
    }
  }
  header('content-type: application/json; charset: UTF-8');
  header('cache-control: must-revalidate');
  header('expires: ' . gmdate('D, d M Y H:i:s', time() + 31536000) . ' GMT');
  echo $output;
  exit();
}


class Congrats_ajax extends CI_Controller {
	public function save()
  {
    $this->load->model('congrats_model');        
    $a = $this->congrats_model->congrats_add();

    if (empty($a['err']))
    {
      $output = array('status' => 'ok', 'url'=>'/congrats?success=1', $a);
    }else{
      $output = array('msg' => 'Email Sudah Pernah Dipakai. Mohon Gunakan Email Yang Lain.');
    }
    return output_json($output);
  }
}

