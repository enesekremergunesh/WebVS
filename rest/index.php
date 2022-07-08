<?php
// error_reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// include files
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/services/NoteService.class.php';
require_once __DIR__.'/services/UserService.class.php';
require_once __DIR__.'/dao/UserDao.class.php';

// register services and daos
Flight::register('userDao', 'UserDao');
Flight::register('userService', 'UserService');
Flight::register('noteService', 'NoteService');

// error_handling?
Flight::map('error', function(Exception $ex){
  // Handle error
  Flight::json(['message' => $ex->getMessage()], 500);
});

/* utility function for reading query parameters from URL */
Flight::map('query', function($name, $default_value = NULL){
  $request = Flight::request();
  $query_param = @$request->query->getData()[$name];
  $query_param = $query_param ? $query_param : $default_value;
  return urldecode($query_param);
});

require_once __DIR__ . '/routes/NoteRoutes.php';
require_once __DIR__. './routes/UserRoutes.php';

Flight::start();
?>