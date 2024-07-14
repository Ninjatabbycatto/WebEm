<div class = "rightPanelRectangle">
    <div id="employeesContainer">
        <div id="TeamContainer">
            <div id="teamHeader">
                <h1>Team</h1>
            </div>
            <div id="teamBody">
                <?php include 'teamelement.php'; ?>
                <?php include 'teamelement.php'; ?>
                <?php include 'teamelement.php'; ?>
            </div>  
        </div>
        <div id="teamProfInfo">
            <div id="picture"> 
                <img id="profilePicture" class="profile-picture" src="" alt="Profile Picture">
                <script>
                    document.getElementById('profilePicture').src = 'path/to/profile-picture.jpg'; // Update the path accordingly
                </script>
            </div>
            <h1> John Doe</h1>
            <div id="profInfo">
                <div id="detail">
                    <p>Age</p>
                    <p>Gender</p>
                    <p>Department</p>
                    <p>Role</p>
                    <p>Tasks</p>
                    <p>Email</p>
                    <p>Notes</p>
                </div>
                <div id="info">
                    <p>25</p>
                    <p>Male</p>
                    <p>IT</p>
                    <p>back-end developer</p>
                    <p>Not sure dito</p>
                    <p>JDoe@comapny.ph</p>
                    <p>is named john doe</p>
                </div>

            </div>
        </div>
    </div>
</div>
