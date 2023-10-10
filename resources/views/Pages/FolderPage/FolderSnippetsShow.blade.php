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

        {{--Main part--}}
        <div class="col-md-9" style="overflow-y: auto; border: 1px solid #ccc;">
            <div >
                <div class="container-fluid " >
                    <div class="row d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="p-2" style="color: #a2a2a2">{{$getSelectedSnippets->Title}}</h4>
                            <label style="color: #a2a2a2" for="Code" >{{ $getSelectedSnippets->created_at->format('Y-m-d h:i A') }}</label>
                        </div>
                        <div>
                            <a href="{{route('Folder.SnippetsEdit', ['id' => $getFolderInfo->id, 's_id' => $item->id])}}"  class="editDeleteBtn"><i class="fa-solid fa-file-pen fa-xl"></i></a>
                            <a href="{{route('Folder.SnippetsDelete',['id' => $getFolderInfo->id, 's_id' => $item->id])}}"  class="editDeleteBtn"><i class="fa-solid fa-trash fa-xl"></i></a>
                        </div>
                    </div>


                    <textarea   name="Code" id="CodeShow" class="form-control"> {{base64_decode($getSelectedSnippets->Snippets)}}</textarea>
                </div>
            </div>
        </div>
    </div>
@endsection
