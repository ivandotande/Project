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
                            <td><?php echo $data['part_price']; ?></td>
                            <td><?php echo $data['part_description']; ?></td>
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