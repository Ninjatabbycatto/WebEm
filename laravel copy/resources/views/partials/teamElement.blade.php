
    <div id="picture"> 
        <img id="profilePicture" class="profile-picture" src="" alt="Profile Picture">
        <script>
            document.getElementById('profilePicture').src = 'path/to/profile-picture.jpg'; // Update the path accordingly
        </script>
    </div>
    <div class="details">
        <h3>{{ $user->firstName }} {{ $user->lastName }}</h3>
        <p>developer</p>
    </div>
