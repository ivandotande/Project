<?php
$active = 'UserManagement';
include '../php/connection.php';
include './Base/navbar.php';
?>

<body>
    <h1 style="text-align:center;">User Management</h1>
    <a href="adduser.php">
        <button style="
            position: absolute;
            top : 30% ;
            margin-left: auto;
            text-align:center;
	        color: #e8491d ;">
            Add User
        </button>
    </a>
    <br>
    <section id="table" style="table-layout:auto;margin-top:20px">
        <div class="container">
            <form>
                <table border="1" style="width:100%;text-align:center">
                <form method="POST" action="">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email Adrress</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    $no = 1;
                    $sql = mysqli_query($conn, "SELECT USER_ID,USERNAME,USER_EMAIL FROM user_data");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                        <tr>
                            <td><?php echo $data['USER_ID']; ?></td>
                            <td><?php echo $data['USERNAME']; ?></td>
                            <td><?php echo $data['USER_EMAIL']; ?></td>
                            <td>
                                <button class="modifyUser">Edit</button>
                                <button name= "idtable"value = <?php echo $data ['USER_ID']?> class="removeUser">Remove</button>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </form>
                </table>
            </form>
        </div>
    </section>
</body>

</html>

<?php
if(isset($_POST['idtable'])){
    $del_id = $_POST['idtable'];
    $deletesql = "DELETE FROM user_data WHERE 'user_data.USER_ID'= '$del_id' " ;
    $result = $conn->query($deletesql);
    if($result == TRUE){
        echo "User Has been deleted sucessfully";
    }else{
        echo "Error: " . $deletesql . "<br>" . mysqli_error($conn);
    }
}  
?>