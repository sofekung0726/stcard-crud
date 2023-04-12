<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/.css" type="text/css" />
      <style>
            body {
                  background-image: url('https://www.sumipol.com/wp-content/uploads/2019/11/bg-service-1.png');
                  background-size: cover;
                  background-position: center;
                  background-attachment: fixed;
            }
      </style>

<body>

      <link href='https://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Signika:400' rel='stylesheet' type='text/css'>
      <div class="card-holder">
            <div class="card">
                  <img src="https://www.npru.ac.th/2019/img/logo.png" width="375"><br>

                  <img src="<?= $result['img'] ?>" alt="Avatar" ALIGN="RIGHT" hspace="50" style width="130" height="175">
                  
                  <span class="name">รหัสนักศึกษา :
                        <?= $result['StudentID'] ?>
                  </span>
                  <span class="name">ชื่อ-นามสกุล :
                        <?= $result['name'] ?>
                  </span>
                  <span class="name">สาขาวิชา :
                        <?= $result['se'] ?>
                  </span>

                  <span class=""></span>
                  <span class="VISA"></span>
                  <span class="chipcard"></span>
                  <span class="payweve"></span>
                  <span class="name">อายุ :
                        <?= $result['age'] ?>
                  </span>
                  <span class="name">ปีการศึกษา :
                        <?= $result['year'] ?>
                  </span>
                  <span class="name">
                        <?= $result['nameEng'] ?>
                  </span>
                  <span class="number emboss">
                        <?= $result['embossnumber'] ?>
                  </span>
                  </div>
      </div>
</body>

</html>