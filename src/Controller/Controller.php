<?php

namespace Site\Controller;

use \Interop\Container\ContainerInterface as Container;

class Controller {
  protected $ci;

  //Constructor
  public function __construct(Container $ci) {
    $this->ci = $ci;
  }
}
