<?php 

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'studentid');
    
    class DB_con {

        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            //เช็ค
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL : " . mysqli_connect_error();
            }
        }

        public function insert($name, $se, $StudentID, $age, $year, $embossnumber, $img) {
            $result = mysqli_query($this->dbcon, "INSERT INTO s1(name, se, StudentID, age, year, embossnumber,img) VALUES('$name', '$se', '$StudentID','$age','$year','$embossnumber','$img')");
            return $result;
        }

        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM s1");
            return $result;
        }

        public function fetchonerecord($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM s1 WHERE id = '$userid'");
            return $result;
        }

        public function update($name, $se, $StudentID) {
            $result = mysqli_query($this->dbcon, "UPDATE s1 SET 
                name = '$name',
                se = '$se',
                StudentID = '$StudentID'
            ");
            return $result;
        }

        public function delete($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM s1 WHERE id = '$userid'");
            return $deleterecord;
        }

    }
    

?>