<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="Author" content="Ivando Tande">
	<title>PCPartPicker Malaysia | Welcome about</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<?php
include '../php/connection.php';
?>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">PCpartPicker </span>Malaysia</h1>
            </div>
            <nav>
                <ul>
                    <li class="current"><a href="index.php">User Management</a></li>
                    <li><a href="">Inventory Management</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id = "header">
        <h1>
            Manage user from this page
        </h1>
        <div>
        <button class="addUser">Add User</button>
        <button class="removeUser">Delete User's</button>
        </div>
    </section>
    <section id = "table" style="float:left;table-layout:auto;margin-top:20px">
        <div class="container">
            <form>
                <table border="1" >
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>email adrress</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                     $no =1;
                     $sql = mysqli_query($conn,"SELECT USER_ID,USERNAME,USER_EMAIL FROM user_data");
                     while($data = mysqli_fetch_array($sql)){
                    ?>
                    <tr>
                        <td><?php echo $data['USER_ID'];?></td>
                        <td><?php echo $data['USERNAME'];?></td>
                        <td><?php echo $data['USER_EMAIL'];?></td>
                        <td>
                            <button class="modifyUser">Edit</button>
                            <button class="removeUser">Remove</button>
                        </td>
                    </tr>
                    <?php
                     }
                    ?>
                </table>
            </form>
        </div>
    </section>
</body>
</html>