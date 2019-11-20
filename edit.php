<?php

include("koneksi.php");


if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nim=$_POST['nim'];
    $nama=$_POST['nama'];


    $result = mysqli_query($mysqli, "UPDATE mahasiswa SET name='$nim',name='$namw' WHERE id=$id");

    header("Location: home.php");
}
?>
<?php

$id = $_GET['id'];


$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE nim=$nim");

while($user_data = mysqli_fetch_array($result))
{
    $nim = $user_data['nim'];
    $nama = $user_data['nama'];
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="home.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nim</td>
                <td><input type="text" name="nim" value=<?php echo $nim;?>></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>