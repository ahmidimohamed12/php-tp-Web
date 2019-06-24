<?php
  class databasse{
      private $db;
      private $res;
      function __construct($localhost,$user,$password,$dbname)
      {
        db = new mysqli_connect($localhost,$user,$password,$dbname);

      }
      public function insert_db($qr)
      {
          this->$res =  mysqli_query($db,$qr);
          return $res;
      }


  }
