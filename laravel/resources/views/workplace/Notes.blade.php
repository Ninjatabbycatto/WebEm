<x-layout>
    
    <div class = "rightPanelRectangle">
        <div class = "rowContainer">
            <div class='titleContainer'><h1 class = 'title'>Title</h1></div>
            @foreach ($notes as $note)
                <a href="{{ route('workplace.Notes.show', $note)}}" class='noteDetailContainer'>
                    <div>
                        <h1 class='noteTitle roboto-bold'>{{ $note->title }}</h1>
                        <p class='noteDescription roboto-light'> {{ \Illuminate\Support\Str::limit($note->content, 75) }}</p>
                    </div>
                </a>
            @endforeach

        </div>
        <div class = "rowContainer2">
            @if ($notePrev == null)
                <h1>Please select a note</h1>
            @else
            <div class='titleContainer'>
                <h1 class = 'title2'>{{ $notePrev->title }}</h1>
            </div>
            <div class='actualNote'>
                <p>
                {{ $notePrev->content }}
                </p>
            </div>

            @endif
        
  
        </div>
       
    </div>

</x-layout>

