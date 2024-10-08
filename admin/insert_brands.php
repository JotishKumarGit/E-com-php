<?php

include('./includes/config.php');

if (isset($_POST['insert_brand'])) {
    $brands_title =$_POST['brands_title'];

    // select data from data base
    $select_query = "select * from `brands` where brands_title='$brands_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);
    if ($number > 0) {
        echo "<script>alert('This Brands is already Exist inside the database')</script>";
    } else {
        $insert_query = "insert into `brands` (brands_title) values('$brands_title')";
        $result = mysqli_query($con, $insert_query);
        if ($result) {
            echo "<script>alert('Brands has been inserted successfully')</script>";
        }
    }
}

?>

<form action="" method="POST" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="brand_title" placeholder="Insert Brands" aria-label="Brands"
            aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-info p-2 m-3 border-0" name="insert_brand" value="Insert Brands">
    </div>
</form>