<?php
$active = 'Search';
include './PHP/connection.php';
include './PHP Component/Navbar.php';
?>
<html>
<link rel="stylesheet" href="./css/searchstyle.css">

<body>
    <form action="search.php" method="get">
        <div class="topbar">
            <input  type="text" placeholder="Search.." name="search">
            <button type="submit" value="search"><i class="fa fa-search">Search</i></button>
        </div>
    </form>
    <form>
        <table border="1" style="width:100%;text-align:center">
            <tr>
                <th>part name</th>
                <th>Type</th>
                <th>Price</th>
                <th>description</th>
                <th>Actions</th>
            </tr>
            <?php
            if(isset($_GET['search'])){
                $search = $_GET['search'];
                $sql = mysqli_query($conn, "SELECT * FROM inventory_data WHERE part_name LIKE'%".$search."%'");
            }else{
                $sql = mysqli_query($conn, "SELECT * FROM inventory_data");
            }
            while ($data = mysqli_fetch_array($sql)) {
            ?>
                <tr>
                    <form>
                        <?php
                        $go1=$data['part_name'];
                        ?>
                        <td><a href="http://google.com/search?q=+<?php echo $go1?>+&tbm=shop"><?php echo $go1; ?></td>
                        <td><?php echo $go1; ?></td>
                        <td> RM <?php echo $data['part_price']; ?></td>
                        <td><?php echo $data['part_description']; ?></td>
                        <td>
                            <form action ="search.php" method="get">
                            <button name='GO' id="GO" value="Gsearch">Search</button>
                            </form>
                        </td>
                    </form>
                </tr>
            <?php
            }
            ?>
        </table>
    </form>
</body>

</html>

<?php
include './PHP Component/Footer.php';
// if(isset($_GET['Gsearch'])){
//     header('http://google.com/search?q='+ $go1+'&tbm=shop');
// }
// else{
//     echo"Error";
// }
?>
<!-- <script>
    document.getElementById('GO').onclick = function() {
        var q = document.getElementById('GO');
        window.open('http://google.com/search?q='+q+'&tbm=shop');
    }
</script> -->