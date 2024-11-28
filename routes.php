<?php
// routes.php
require_once 'app/controllers/UsersController.php';
require_once 'app/controllers/BooksController.php';

$Usercontroller = new UsersController();
$bookcontroller = new BooksController();

$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if($url == '/users/index' || $url == '/') {
    $Usercontroller->index();
} elseif ($url == '/users/create' && $requestMethod == 'GET') {
    $Usercontroller->create();
} elseif ($url == '/users/store' && $requestMethod == 'POST') {
    $Usercontroller->store();
} elseif (preg_match('/\/users\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $Usercontroller->edit($userId);
} elseif (preg_match('/\/users\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $Usercontroller->update($userId, $_POST);
} elseif (preg_match('/\/users\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $Usercontroller->delete($userId);

//books controller
}elseif ($url == '/books/index') {
    $bookcontroller->index();
} elseif ($url == '/books/create' && $requestMethod == 'GET') {
    $bookcontroller->create();
} elseif ($url == '/books/store' && $requestMethod == 'POST') {
    $bookcontroller->store();
} elseif (preg_match('/\/books\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $bookId = $matches[1];
    $bookcontroller->edit($bookId);
} elseif (preg_match('/\/books\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $bookId = $matches[1];
    $bookcontroller->update($bookId, $_POST);
} elseif (preg_match('/\/books\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $bookId = $matches[1];
    $bookcontroller->delete($bookId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}