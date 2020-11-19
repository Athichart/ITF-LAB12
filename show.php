<html>
<head>
<title>ITF Lab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itf1.mysql.database.azure.com', 'LABITF@itf1', 'kongooi45!', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<div class="container">
  <table class="table">
    <thead class="thead-dark">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Link </div></th>
    <th width="300"><div align="center">Action </div></th>
  </tr>
  </thead>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
<tbody>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Link'];?></td>
    <td><a href="modify.php?ID=<?php echo $Result['ID']?>" class="btn btn-success" onclick="alert('แก้ไขข้อมูล')">แก้ไข</a>
        <a href="del.php?ID=<?php echo $Result['ID']?>" class="btn btn-danger" onclick="alert('ลบข้อมูล')">ลบ</a>
    </td>
  </tr>
  </tbody>
<?php
}
?>
</table>
<a href="form.html" class="btn btn-warning" onclick="alert('เพิ่มข้อมูล')">เพิ่ม</a>
<?php
mysqli_close($conn);
?>
</body>
</html>
