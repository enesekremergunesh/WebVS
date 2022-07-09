<?php
// CRUD operations for todos entity

/**
 * @OA\Get(path="/todos", tags={"todo"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all user todos from the API. ",
 *         @OA\Response( response=200, description="List of todos.")
 * )
 */
Flight::route('GET /books', function(){
  Flight::json(Flight::adminBookService()->get_all());
});

Flight::route('GET /book/@id', function($id){
  Flight::json(Flight::adminBookService()->get_by_id($id));
});

Flight::route('DELETE /book/@id', function($id){
  Flight::adminBookService()->delete($id);  
  Flight::json(["message" => "deleted"]);
});

Flight::route('POST /book', function(){
  Flight::adminBookService()->add(Flight::request()->data->getData());
  Flight::json(["message" => "inserted"]);
});

Flight::route('PUT /book', function(){
  Flight::adminBookService()->update(Flight::request()->data->getData());
  Flight::json(["message" => "updated"]);
});

Flight::route('GET /', function(){
  echo 'hello world';
});

?>
