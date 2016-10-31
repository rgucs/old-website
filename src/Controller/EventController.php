<?php

namespace Site\Controller;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class EventController extends Controller {
  public function index(Request $request, Response $response, $args) : Response {
    $events = $this->ci->database->table('events')
      ->where('end_date', '>=', date('Y-m-d'))
      ->orderBy('start_date', 'asc')
      ->get();

      return $this->ci->view->render($response, 'events.twig', [
        'events' => $events
      ]);
  }

  public function event(Request $request, Response $response, $args) : Response {

  }
}
