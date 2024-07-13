<!DOCTYPE>
<?php
session_start();
//Including the function php file
include("functions/functions.php");
?>

<html>
    <head>
        <title>estore</title>
        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" href="styles/style.css" media="all" >
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> 
        <!-- new -->
       <script src="https://kit.fontawesome.com/ee3527c9cd.js" crossorigin="anonymous"></script> <!-- fonts cdn -->
       <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </head>


    </head>

<body>


<!-- Main div Container-->
<div class="main_wrapper">

    <!--  Header div Container-->
    <div class="header_wrapper">

    
    <div class="menubar">

        <ul id="menu">
            <li><a href="index.php">home</a></li>
            <li><a href="all_products.php">all products</a></li>
            <li><a href="customer/my_account.php">my account</a></li>
            <li><a href="#">sign up</a></li>
            <li><a href="cart.php">shopping cart</a></li>

        </ul>

        <div id="form">
            <form method="get" action="results.php" enctype="multipart/form-data">
                <input type="text" name="user_query" placeholder="search for products...">
                <input type="submit" name="search" value="search" >
            </form>
        </div>



    </div>




    <!-- Main Content div Container-->
    <div class="content_wrapper">


        <!-- Content div Container-->
        <div id="content_area">


            <div id="products_box">

                <!--If category or brand is NOT select call the function...-->
                <?php getPro(); ?>

                <!--If category is select call the function...-->
                <?php getCatPro(); ?>

                <!--If category is select call the function...-->
                <?php getBrandPro(); ?>

        
            </div>

        </div>

    </div>

    <!-- Footer div Container-->

</div>
</body>
</html>