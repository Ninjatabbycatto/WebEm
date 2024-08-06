<x-app-layout>
    <div class = "rightPanelRectangle">
        <div id="WorkplaceContainer">

                <div id="WorkplaceHeader">
                    @if($teams === NULL)
                        <p>no workplaces</p>
                    @else
                        @foreach( $teams as $team)
                        <div class="WorkplaceListItem">
                            <a href="{{route('workplace.Workplace.view', ['id' => App\Models\Workplaces::find($team->workplace_id) ])}}">
                                <h1 class="roboto-black"> {{ App\Models\Workplaces::find($team->workplace_id)->name }}</h1>
                                <p> {{ App\Models\Workplaces::find($team->workplace_id)->desc }}</p>
                            </a>
                        </div>
                        @endforeach
                    @endif
                    <a href="{{ route('workplace.Workplace.create') }}">
                        <div class="addWorkplaceButton">
                            <svg  data-slot="icon" aria-hidden="true" fill="#e2e2e2" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" d="M4.5 2A1.5 1.5 0 0 0 3 3.5v13A1.5 1.5 0 0 0 4.5 18h11a1.5 1.5 0 0 0 1.5-1.5V7.621a1.5 1.5 0 0 0-.44-1.06l-4.12-4.122A1.5 1.5 0 0 0 11.378 2H4.5ZM10 8a.75.75 0 0 1 .75.75v1.5h1.5a.75.75 0 0 1 0 1.5h-1.5v1.5a.75.75 0 0 1-1.5 0v-1.5h-1.5a.75.75 0 0 1 0-1.5h1.5v-1.5A.75.75 0 0 1 10 8Z" fill-rule="evenodd"></path>
                            </svg>    
                        </div>
                    </a>
                </div>
                @if($workplaceDisp === null)
                <div id="createUserContainer">
                    @include('workplace.workplacePartials.createWorkplace')
                </div>
                @else
                <div id="createUserContainer">
                    @include('workplace.workplacePartials.viewWorkplace', ['workplace' => $workplaceDisp])
                </div>
                @endif

        </div>
    </div>
</x-app-layout>

