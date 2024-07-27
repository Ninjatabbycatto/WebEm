
<div class="ObjContainer">
    <input type="checkbox" id="checkbox1" class="checkbox-input">
    <div class="ObjTextContainer">
        <h5 class="roboto-bold">{{ $objective->title}}</h5>
        <p class="roboto-light">{{ \Illuminate\Support\Str::limit($objective->description, 50) }}</p>
        <p class="roboto-light">{{ $objective->endDate }}</p>
    </div>
</div>