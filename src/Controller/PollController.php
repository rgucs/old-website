<?php

namespace Site\Controller;

use \Slim\Exception\NotFoundException;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class PollController extends Controller {
  public function index(Request $request, Response $response, $args) : Response {
    // Load all of the Polls here
    $polls = $this->ci->database->table('poll')->get();

    return $this->ci->view->render($response, 'polls.twig', [
      'polls' => $polls
    ]);
  }

  public function poll(Request $request, Response $response, $args) : Response {
    // Load a specific Poll here
    $poll = $this->ci->database->table('poll')
      ->where('id', $args['id'])
      ->first();

    if ($poll != null) {
      $choices = $this->ci->database->table('poll_choice')
        ->where('poll_id', $args['id'])
        ->get();

      return $this->ci->view->render($response, 'poll.twig', [
        'poll' => $poll,
        'choices' => $choices
      ]);
    }

    throw new NotFoundException($request, $response);
  }

  public function vote(Request $request, Response $response, $args) : Response {
    // Submit a vote against a Poll
  }
}
