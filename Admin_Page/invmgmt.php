<?php
$active = 'InvManagement';
include '../PHP/connection.php';
include './Base/navbar.php';

?>

<body>
    <h1 style="text-align:center;">Inventory Management</h1>
    <a href="additem.php"><button> Add Item</button> </a>
    <br>
    <section id="table" style="table-layout:auto;margin-top:20px">
        <div class="container">
            <form> 
                <table border="1" style="width:100%;text-align:center">
                    <tr>
                        <th>part_id</th>
                        <th>part name</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>description</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM inventory_data");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                        <tr>
                            <form method="POST" action="">
                            <td><?php echo $data['part_id']; ?></td>
                            <td><?php echo $data['part_name']; ?></td>
                            <td><?php echo $data['part_type']; ?></td>
                            <td> RM <?php echo $data['part_price']; ?></td>
                            <td><?php echo $data['part_description']; ?></td>
                            <td>
                                <button name = 'modifyitembtn' class="modifyitem">Edit</button>
                                <button value ="<?php echo $data['part_id']; ?>" name = 'rmvitm' class="rmvitm">Remove</button>    
                            </td>
                            </form>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </form>
        </div>
    </section>
</body>

<?php
if(isset($_POST['rmvitm'])){
    $del_id = $_POST['rmvitm'];
    $deletesql = "DELETE FROM inventory_data WHERE part_id= '$del_id' " ;
    $result = $conn->query($deletesql);
    if($result == TRUE){
        echo "User Has been deleted sucessfully";
    }else{
        echo "Error: " . $deletesql . "<br>" . mysqli_error($conn);
    }
}  
?>
