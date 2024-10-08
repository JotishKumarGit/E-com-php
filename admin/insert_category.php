<?php include('./includes/config.php');

if (isset($_POST['insert_cat'])) {
    $category_title = $_POST['cat_title'];

    // select data from data base
    $select_query = "select * from `category` where category_title='$category_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);
    if ($number > 0) {
        echo "<script>alert('This Category is already Exist inside the database')</script>";
    } else {
        $insert_query = "insert into `category` (category_title) values('$category_title')";
        $result = mysqli_query($con, $insert_query);
        if ($result) {
            echo "<script>alert('Category has been inserted successfully')</script>";
        }
    }
}

?>

<form action="" method="POST" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert Category" aria-label="Category"
            aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <!-- <button class="bg-info p-3 my-3 border-0 ">Insert Category</button> -->
        <input type="submit" class="bg-info p-2 m-3 border-0" name="insert_cat" value="Insert Category">
    </div>
</form>