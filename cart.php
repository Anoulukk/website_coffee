<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">
    <script src="./bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <?php
    include('config.php'); ?>
</head>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Eleventh navbar example">
        <div class="container-sm">
            <a class="navbar-brand" href="index.html">
                <img src="./img/158 1.svg" alt="" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="btn" href="home.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn" href="service.php">service</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn" href="contact.php">cotact Us</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">Products</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="coffee.php">Coffee</a></li>
                            <li><a class="dropdown-item" href="cookie.php">cokkies</a></li>
                            <li><a class="dropdown-item" href="cake.php">Cakes</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
            <form action="" method="post" class="navbar-nav me-auto mb-2 mb-lg-0">
                <div class="col">
                    <input class="form-control col" type="text" placeholder="Search Menu" aria-label="Search"
                        name="txt_search">
                </div>
                <div class="col">
                    <input type="submit" value="search" name="btn" class="btn btn-primary mb-3 ">
                </div>
                <div class="cart">
                    <a href="cart.php"><img src="./img/shopping-cart 1.svg" width="80%" alt=""></a>
                </div>
                <li class="nav-item">
                    <a class="btn btn-primary mb-3" href="login.php">Login</a>
                </li>
            </form>
        </div>
    </nav>
</header>

<body>
    <div class="container text-center"id="button1">

        <div class="row">
            <div class="col">
                <div class="container">
                    <div class="row">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col"><br>
                                    <a href="" button type="button"
                                        class="btn btn-outline-secondary">Coffee</button></a>
                                </div>
                                <div class="col"><br>
                                    <a href="#button2" button type="button"
                                        class="btn btn-outline-secondary">Cookie</button></a>
                                </div>
                                <div class="col"><br>
                                    <a href="#button3" button type="button"
                                        class="btn btn-outline-secondary">Cake</button></a>
                                </div>
                            </div>
                        </div>
                        <?php

$sql = "SELECT p.parent_id, p.pr_name AS parent_name, 
pr.pro_id, pr.pro_name, pr.price, pr.stock, pr.picture, pr.description
FROM parent p
JOIN product pr ON p.parent_id = pr.parent_id
WHERE p.parent_id = 1";




                        $result = mysqli_query($conn_db, $sql);
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <div class="col-md-3 box">

                                <div class="img">
                                    <img src="img/<?php echo $row['picture'] ?>" alt="">
                                </div>

                                <div class="product_name">
                                    <?php echo $row['pro_name'] ?>
                                </div>
                                <div class="parent">
                                    <?php echo $row['parent_name'] ?>
                                </div>
                                <div class="price">
                                    ລາຄາ
                                    <?php echo number_format($row['price']) ?> ກີບ
                                </div>

                                <div class="button">
                                    <a href="cart.php?id=<?= $row['pro_id'] ?>" class="btn btn-outline-primary">buy now</a>
                                </div>
                            </div>
                        <?php } ?>


                    </div>
                </div>
            </div>
            <div class="col">
                
            </div>
        </div>
    </div>
    

<div class="container text-center"id="button2">

<div class="row">
    <div class="col">
        <div class="container">
            <div class="row">
                <div class="container text-center">
                    <div class="row">
                        <div class="col"><br>
                            <a href="#button1" button type="button"
                                class="btn btn-outline-secondary">Coffee</button></a>
                        </div>
                        <div class="col"><br>
                            <a href="" button type="button"
                                class="btn btn-outline-secondary">Cookie</button></a>
                        </div>
                        <div class="col"><br>
                            <a href="#button3" button type="button"
                                class="btn btn-outline-secondary">Cake</button></a>
                        </div>
                    </div>
                </div>
                <?php

$sql = "SELECT p.parent_id, p.pr_name AS parent_name, 
pr.pro_id, pr.pro_name, pr.price, pr.stock, pr.picture, pr.description
FROM parent p
JOIN product pr ON p.parent_id = pr.parent_id
WHERE p.parent_id = 2";




                $result = mysqli_query($conn_db, $sql);
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-md-3 box">

                        <div class="img">
                            <img src="img/<?php echo $row['picture'] ?>" alt="">
                        </div>

                        <div class="product_name">
                            <?php echo $row['pro_name'] ?>
                        </div>
                        <div class="parent">
                            <?php echo $row['parent_name'] ?>
                        </div>
                        <div class="price">
                            ລາຄາ
                            <?php echo number_format($row['price']) ?> ກີບ
                        </div>

                        <div class="button">
                            <a href="cart.php?id=<?= $row['pro_id'] ?>" class="btn btn-outline-primary">buy now</a>
                        </div>
                    </div>
                <?php } ?>


            </div>
        </div>
    </div>
    <div class="col">
        2 of 2
    </div>
</div>
</div>
<div class="container text-center"id="button3">

<div class="row">
    <div class="col">
        <div class="container">
            <div class="row">
                <div class="container text-center">
                    <div class="row">
                        <div class="col"><br>
                            <a href="#button1" button type="button"
                                class="btn btn-outline-secondary">Coffee</button></a>
                        </div>
                        <div class="col"><br>
                            <a href="#button2" button type="button"
                                class="btn btn-outline-secondary">Cookie</button></a>
                        </div>
                        <div class="col"><br>
                            <a href="#button3" button type="button"
                                class="btn btn-outline-secondary">Cake</button></a>
                        </div>
                    </div>
                </div>
                <?php

$sql = "SELECT p.parent_id, p.pr_name AS parent_name, 
pr.pro_id, pr.pro_name, pr.price, pr.stock, pr.picture, pr.description
FROM parent p
JOIN product pr ON p.parent_id = pr.parent_id
WHERE p.parent_id = 3";




                $result = mysqli_query($conn_db, $sql);
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-md-3 box">

                        <div class="img">
                            <img src="img/<?php echo $row['picture'] ?>" alt="">
                        </div>

                        <div class="product_name">
                            <?php echo $row['pro_name'] ?>
                        </div>
                        <div class="parent">
                            <?php echo $row['parent_name'] ?>
                        </div>
                        <div class="price">
                            ລາຄາ
                            <?php echo number_format($row['price']) ?> ກີບ
                        </div>

                        <div class="button">
                            <a href="cart.php?id=<?= $row['pro_id'] ?>" class="btn btn-outline-primary">buy now</a>
                        </div>
                    </div>
                <?php } ?>


            </div>
        </div>
    </div>
    <div class="col">
        2 of 2
    </div>
</div>
</div>
</body>

<div class="flex">
    <li><a href="home.php">Home</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="service.php">Our Service</a></li>
    <li><a href="coffee.php">Our Product</a></li>
    <li><a href="contact.php">Contact Us</a></li>

    <li><a href="https://www.facebook.com/" i class="fa-brands fa-facebook fa-xl" ></i></a></li> 
<li><a href="https://www.tiktok.com/"i class="fa-brands fa-tiktok fa-xl" ></i></a></li>
<li><a href="https://www.instagram.com/"i class="fa-brands fa-instagram fa-xl"></i></a></li>

    </ul>
</div>