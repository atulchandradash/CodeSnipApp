@extends('Template.app')

@section('content')
    <div class="row">

        {{--SlideBar part--}}
        <div class="col-md-3 my_slidebar ">

            @if(count($getSnippets) > 0)
                @foreach($getSnippets as $item)
                    <a style="color: {{Request::is('SnippetsDelete='.$item->id) ? 'black' : '#a2a2a2'}} ; "
                       href="{{route('Snippets.show', ['id' => $item->id]) }}">
                        <div class="card mt-1 p-1" style=" border-left:  {{Request::is('SnippetsDelete='.$item->id) ? '3px solid lightskyblue !important' : ''}};">
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



        {{--main part--}}
        <div class="col-md-9">
            <div style="height: 92vh; width: 100%; border: 1px solid lightgrey" class="d-flex align-items-center">
                <div class="container-fluid">
                    <div class="row justify-content-center"> <!-- Added justify-content-center class here -->
                        <form action="{{route('Snippets.destroy', ['id'=> $getSelectedSnippets->id])}}" method="POST">
                            @csrf
                            @method('delete')
                            <div class="col card shadow" style="border: 1px solid lightgrey">
                                <div class="container m-2 p-5">
                                    <h5>{{$getSelectedSnippets->Title}}</h5>
                                    <h6 class="text-center">Are You Sure?</h6>
                                    <div class="d-flex justify-content-center mt-3"> <!-- Added this container for centering buttons -->
                                        <button class="btn btn-dark mr-2" type="submit">Delete Now</button>
                                        <button class="btn btn-secondary" type="submit">No</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
