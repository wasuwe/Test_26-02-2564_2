<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <center>
    <div class="row">
        <div class="col">
            <a href="revenue.php" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">บันทึกรายรับ</a>
        </div>
        <div class="col">
        <a href="expenditure.php" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">บันทึกรายจ่าย</a>
        </div>        
        <div class="col">
        <a href="doc1.php" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">ออกรายงาน1</a>
        </div>        
        <div class="col">
        <a href="doc2.php" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">ออกรายงาน2</a>
        </div>        
    </div>
    <br>

    <form action="index.php" method="post">
    <div class="input-group">
    <select class="custom-select" id="inputGroupSelect04" name="month">
      <option selected >แสดงทั้งหมด</option>
      <option value="01">มกราคม</option>
      <option value="02">กุมภาพันธ์</option>
      <option value="03">มีนาคม</option>
    </select>
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="submit">Button</button>
  </div>
  </form>
    <br>
    <br>


  <table class="table">
    <thead>
      <tr>
        <th>รายการ</th>
        <th>รายรับ</th>
        <th>รายจ่าย</th>
        <th>วันที่ได้รับ/ใช้จ่าย</th>
        <th>วันที่บันทึก</th>
        <th>วันที่แก้ไขล่าสุด</th>
        <th>#</th>

      </tr>
    </thead>
    <tbody>

      
              
    <?php
    include 'connect.php';

    

    if(empty($_POST['month'])){
      $sql = "SELECT * FROM record ";
    }elseif($_POST['month']=='แสดงทั้งหมด') {      
      $sql = "SELECT * FROM record "; 
    }else{
      $month =  $_POST['month'];
      $sql = "SELECT * FROM record WHERE MONTH(payday) = $month ";
    }
    
    
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

    <td><?php echo $row["payday"]; ?></td>
    <td><?php echo $row["recordday"]; ?></td>
    <td><?php echo $row["editday"]; ?></td>
    <td> 
   <form action="editform.php" method="get">
        <input type="hidden" value="<?php echo $row["id"]; ?>"  name="id" >
    <button class="btn btn-primary">แก้ไข</button>
    <a class="btn btn-primary" href="delete.php?id=<?php echo $row["id"];?> " onClick="javascript:return confirm('คุณต้องการลบข้อมูลใช่หรือไม่');">ลบ</a>
    </form>
    </td>
    </tr>
        
    <?php
      }
    } else {
      // echo "0 results";
    }
      
    ?>

</tbody>
  </table>
  

    

  </center>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>