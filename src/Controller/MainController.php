<?php

namespace Site\Controller;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class MainController extends Controller {
  public function index(Request $request, Response $response, $args) : Response {
    // Render index view
    return $this->ci->view->render($response, 'home.twig');
  }

  public function about(Request $request, Response $response, $args) : Response {
    return $this->ci->view->render($response, 'about.twig');
  }

  public function join_us(Request $request, Response $response, $args) : Response {
    return $this->ci->view->render($response, 'join_us.twig');
  }
}
