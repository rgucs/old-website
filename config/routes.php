<?php
// Main Routes
$app->get('/', '\Site\Controller\MainController:index')->setName('index');
$app->get('/about', '\Site\Controller\MainController:about')->setName('about');
$app->get('/join_us', '\Site\Controller\MainController:join_us')->setName('join-us');

$app->get('/polls', '\Site\Controller\PollController:index')->setName('polls');
$app->get('/poll/{id}', '\Site\Controller\PollController:poll')->setName('poll');
$app->post('/poll/{id}/vote', '\Site\Controller\PollController:vote')->setName('vote');

$app->get('/events', '\Site\Controller\EventController:index')->setName('events');
