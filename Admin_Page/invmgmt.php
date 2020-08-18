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
            <form method="POST"> 
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
                    $no = 1;
                    $sql = mysqli_query($conn, "SELECT * FROM inventory_data");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                        <tr>
                            <td><?php echo $data['part_id']; ?></td>
                            <td><?php echo $data['part_name']; ?></td>
                            <td><?php echo $data['part_type']; ?></td>
                            <td> RM <?php echo $data['part_price']; ?></td>
                            <td><?php echo $data['part_description']; ?></td>
                            <td>
                                <button name = 'modifyitembtn' class="modifyitem">Edit</button>
                                <button href= 'Admin_Page\invmgmt.php' name = 'removeitembtn' class="removeitem">Remove</button>
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

<?php
function removebutton(){
    include '../PHP/connection.php';
    if(isset($_GET['removeitembtn'])){
        $parts_id = filter_input(INPUT_POST,'part_id');;
        $deletesql = "DELETE FROM inventory_data WHERE inventory_data.part_id='$parts_id'" ;
        if($conn->query($deletesql) == TRUE){
            echo "User Has been delted sucessfully";
        }else{
            echo "Error: " . $deletesql . "<br>" . mysqli_error($conn);
            header('Location: #');
        }
    }
}
?>