<h1>Add Employee</h1>
<p>Select an employee to add</p>
<div class="addEmpContainer">
    @foreach ( App\Models\UserInfo::all() as $user )
        <a href="{{route("workplace.employee.profile", ['id' => $user->id, 'addButton' => 1 ])}}">
            <div class="AddEmployeeContainer">

                <h1>{{$user->firstName}} </h1>
            </div>
        </a>
    @endforeach
</div>