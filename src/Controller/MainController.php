<?php

namespace Controller;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class MainController extends Controller {
  public function index(Request $request, Response $response, $args) {
    // Render index view
    return $this->ci->view->render($response, 'home.twig');
  }

  public function about(Request $request, Response $response, $args) {
    return $this->ci->view->render($response, 'about.twig');
  }
}
