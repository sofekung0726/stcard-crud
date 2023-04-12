<?php

    class model{

        private $dns;
        private $dbUser;
        private $dbPass; 
        private $condb;

        function __construct(object $condb){
            $this->dns = $condb->dns;
            $this->dbUser = $condb->dbUser;
            $this->dbPass = $condb->dbPass;
            $this->connect();
        }

        public function connect(){
            try{
                $this->condb = new PDO($this->dns,$this->dbUser,$this->dbPass);
                // echo "connected to database successfully!";
            }catch(PDOException $err){
                echo "Have an error about : " . $err->getMessage();
                echo "<br>Error in line : " . $err->getLine();
            }
        }

        public function phone(){
            $sql = "SELECT * FROM `s1`";
            $query = $this->condb->prepare($sql);
            if($query->execute()){
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                return $result;
                return true;
            }else {
                return false;
            }
        }

        public function detailphone($id){
            $sql = "SELECT * FROM `s1` WHERE `id` = :id";
            $query = $this->condb->prepare($sql);
            $query->bindParam(':id',$id,PDO::PARAM_INT);
            if($query->execute()){
                $result = $query->fetch(PDO::FETCH_ASSOC);
                return $result;
                return true;
            }else {
                return false;
            }
        }

    }

?>