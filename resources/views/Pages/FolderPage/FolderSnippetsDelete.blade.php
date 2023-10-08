@extends('Template.app')

@section('content')
    <div class="row">

        {{--Slide part--}}
        <div class="col-md-3 my_slidebar ">
            <div class="p-2 d-flex justify-content-between" style="border-bottom: 1px solid lightgrey">
                <span >{{$getFolderInfo->Name}}</span>
                <div>
                    <a href="#"  class="editDeleteBtn"><i class="fa-solid fa-file-pen "></i></a>
                    <a href="#"  class="editDeleteBtn"><i class="fa-solid fa-trash "></i></a>
                </div>
            </div>
            @if(count($getFolderSnippets) > 0)
                @foreach($getFolderSnippets as $item)
                    <a style="color: {{Request::is('FolderID='.$getFolderInfo->id.'/SnippetsID='.$item->id) ? 'black' : '#a2a2a2'}} ; "
                       href="{{route('Folder.SnippetsShow', ['id' => $getFolderInfo->id, 's_id' => $item->id]) }}">
                        <div class="card mt-1 p-1" style=" border-left:  {{Request::is('FolderID='.$getFolderInfo->id.'/SnippetsID='.$item->id) ? '3px solid lightskyblue !important' : ''}};">
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
