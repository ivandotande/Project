<?php
    $active = 'UserManagement';
    include '../PHP/connection.php';
    include './Base/navbar.php';
?>
<body>
    <form method="POST" action="../PHP/insertitem.php">
            <div class="form">
                <form class="register-form">
                    <h1>ADD ITEM</h1>                 
                    <label for="part_name"><b>part_name</b></label>
                    <input type="text" placeholder="Enter part name" name="p_name" required>

                    <label for="part_type"><b>part_type</b></label>
                    <select class="Dropdown" name="p_type" >
                        <option value="CPU">CPU</option>
                        <option value="Motherboard">Motherboard</option>
                        <option value="RAM">RAM </option>
                        <option value="GPU">GPU</option>
                        <option value="nvmessd">NVME SSD</option>
                        <option value="satassd">Sata SSD</option>
                        <option value="hardrive">Hard drive</option>
                        <option value="PSU">Power Supply</option>
                    </select>
                    <br>
                    <br>

                    <label for="part_price"><b>part_price</b></label>
                    <input type="text" placeholder="Enter Price" name="p_price" required>

                    <label for="part_description"><b>part_description</b></label>
                    <input type="text" placeholder="Description" name="part_description" required>
                    <hr>
                    <button type="submit" name = 'submitbtn'class="submitbtn">Submit</button>
                </form>
            </div>
        </form>
</body>