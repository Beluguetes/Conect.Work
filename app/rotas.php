<?php

use Conectwork\Core\Router;

Router::get('/','HomeController','index');
Router::get('/cadastro','HomeController','cadastro');
Router::get('/duvidas','HomeController','duvidas');
Router::get('/servicos','HomeController','servicos');
Router::get('/dadosf','HomeController','dadosf');
Router::get('/login','HomeController','login');
Router::get('/funcionario','HomeController','funcionario');
Router::get('/empresa','HomeController','empresa');

