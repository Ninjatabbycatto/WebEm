
<h1> Create Workplace</h1>
<form method="POST" action=" {{ route('workplace.Workplace.store') }}">
    @csrf
    <div class = "createUserIC">
        <div>
            <x-input-label for="name" :value="__('name')"/>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2"/>
        </div>
        <div>
            <x-input-label for="desc" :value="__('Description')"/>
            <x-text-input id="desc" class="block mt-1 w-full" type="text" name="desc" :value="old('Description')" required autofocus autocomplete="Description" />
            <x-input-error :messages="$errors->get('desc')" class="mt-2"/>
        </div>
        <div>
            <x-input-label for="role" :value="__('Role')"/>
            <x-text-input id="role" class="block mt-1 w-full" type="text" name="role" :value="old('Role')" required autofocus autocomplete="Role" />
            <x-input-error :messages="$errors->get('role')" class="mt-2"/>
        </div>
    </div>
    <button type="submit" style=" background: rgb(49, 49, 49); width: 7vw; height: 3vh; color: #e2e2e2; margin: 1vw; ">
        <p>save</p>
    </button>
    
</form>
