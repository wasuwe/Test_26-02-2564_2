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
        <h1>แก้ไข</h1>
        <br>
    
    <div class="row">
        <div class="col">
        
        </div>
        <div class="col">

            

        <form action="edit.php" method="get">
                <?php
                    include 'connect.php';

                    $id = $_GET['id'];

                    $sql = "SELECT * FROM record WHERE id = $id   ";
                    $result = $conn->query($sql);
                
                    if ($result->num_rows > 0) {
                      
                      while($row = $result->fetch_assoc()) {
                        $date = $row["payday"];
                        // echo $date;
                
                ?>

            ชื่อรายการ <input type="text" name="name" value="<?php echo $row["name"];?>"> <br> <br>
            จำนวนเงิน <input type="text" name="money" value="<?php echo $row["money"];?>" > <br> <br> 
            วันที่ใช้จ่าย <input type="date" name="payday" value='<?php echo date('Y-m-j', strtotime($date)); ?>' > <br> <br> 
            
            <input type="hidden" name="id" value="<?php echo $row["id"];?>">
            <input type="hidden" name="typeid" value="<?php echo $row["typeid"];?>">
            <a class="btn btn-secondary" href="index.php" role="button">ย้อนกลับ</a>
            <button type="submit" class="btn btn-success " >บันทึก</button>
        </form>
                  <?php          
        }
                    } else {
                      echo "0 results";
                    }
                   ?>         


        </div>
        <div class="col">
        
        </div>
    </div>

  </center>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>