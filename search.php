<?php
    $active = 'Search';
    include './PHP/connection.php';
    include './PHP Component/Navbar.php';
?>
<html>
    <link rel="stylesheet" href="./css/searchstyle.css">
    <body>
        <div class="topbar">
            <input name= "search bar"type="text" placeholder="Search..">
            <button type="submit"><i class="fa fa-search">Search</i></button>
        </div>
    </body>
</html>
<?php
    include './PHP Component/Footer.php';
?>