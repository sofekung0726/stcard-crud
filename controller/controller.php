<?php

    include_once './condb/condb.php';
    include_once './model/model.php';

    class controller{

        private $condb;
        private $model;

        function __construct(){
            $this->condb = new condb();
            $this->model = new model($this->condb);
        }
        public function phone(){
            $result = $this->model->phone();
            include './views/phone.php';

        }
        public function detailphone($id){    
            $result = $this->model->detailphone($id);
            include './views/detailphone.php';

        }
        public function mvcPhone(){
            $Route = isset($_GET['route']) ? $_GET['route'] : NULL;
            switch($Route){
                case "detail":
                    $id = $_REQUEST['id'];
                    $this->detailphone($id);
                break; 
                default:
                    $this->phone();
                break;
            }
    }

}
?>