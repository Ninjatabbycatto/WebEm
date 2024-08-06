<x-app-layout>
    <div class = "rightPanelRectangle">
        <div id="employeesContainer">
            <div id="TeamContainer">
                <div id="teamHeader">
                    <h1>Team</h1>
                    <a href="{{ route('workplace.employee.add') }}">
                        <svg data-slot="icon" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" style = "height: 3vw; width: 3vw; margin-right: 1vw;">
                            <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z"></path>
                        </svg>
                    </a>
                </div>
                <div id="teamBody" >
                    <!---- put teamelements here  ---->

                @if ($teams === NULL)
                    <p>Not In a workplace</p>
                @else
                    
                    @foreach($teams as $team)
                            @foreach ($team->users()->get() as $teamuser)
                                <a href="{{ route('workplace.employee.profile', ['id' => $teamuser->id]) }}" class="teamperson">
                                    @include('partials.teamElement', ['user' => $teamuser])
                                </a>
                            @endforeach
                    @endforeach
                @endif
                    

                    
                </div>  
            </div>

            <div id="teamProfInfo">
                @if ($addUser == 1)
                    @include('workplace.employeePartials.addEmployee')
                @else
                    <div id="picture"> 
                        <img id="profilePicture" class="profile-picture" src="" alt="Profile Picture">
                        <script>
                            document.getElementById('profilePicture').src = 'path/to/profile-picture.jpg'; // Update the path accordingly
                        </script>
                    </div>
                    <h1 class="roboto-bold" style="font-size: 1.5vw;"> {{ $disPuser->firstName}} {{ $disPuser->lastName}}</h1>
                    <div id="profInfo">
                        <div id="detail">
                            <p>Age</p>
                            <p>Gender</p>
                            <p>Department</p>
                            <p>Role</p>
                            <p>Email</p>
                            <p>Notes</p>
                            @if( $addButton == 1) 
                                <p>team</p>
                            @endif
                        </div>
                        <div id="info">
                            <p>{{ $disPuser->age}}</p>
                            <p>{{ $disPuser->gender}}</p>
                            <p>IT</p>
                            <p>back-end developer</p>
                            <p>{{ $disPuser->firstName}}@gmail.com</p>
                            <p>is named john doe</p>
                            @if( $addButton == 1) 
                                <form action="{{route("workplace.employee.store", ['user' => $disPuser->id])}}" method="POST">
                                    @csrf
                                    <select id="teamDropdown" name="team_id">
                                        @foreach( $user->teams()->get() as $team)
                                            <option value="{{$team->id}}">{{$team->role}}</option>
                                        @endforeach
                                    </select>
                                            <button type="submit" id="addEmployeeButton">Add Employee</button>
                                    </a>
                                </form>
                            @endif
                            
                        </div>
                        
                    </div>
                @endif
            </div>
        </div>
    </div>

</x-app-layout>



