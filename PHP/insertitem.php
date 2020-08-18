<?php
    include "./connection.php";
    try{
    $part_name             = filter_input(INPUT_POST,'p_name',FILTER_SANITIZE_STRING);
    $part_type             = $_POST['part_type']; 
    $part_price            = filter_input(INPUT_POST,'p_price');
    $part_description      = filter_input(INPUT_POST,'p_price');
    
    $finderror = "SELECT * FROM inventory_data WHERE P_NAME=$p_name";
    $errorresult = $conn->query($finderror);
    if (mysqli_num_rows($errorresult) == 1) {
        echo("Item already Exist");
      }
    else{
        $sql = "INSERT INTO inventory_data (part_name,part_type,part_price,part_description)
        VALUES ('$part_name','$part_type','$part_price','$part_description')";
        if($conn->query($sql) == TRUE){
            echo "Records added successfully.";
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            header('Location: ..\Admin_Page\additem.php')
        }
    }
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
    ?>