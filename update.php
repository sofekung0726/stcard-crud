<?php 

    include_once('functions.php');

    $updatedata = new DB_con();

    if (isset($_POST['update'])) {

        $userid = $_GET['id'];
        $name = $_POST['name'];
        $se = $_POST['se'];
        $StudentID = $_POST['StudentID'];
        $age = $_POST['age'];
        $year = $_POST['year'];
        $embossnumber = $_POST['embossnumber'];
        $img = $_POST['img'];

        $sql = $updatedata->update($name, $se, $StudentID, $age, $year, $embossnumber, $img, $userid);
        if ($sql) {
            echo "<script>alert('Updated Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='update.php'</script>";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <style>
            
            body {
                  background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrLl2Ol1SzofmbPcO6qA4SegrSpi3VgnVuZA&usqp=CAU');
                  background-size: cover;
                  background-position: center;
                  background-attachment: fixed;
            }

      </style>
</head>
<body>

    <div class="container">
        <h1 class="mt-5 text-while text-center">Update Page</h1>
        <hr>
        <?php 

            $userid = $_GET['id'];
            $updateuser = new DB_con();
            $sql = $updateuser->fetchonerecord($userid);
            while($row = mysqli_fetch_array($sql)) {
        ?>

        <form action="" method="post">
                <div class="text">
            <div class="mb-3">
                <label for="name" class="form-label">ชื่อนามสกุล</label>
                <input type="text" class="form-control" name="name" 
                    value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="se" class="form-label">สาขาวิขา</label>
                <input type="text" class="form-control" name="se"
                    value="<?php echo $row['se']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="StudentID">รหัสนักศึกษา</label>
                <input type="text" class="form-control" name="StudentID" 
                    value="<?php echo $row['StudentID']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="age">อายุ</label>
                <input type="text" class="form-control" name="age" 
                    value="<?php echo $row['age']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="year">ปีการศึกษา</label>
                <input type="text" class="form-control" name="year" 
                    value="<?php echo $row['year']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="embossnumber">รหัสบัตร 16 หลัก</label>
                <input type="text" class="form-control" name="embossnumber" 
                    value="<?php echo $row['embossnumber']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="img">รหัสบัตร 16 หลัก</label>
                <input type="text" class="form-control" name="img" 
                    value="<?php echo $row['img']; ?>" required>
            </div>
            </div>
            
            <?php } ?>
            <button type="submit" name="update" class="btn btn-success" style="width:100%;">Update</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    
</body>
</html>