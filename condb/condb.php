<?php

    class condb{

        public $dns;
        public $dbUser;
        public $dbPass;
        public $dbname;

        function __construct(){
            $this->dns = "mysql:host=localhost;dbname=studentid";
            $this->dbUser = "root";
            $this->dbPass = "";
            $this->dbname = "studentid";
        }


    }




?>