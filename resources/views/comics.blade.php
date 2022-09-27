@extends('layout.app')

@section('page-title', 'comics')

@section('content')
<div class="container">
    <button class="upper-button">CURRENT SERIES</button>
    <div id="catalogue">
        @foreach(config('comics_list') as $comic)
        <div class="card">
            <a href="">
                <div class="picture">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
                <p>{{$comic['series']}}</p>      
            </a> 
        </div>
        @endforeach
        <button class="lower-button">LOAD MORE</button>
    </div>
</div>
@endsection