<?php
    include("class/users.php");
    $email=$_SESSION['email'];
    $profile=new users;
    $profile->users_profile($email);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>| Online Quiz System--ADMIN |</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="icon" type="image/png" href="https://c7.uihere.com/files/895/949/319/quiz-logo-game-art-quiz-time-thumb.jpg">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
        <style>
            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: black;
                padding: 15px;
                text-align: center;
            }
            * {box-sizing: border-box}
            body {font-family: "Lato", sans-serif;}

            /* Style the tab */
            .tab {
                float: left;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
                width: 200px;
                height: 100%px;
            }

            /* Style the buttons inside the tab */
            .tab button {
                display: block;
                background-color: inherit;
                color: black;
                padding: 22px 16px;
                width: 100%;
                border: none;
                outline: none;
                text-align: left;
                cursor: pointer;
                transition: 0.3s;
                font-size: 17px;
            }
            .tab button:hover {
                background-color: #ddd;
            }

            /* Create an active/current "tab button" class */
            .tab button.active {
                background-color: #ccc;
            }

            /* Style the tab content */
            .tabcontent {
                float: left;
                padding: 0px 12px;
                border: 1px solid #ccc;
                width: 70%;
                border-left: none;
                height: 100%;
            }
            </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse" style="background-color: black">
            <div class="navbar-header">
                <h3 style="font-weight: bold;color: cornsilk;font-size: large;text-align: center;padding-left: 10px;">Welcome <?php foreach($profile->data as $p){echo $p['name'];}?></h3>
            </div>
            <div class="container-fluid">
                <p class="navbar-text navbar-right" style="padding-right: 15px"><img style="border-radius: 50%" src="img/<?php foreach ($profile->data as $prof){echo $prof['img'];}?>" alt="" width="35px" height="35px">
                    &nbsp;
                    <img style="border-radius: 50%" src="https://www.pngkey.com/png/full/106-1060763_green-dot-icon-png-green-online-dot-png.png" width="7px" height="7px">
                    <span style="font-weight: bolder;color: lightgreen">Online</span>
                    &nbsp;&nbsp;&nbsp;
                    <a href="logout.php" class="navbar-link btn btn-info" style="text-decoration: none;font-weight: bold;color: white">LogOut</a>
                </p>
            </div>
        </nav>
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'analytics')" id="defaultOpen">Analytics</button>
            <button class="tablinks" onclick="openCity(event, 'add_q')">Add a Question</button>
            <button class="tablinks" onclick="openCity(event, 'add_c')">Add a Category</button>
            <button class="tablinks" onclick="openCity(event, 'del_q')">Delete a Question</button>
            <button class="tablinks" onclick="openCity(event, 'del_c')">Delete a Category</button>
        </div>

        <div id="analytics" class="tabcontent">
            <h3>Client Analytics</h3>
            <p>London is the capital city of England.</p>
        </div>

        <div id="Paris" class="tabcontent">
            <h3>Paris</h3>
            <p>Paris is the capital of France.</p>
        </div>

        <div id="Tokyo" class="tabcontent">
            <h3>Tokyo</h3>
            <p>Tokyo is the capital of Japan.</p>
        </div>
        <script>
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
            document.getElementById("defaultOpen").click();
        </script>
        <div class="footer">
            <span style="font-weight: bolder;color: white;padding-left: 430px;">Made with <span style="color: red"><i class="far fa-heart"></i></span> for VITians</span>
            <span style="font-weight: bolder;color: white;padding-left: 300px;">&copy 2020 Soumak Poddar</span>
        </div>
    </body>
</html>