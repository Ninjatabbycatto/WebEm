<x-app-layout>
    <div class = "rightPanelRectangle">
        <div id="employeesContainer">
            <div id="TeamContainer">
                <div id="teamHeader">
                    <h1>Team</h1>
                </div>
                <div id="teamBody" >
                    <!---- put teamelements here  ---->

                @if ($teams === NULL)
                    <p>Not In a workplace</p>
                @else
                    @foreach ($teams->users as $user)
                        <a href=" {{ route('workplace.employee.profile', ['id' => $user->id])}}" class="teamperson">
                        @include('partials.teamElement', ['user' => $user])
                        </a>
                        
                    @endforeach
                @endif
                    

                    
                </div>  
            </div>
            <div id="teamProfInfo">
                <div id="picture"> 
                    <img id="profilePicture" class="profile-picture" src="" alt="Profile Picture">
                    <script>
                        document.getElementById('profilePicture').src = 'path/to/profile-picture.jpg'; // Update the path accordingly
                    </script>
                </div>
                <h1> {{ $disPuser->firstName}} {{ $disPuser->lastName}}</h1>
                <div id="profInfo">
                    <div id="detail">
                        <p>Age</p>
                        <p>Gender</p>
                        <p>Department</p>
                        <p>Role</p>
                        <p>Email</p>
                        <p>Notes</p>
                    </div>
                    <div id="info">
                        <p>{{ $disPuser->age}}</p>
                        <p>{{ $disPuser->gender}}</p>
                        <p>IT</p>
                        <p>back-end developer</p>
                        <p>{{ $disPuser->firstName}}@gmail.com</p>
                        <p>is named john doe</p>
                    </div>
    
                </div>
            </div>
        </div>
    </div>

</x-app-layout>



