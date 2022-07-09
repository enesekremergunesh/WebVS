<?php
// CRUD operations for todos entity

/**
 * @OA\Get(path="/todos", tags={"todo"}, security={{"ApiKeyAuth": {}}},
 *         summary="Return all author todos from the API. ",
 *         @OA\Response( response=200, description="List of todos.")
 * )
 */
Flight::route('GET /authors', function(){
  Flight::json(Flight::adminAuthorService()->get_all());
});

Flight::route('GET /author/@id', function($id){
  Flight::json(Flight::adminAuthorService()->get_by_id($id));
});

Flight::route('DELETE /author/@id', function($id){
  Flight::adminAuthorService()->delete($id);  
  Flight::json(["message" => "deleted"]);
});

Flight::route('POST /author', function(){
  Flight::adminAuthorService()->add(Flight::request()->data->getData());
  Flight::json(["message" => "inserted"]);
});

Flight::route('PUT /author', function(){
  Flight::adminAuthorService()->update(Flight::request()->data->getData());
  Flight::json(["message" => "updated"]);
});

Flight::route('GET /', function(){
  echo 'hello world';
});

?>
