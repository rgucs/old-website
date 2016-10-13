<?php
// Main Routes
$app->get('/', '\Controller\MainController:index')->setName('index');
$app->get('/about', '\Controller\MainController:about')->setName('about');
