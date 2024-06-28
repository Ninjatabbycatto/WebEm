<?php
    session_start();
    $panel = isset($_SESSION['panel']) ? $_SESSION['panel'] : 0;

    global $panel;
    /* 
        0 = home
        1 = employees
        2 = workplace
        3 = calendar
        5 = notes
        6 = bulletin 
    */

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>WebEM User</title>
        <link rel="stylesheet" href="css/notesPanel.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/Fonts/roboto.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#homeButton').click(function() {
                    $.ajax({
                        url: 'backend/action.php',
                        method: 'POST',
                        data: { panel: 0 },
                        success: function(response) {
                            location.reload(); // Reload the page to reflect the panel change
                        }
                    });
                });
                $('#employeesButton').click(function() {
                    $.ajax({
                        url: 'backend/action.php',
                        method: 'POST',
                        data: { panel: 1 },
                        success: function(response) {
                            location.reload(); // Reload the page to reflect the panel change
                        }
                    });
                });
                $('#workplaceButton').click(function() {
                    $.ajax({
                        url: 'backend/action.php',
                        method: 'POST',
                        data: { panel: 2 },
                        success: function(response) {
                            location.reload(); // Reload the page to reflect the panel change
                        }
                    });
                });
                $('#calendarButton').click(function() {
                    $.ajax({
                        url: 'backend/action.php',
                        method: 'POST',
                        data: { panel: 3 },
                        success: function(response) {
                            location.reload(); // Reload the page to reflect the panel change
                        }
                    });
                });
                $('#notesButton').click(function() {
                    $.ajax({
                        url: 'backend/action.php',
                        method: 'POST',
                        data: { panel: 4 },
                        success: function(response) {
                            location.reload(); // Reload the page to reflect the panel change
                        }
                    });
                });
                $('#bulletinButton').click(function() {
                    $.ajax({
                        url: 'backend/action.php',
                        method: 'POST',
                        data: { panel: 5 },
                        success: function(response) {
                            location.reload(); // Reload the page to reflect the panel change
                        }
                    });
                });
            });
        </script>
    </head>
    <body class="roboto-light">
        <div class="container">
            <?php
                require "templates/navbar.php";
                if ($panel == 0) {      
                    require "templates/homeRightPanel.php";
                }
                else if ($panel == 1) {
                    require "templates/employeesPanel.php";
                }
                else if ($panel == 2) {
                    require "templates/workplacePanel.php";
                }
                else if ($panel == 3) {
                    require "templates/calendarPanel.php";
                }
                else if ($panel == 4) {
                    require "templates/notesPanel.php";
                }
                else if ($panel == 5) {
                    require "templates/BulletinPanel.php";
                }
            ?>
            </div>
        </div>
    </body>


</html>