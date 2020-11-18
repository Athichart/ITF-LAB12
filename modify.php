<!DOCTYPE html>
<html lang="en">

<head>
  <title>Modify</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itf1.mysql.database.azure.com', 'LABITF@itf1', 'kongooi45!', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $_GET['ID'];

$query = "SELECT * FROM guestbook WHERE id = '$id' ";
$Result = mysqli_fetch_array($res);

mysqli_close($conn);
?>

<h1>แก้ไขข้อมูล</h1>
<form action = "insert.php" method = "post" id="CommentForm" >
    Name:<br>
    <input type="text" name = "name" id="idName" placeholder="Enter Name" required value="<?php echo $Result['Name'];?>"> <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" id="idComment" placeholder="Enter Comment" required value="<?php echo $Result['Comment'];?>"></textarea><br>
    Link:<br>
    <input type="text" name = "link" id="idLink" placeholder="Enter Link" required value="<?php echo $Result['Link'];?>"> <br><br>
    <input type="submit" id="commentBtn">
  </form>
</body>
</html>
