<?php
include ('config.php');

$viewsql = "SELECT * FROM student";

$finalviewsql = mysqli_query($conn,$viewsql);

?>
<html>
<head>

</head>

<body>
    <table border="1" align="center">

        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PHOTO</th>
            <th>ADDRESS</th>
            <th>EMAIL</th>
            <th>Action</th>
        </tr>


<?php
if($finalviewsql == TRUE){
   while($data =  mysqli_fetch_assoc($finalviewsql)){
            $id =  $data['ID'];
            $fullname =  $data['fullname'];
            $photo = $data['photo'];
            $address =  $data['address'];
            $email =  $data['email'];
    ?>
    <tr>
            <td><?php echo $id;?></td>
            <td><?php echo $fullname;?></td>
            <td align="center"><img  src='upload/<?php echo $photo;?>' width=50 height=50 style="border-radius: 50%;"></td>
            <td><?php echo $address;?></td>
            <td><?php echo $email;?></td>
            <td><a href="edit.php?edit_id=<?php echo $id?>">Edit</a> || <a href="delete.php?id=<?php echo $id?>">Delete</a></td>

        </tr>


<?php
            
    }
}
?>
</table>

<button><a href="index.php">HOME</a></button>
</body>
</html>




