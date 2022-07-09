<?php
// CRUD operations for todos entity

/**
 * @OA\Get(path="/todos", tags={"todo"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all user todos from the API. ",
 *         @OA\Response( response=200, description="List of todos.")
 * )
 */
Flight::route('GET /users', function(){
  Flight::json(Flight::adminUserService()->get_all());
});

Flight::route('GET /user/@id', function($id){
  Flight::json(Flight::adminUserService()->get_by_id($id));
});

Flight::route('DELETE /user/@id', function($id){
  Flight::adminUserService()->delete($id);  
  Flight::json(["message" => "deleted"]);
});

Flight::route('POST /user', function(){
  Flight::adminUserService()->add(Flight::request()->data->getData());
  Flight::json(["message" => "inserted"]);
});

Flight::route('PUT /user', function(){
  Flight::adminUserService()->update(Flight::request()->data->getData());
  Flight::json(["message" => "updated"]);
});

Flight::route('GET /', function(){
  echo 'hello world';
});

?>
