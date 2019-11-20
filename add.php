<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="home.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nim</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

 
    if(isset($_POST['Submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];

        include("koneksi.php");

  
        $result = mysqli_query($mysqli, "INSERT INTO mahasiswa(nim,nama) VALUES('$nim','$nama')");

        echo "User added successfully. <a href='home.php'>View Users</a>";
    }
    ?>
</body>
</html>