
    <div id="picture"> 
        <img id="profilePicture" class="profile-picture" src="" alt="Profile Picture">
        <script>
            document.getElementById('profilePicture').src = 'path/to/profile-picture.jpg'; // Update the path accordingly
        </script>
    </div>
    <div class="details">
        <h3><?php echo e($user->firstName); ?> <?php echo e($user->lastName); ?></h3>
        <p>developer</p>
    </div>
<?php /**PATH /Users/leonbuena/WebEm/laravel copy/resources/views/partials/teamElement.blade.php ENDPATH**/ ?>