<?php require_once("classes/allclass.php"); ?>
<?php require_once("classes/database.class.php"); ?>
<?php // require_once("core/init.php"); 
?>
<?php require_once("functions/safe.php"); ?>
<?php // $db = new \xyz\db\Database(); 
?>
<?php ob_start(); ?>
<!DOCTYPE html>


<html>

<head>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css\main.css">
    <title></title>

    <style>
        @import url("css/all.css");
    </style>
</head>

<body>

    <div class="container">






        <form method="POST" id="pr_en" enctype="multipart/form-data">
            <div class="input-group my-4 mx-2">
                <span class="input-group-text"> </span>
                <input type="text" id="pr_en_1" name="pr_en_1" class="form-control" placeholder="pr_en_1">
                <small class="form-text error"></small>
                <input type="text" class="form-control" id="pr_en_2" name="pr_en_2" placeholder="pr_en_2">
            </div>
            <div class="input-group my-4 mx-2">
                <div class="row">
                    <div class="col-3">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="email" class="form-control" id="pr_en_3" name="pr_en_3" placeholder="pr_en_3">
                        <p class="text-danger">*</p>
                        <div id="emailHelp" class="form-text"></div>
                    </div>

                    <div class="col-3">
                        <label for="exampleInputPassword1" class="form-label"></label>
                        <input type="password" class="form-control" id="pr_en_4" name="pr_en_4" placeholder="pr_en_4">
                        <p class="text-danger">*</p>
                    </div>

                    <div class="col-3">
                        <label for="formGroupExampleInput" class="form-label"></label>
                        <input type="text" class="form-control" id="pr_en_5" name="pr_en_5" placeholder="pr_en_5">
                    </div>
                    <div class="col-3">
                        <label for="formGroupExampleInput" class="form-label"></label>
                        <input type="text" class="form-control" id="pr_en_6" name="pr_en_6" placeholder="pr_en_6">
                        <small class="form-text error"></small>
                    </div>
                    <div class="col-6">
                        <label for="formGroupExampleInput" class="form-label"></label>
                        <input type="text" class="form-control" id="pr_en_7" name="pr_en_7" placeholder="pr_en_7">
                    </div>
                    <div class="col-6">
                        <label for="formGroupExampleInput" class="form-label"></label>
                        <input type="text" class="form-control" id="pr_en_8" name="pr_en_8" placeholder="pr_en_8">
                    </div>
                </div>
            </div>
            <div class="input-group my-4 mx-2">
                <span class="input-group-text"></span>
                <input type="text" class="form-control" id="pr_en_9" name="pr_en_9" placeholder="pr_en_9">
                <input type="email" class="form-control" id="pr_en_10" name="pr_en_10" placeholder="pr_en_10">
            </div>
            <div class="input-group my-4 mx-2">
                <label for="validationTextarea" class="form-label"></label>
                <textarea class="form-control" id="pr_en_11" name="pr_en_11" placeholder="pr_en_11" rows="4"></textarea>
            </div>

            <div class="input-group my-4 mx-2">
                <label for="validationTextarea" class="form-label"></label>
                <textarea class="form-control" id="pr_en_12" name="pr_en_12" placeholder="pr_en_12" rows="6"></textarea>
                <small class="form-text error"></small>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="pr_en_13_1" name="pr_en_13" value="sell">
                <label class="form-check-label" for="validationFormCheck1">SELL</label>
                <div class="invalid-feedback">More example invalid feedback text</div>
            </div>
            <div class="form-check ">
                <input type="radio" class="form-check-input" id="pr_en_13_2" name="pr_en_13" value="rent">
                <label class="form-check-label" for="validationFormCheck2">RENT</label>
                <div class="invalid-feedback">More example invalid feedback text</div>
            </div>
            <div class="form-check ">
                <input type="radio" class="form-check-input" id="pr_en_13_3" name="pr_en_13" value="sell and rent">
                <label class="form-check-label" for="validationFormCheck3">SELL AND RENT</label>
                <div class="invalid-feedback">More example invalid feedback text</div>
            </div><br><br>

            <div class="mb-3">
                <input type="file" class="form-control" id="pr_en_14" name="pr_en_14">
                <p><small> The file type must be <mark>png</mark> or <mark>jpg</mark></small></p>
            </div>
            <div class="mb-3">
                <input type="file" class="form-control" id="pr_en_15" name="pr_en_15">
                <p><small> The file type must be <mark>png</mark> or <mark>jpg</mark></small></p>
            </div>
            <div class="mb-3">
                <input type="file" class="form-control" id="pr_en_16" name="pr_en_16">
                <p><small> The file type must be <mark>png</mark> or <mark>jpg</mark></small></p>
            </div>
            <div class="mb-3">
                <input type="file" class="form-control" id="pr_en_17" name="pr_en_17">
                <p><small> The file type must be <mark>png</mark> or <mark>jpg</mark></small></p>
            </div>
            <div class="mb-3">
                <input type="file" class="form-control" id="pr_en_18" name="pr_en_18">
                <p><small> The file type must be <mark>png</mark> or <mark>jpg</mark></small></p>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="pr_en_19" name="pr_en_19" value="" required>
                    <label class="form-check-label" for="invalidCheck2">
                        <a href="allabouteximboxes.php">Agree to terms and conditions</a>
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <p id="result_pr_en"></p>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" id="pr_en_20" name="pr_en_20" type="submit">Send<span class="pr_en_20_a"></span></button>
            </div>
            <div class="mb-3">
                <button class="btn btn-secondary" id="pr_en_21" name="pr_en_21" type="submit">Update<span class="pr_en_21_a"></span></button>
            </div>
            <div class="mb-3">
                <table class="table" id="userTable">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $members = $db->getRow("SELECT * FROM members WHERE mmember_id_== member_id_", array('$ID'));
                        ?>
                        <tr>
                            <th scope="row"><?php echo $members->pr_en_1_; ?></th>
                            <td><?php echo $members->pr_en_2_; ?></td>
                            <td><?php echo $members->pr_en_3_; ?></td>
                            <td><?php echo $members->pr_en_5_; ?></td>
                            <td><?php echo $members->pr_en_6_; ?></td>
                            <td><?php echo $members->pr_en_7_; ?></td>
                            <td><?php echo $members->pr_en_8_; ?></td>
                            <td><?php echo $members->pr_en_9_; ?></td>
                            <td><?php echo $members->pr_en_10_; ?></td>
                            <td><?php echo $members->pr_en_11_; ?></td>
                            <td><?php echo $members->pr_en_12_; ?></td>
                            <td><?php echo ($members->pr_en_13_ == 'sell') ? 'SELL' : (($members->pr_en_13_ == 'rent') ? 'RENT' : 'SELL AND RENT'); ?></td>
                            <td><img src="uploads/<?php echo $members->pr_en_14_; ?>" width="120" height="120"></td>
                            <td><img src="uploads/<?php echo $members->pr_en_15_; ?>" width="120" height="120"></td>
                            <td><img src="uploads/<?php echo $members->pr_en_16_; ?>" width="120" height="120"></td>
                            <td><img src="uploads/<?php echo $members->pr_en_17_; ?>" width="120" height="120"></td>
                            <td><img src="uploads/<?php echo $members->pr_en_18_; ?>" width="120" height="120"></td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.0.min.js"></script>





    <script>
        var SITE_URL = "https://www.sandalye.com";
        $(function() {
            $("#pr_en").on('submit', function(e) {
                e.preventDefault();
                $(".pr_en_20_a").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
                $("#pr_en_20").prop("disabled", true);
                $.ajax({
                    type: "post",
                    url: SITE_URL + '/myajax.php?page=pr_en_22',
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $(".pr_en_20_a").html("");
                        $("#pr_en_20").prop("disabled", false);
                        data = data.split(":::", 2);
                        var message = data[0];
                        var mistake = data[1];
                        if (mistake == 'warning') {
                            $("#result_pr_en").html('<div class="alert alert-warning">' + message + '</div>');
                        } else if (mistake == 'danger') {
                            $("#result_pr_en").html('<div class="alert alert-danger">' + message + '</div>');
                        } else if (mistake == 'success') {
                            $("#result_pr_en").html('<div class=alert alert-success">' + message + '</div>');

                        }

                    }



                })
            })

        });
        $(function() {
            $("#pr_en").on('submit', function(e) {
                e.preventDefault();
                $(".pr_en_21_a").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
                $("#pr_en_21").prop("disabled", true);
                $.ajax({
                    type: "post",
                    url: SITE_URL + '/myajax.php?page=pr_en_23',
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $(".pr_en_21_a").html("");
                        $("#pr_en_21").prop("disabled", false);
                        data = data.split(":::", 2);
                        var message = data[0];
                        var mistake = data[1];
                        if (mistake == 'warning') {
                            $("#result_pr_en").html('<div class="alert alert-warning">' + message + '</div>');
                        } else if (mistake == 'danger') {
                            $("#result_pr_en").html('<div class="alert alert-danger">' + message + '</div>');
                        } else if (mistake == 'success') {
                            $("#result_pr_en").html('<div class=alert alert-success">' + message + '</div>');

                        }

                    }



                })
            })

        });
    </script>
</body>

</html>

<?php ob_end_flush(); ?>