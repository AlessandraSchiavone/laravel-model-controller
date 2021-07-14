@extends('layouts.main')

@section('main-content')
<section class="container">
    <div class="cards-container"> 
            @foreach ($movies as $movie)
                <div class="card">
                    <h2>{{ $movie->title }}</h2>
                    <h3>{{ $movie->original_title }}</h3> 
                    <h4>{{ $movie->nationality }}</h4> 
                    <h4>{{ $movie->date }}</h4>
                    <h4>{{ $movie->vote }}</h4>    
                </div>
            @endforeach  
    </div>
</section>
@endsection

@section('page-title', "Movies | Home")

            

