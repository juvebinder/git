<?php require_once("functions/safe.php"); ?>

<?php ob_start(); ?>
<!DOCTYPE html>


<html>

<head>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css\main.css">
    <title></title>

    <style>
        @import url("css/all.css");
    </style>
</head>

<body>

    <div class="container-fluid">

        <a href="pr.en.php" button type="button" name="control_1" class=" btn btn-outline-danger btn-lg position-absolute "><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-right-square-fill mt-3" viewBox="0 0 16 16">
                <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z" />
            </svg></a><br><br><br><br><br><br>
        <nav class="navbar navbar-light bg-light border border-danger navbar-expand-xl">
            <form class="d-flex" style="width:65rem;">
                <input class="form-control me-2 m-auto border-danger" type="text" maxlength="200">
                <button class="btn btn-outline-danger" type="button" id="live_search" name="live_search"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg></button>
                <div id="search_result"></div>
            </form>


        </nav>
    </div>
    <div id="searchresult"></div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
                    $("#live_search").keyup(function() {

                        var input = $(this).val();

                        if (input != "") {
                            $.ajax({
                                url: "livesearch.php",
                                method: "POST",
                                data: {
                                    input: input
                                },

                                success: function(data) {
                                    $("#searchresult").html(data);
                                    $("#searchresult").css("display", "block");
                                }

                            });
                        } else {
                            $("#searchresult").css("display", "none");
                        }

                    });
    </script>
</body>

</html>
<?php ob_end_flush(); ?>