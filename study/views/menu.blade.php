@extends('layouts.main')

@section('menu')
    {{$drawMenu}}
   <div>
     <ul class= navbar-nav-mr-auto>
    @foreach($drawMenu as $item)
         <li class= nav-item>
         <a class = nav-link href=" {{ $item['href']}}"> {{$item['title']}} <span class=sr-only>(current)</span></a>
         </li>
     @endforeach
     </ul>
   </div>
@endsection