<?php
include "connection.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--CSS File-->
    <link rel="stylesheet" href="css/style.css">
    <!--CSS File-->
    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--Bootstrap CDN-->

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Fontawesome CDN-->
</head>

<body>
    <div class="bg">
        <?php
        include "header.php";
        ?>

        <div class="container-fluid">
            <div class="row p-3">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-2 d-none d-md-block">
                            <div class="row p-2">
                                <div class="col-12">
                                    <h3 class="text-white pb-4"><i class="fa-solid fa-arrows-to-dot"></i>&nbsp;Filter</h3>
                                </div>
                                <div class="col-12">
                                    <div class="text-white">

                                        <?php
                                        $query = DATABASE::search("SELECT `catogary_name` FROM `catogaries`");
                                        $check = mysqli_num_rows($query) > 0;

                                        if ($check) {
                                            while ($row = mysqli_fetch_assoc($query)) {
                                        ?>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        <?php echo $row['catogary_name']; ?>
                                                    </label>
                                                </div>

                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-8 col-lg-10">
                            <div class="row p-2">
                                <div class="row col-12">
                                    <div class="row text-white col-12">
                                        <?php

                                        $query2 = DATABASE::search("SELECT `item_name`,`pic_link` FROM `item` INNER JOIN `pic` ON `item`.`item_id` = `pic`.`pic_id`");
                                        $check2 = mysqli_num_rows($query2) > 0;

                                        if ($check2) {
                                            while ($row2 = mysqli_fetch_assoc($query2)) {
                                        ?>

                                                <div class="card m-4" style="width: 18rem;">
                                                    <img src="<?php echo $row2['pic_link']; ?>" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php echo $row2['item_name'] ?></h5>
                                                        <p class="card-text"></p>
                                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                                    </div>
                                                </div>

                                        <?php
                                            }
                                        }

                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>