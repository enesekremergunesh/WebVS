<?php
// CRUD operations for Notes entity

Flight::route('GET /notes', function (){
  Flight::json(Flight::noteService()->get_all());
});


?>