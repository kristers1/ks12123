@extends ('layouts.layout')

@section ('title', 'FilmDB')

@section ('content')

<article class="centered">
    <div class="main">
        <div class="search-box">
            <form id="search-form">
                <h1 id="search-heading"> Search </h1>
                <div class="form-box">
                    <input type="text" class="search-field" placeholder="Find Films, Actors...">
                    <button class="search-button" type="button"> Go! </button>
                </div>
            
        </div>       
        </div>
</article>

@endsection