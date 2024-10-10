<?php

namespace Sena\controllers;

use Sena\libs\Controller;

class MainController extends Controller{
  public function __construct() {}

  public function index()
  {
    $data = [
      'title' => 'Vacio'
    ];
    $this->view('home', $data, 'app');
  }
}