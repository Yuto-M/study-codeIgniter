<?php

class Migrate extends CI_Controller
{
  public function index()
  {
    $this->load->library('migration');

    // migration失敗時にエラーメッセージ表示
    if (! $this->migration->latest()) {
      show_error($this->migration->error_string());
    }
  }

  public function rollback($target_version)
  {
    $this->load->library('migration');
    if ($this->migration->version($target_version)) {
      echo 'Migration Success. \n';
    } else {
      show_error($this->migration->error_string());
    }
  }
}

