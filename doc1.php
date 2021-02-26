<?php
error_reporting(0);
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style type="text/css">
      @media print{
        #hid{
          display: none; /* ซ่อน  */
        }
      }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
 

  
    <br>
    <Center>รายงานรายการรายรับรายจ่ายตามเดือน</Center>
    <br>

    <form action="doc1.php" method="post">
    <div class="input-group" >
    <select id="hid" class="custom-select" id="inputGroupSelect04" name="month">
      <option value="01">มกราคม</option>
      <option value="02">กุมภาพันธ์</option>
      <option value="03">มีนาคม</option>
    </select>

  <div class="input-group-append">
    <button id="hid" class="btn btn-outline-secondary" type="submit">Button</button>
    <button id="hid" onclick="window.print();" class="btn btn-primary"> print </button>
  </div>
  </form>

    <table class="table">
    <thead>
      <tr>
        <th>รายการ</th>
        <th>รายรับ</th>
        <th>รายจ่าย</th>

      </tr>
    </thead>
    <tbody>

      
    <?php
    include 'connect.php';

    

    if(empty($_POST['month'])){
    }else{
      $month =  $_POST['month'];
      $sql = "SELECT * FROM record WHERE MONTH(payday) = $month ORDER BY typeid ASC ";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
      ?>
      <tr>
      <td><?php echo $row["name"]; ?></td>
  
      <?php
          if($row["typeid"]=='1'){
              ?> 
              <td><?php echo $row["money"]; ?></td>
              <td>-</td>
              <?php
          }else{
              ?> 
              <td>-</td>
              <td><?php echo $row["money"]; ?></td>            
              <?php
          }
          
      ?>
  
      
         
      </tr>
          
      <?php
        }
      } else {
        
      }

    }
    
    
    
      
    ?>


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>