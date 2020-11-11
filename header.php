<?php

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="virwport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap css -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    

    <?php wp_head()?>


</head>
<body>


<header class="head" id="nag">
    <div class="logo">

        <img src="<?php echo get_bloginfo('template_url') ?>/images/logo.svg"/>

        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars" style="font-size:36px"></i>
        </a>

    </div>

    <nav class="topnav" id="myTopnav">

         <ul>
            <li class="active">
                <a href="#">o nas</a>
            </li>
            <li class="active">
                <a href="#">oferta</a>
            </li>
            <li class="active">
                <a href="#">towarzystwa ubezpieczeń</a>
            </li>
            <li class="active">
                <a href="#">dołącz do nas</a>
            </li>
            <li class="active">
                <a href="#">przydatne materiały</a>
            </li>
            <li class="active">
                <a href="#">oddziały</a>
            </li>
            <li class="active">
                <a href="#">oddziały</a>
            </li>

        </ul>

        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }

                var y = document.getElementById("margin");
                if (y.className === "margin") {
                    y.className += " add";
                } else {
                    y.className = "margin";
                }

            }
        </script>



</header>