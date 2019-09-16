<?php
class User {
      public $id;
      public $username;
      public $password;
      public $first_name;
      public $last_name;

      static function get_full_name(){
          return $this->first_name." ".$this->last_name;
      }
   }