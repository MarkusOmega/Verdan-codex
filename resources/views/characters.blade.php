
<div class="characters">
    @foreach ($characters as $character)
        <div class="card" style="display:flex; padding:12px; background-color: grey; cursor: pointer; max-width: 400px; column-gap: 6px;">
            <div class="col-sm-5">
                <img class="card-img" src="/images/defaultimg.png" alt="Character profile image">
            </div>
            <div class="col-sm-7">
                <div class="card-body">
                    <h3 class="card-title">{{ ucfirst($character->name) }}</h3>
                    <div class="level">Level: {{ $character->level }} </div>
                    <div class="professions">
                        Classes: 
                        @foreach ($character->professions as $profession)
                            {{ $profession->name }},
                        @endforeach    
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>