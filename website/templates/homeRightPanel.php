
        <!--Main Panel-->

        <div class = "rightPanelRectangle">
            <div id="HomeContainer">
                
                <div id = "HomeHeader">
                    <div id="HomeDates">
                        <h1> Tuesday <br></h1>
                        <p>November 12, 2024</p>
                    </div>
                    <div id="profile">
                        <div id="picture">
                            <img id="profilePicture" class="profile-picture" src="" alt="Profile Picture">
                            <script>
                                document.getElementById('profilePicture').src = 'path/to/profile-picture.jpg'; // Update the path accordingly
                            </script>
                        </div>
                        <div id="texts">
                            <h1> Juan Dela Cruz <br></h1>
                            <p>Software Developer</p>
                        </div>
                    </div>
                </div>
                
                <div id="HomeBody">
                    <div class="roboto-medium" id="Objectives">
                        <div id="ObjHeader">
                            <p>Objectives</p>
                        </div>
                        <?php
                            require "templates/ObjectiveItem.php";
                            require "templates/ObjectiveItem.php";
                            require "templates/ObjectiveItem.php";
                        ?>
                    </div>
                </div>
            </div>
        </div>
