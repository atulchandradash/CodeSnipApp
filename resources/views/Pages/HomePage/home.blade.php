@extends('Template.app')

@section('content')
    <div class="row">

        {{-- slidebar --}}
        <div class="col-md-3 my_slidebar ">

            @if(count($getSnippets) > 0)
                @foreach($getSnippets as $item)
                    <a style="color: {{Request::is('SnippetsShow='.$item->id) ? 'black' : '#a2a2a2'}} ; "
                       href="{{route('Snippets.show', ['id' => $item->id]) }}">
                        <div class="card mt-1 p-1" style=" border-left:  {{Request::is('SnippetsShow='.$item->id) ? '3px solid lightskyblue !important' : ''}};">
                            <div class="container">
                                <div class="">
                                    <span>{{$item->Title}}</span>
                                    <div class="row d-flex justify-content-between">
                                        <span style="color: #a2a2a2">{{$item->folder->Name}}</span>
                                        <span style="color: #a2a2a2">{{$item->created_at->diffForHumans()}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            @else
                <span class="d-flex justify-content-center align-items-center" style="color: #a2a2a2">No Snippets Here</span>
            @endif


        </div>



        {{--Main Side--}}
        <div class="col-md-9">
            <div style="height: 92vh; width: 100%;border: 1px solid lightgrey" class="d-flex align-items-center text-center ">
                <div class="container-fluid ">
                    <h4>Welcome to your dashboard!</h4>
                    <a href="{{route('Snippets.index')}}" class="btn btn-dark">Create new Snippets</a>
                </div>
            </div>
        </div>
    </div>


@endsection
