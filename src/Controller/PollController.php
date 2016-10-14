<?php

namespace Site\Controller;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class PollController extends Controller {
  public function index(Request $request, Response $response, $args) {
    // Load all of the Polls here
    $polls = $this->ci->database->table('poll')->get();

    return $this->ci->view->render($response, 'polls.twig', [
      'polls' => $polls
    ]);
  }

  public function poll(Request $request, Response $response, $args) {
    // Load a specific Poll here
  }

  public function vote(Request $request, Response $response, $args) {
    // Submit a vote against a Poll
  }
}
