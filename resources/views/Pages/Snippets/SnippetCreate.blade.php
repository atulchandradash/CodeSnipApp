@extends('Template.app')

@section('content')
    <div class="row">

        {{--SlideBar part--}}
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


        {{--main part--}}
        <div class="col-md-9" style="overflow-y: auto; border: 1px solid #ccc;">
            <div >
                <div class="container-fluid ">
                    <h4 style="color: #a2a2a2">Add New Snippets</h4>
                    <hr>
                    @if(session('success'))
                        <div class="alert alert-primary  alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form id="createForm" action="{{route('Snippets.create')}}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-8">
                                <label style="color: #a2a2a2" for="title" >Title</label>
                                <input value="{{old('Title')}}" name="Title" id="title" class="form-control
                                {{$errors->has('Title') ? 'is-invalid' : ''}}">
                                @if($errors->has('Title'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('Title')}}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label style="color: #a2a2a2" for="Folder" >Folder</label>
                                <select name="Folder" class="form-control
                                {{$errors->has('Folder') ? 'is-invalid' : ''}}">
                                    @if(count($GetFolder) > 0)
                                        @foreach($GetFolder as $item)
                                            <option value="{{$item->id}}">{{$item->Name}}</option>
                                        @endforeach
                                    @else
                                        <option disabled>Make Folder First</option>
                                    @endif
                                </select>
                                @if($errors->has('Folder'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('Folder')}}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label style="color: #a2a2a2" for="Code" >Code</label>
                            <input type="hidden" name="EncodedCode" id="EncodedCode" />
                            <textarea  id="Code" class="form-control
                            {{$errors->has('Code') ? 'is-invalid' : ''}}">{{old('Code')}} </textarea>
                            @if($errors->has('Code'))
                                <div class="invalid-feedback">
                                    {{$errors->first('Code')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-row">
                            <button type="submit" class="btn btn-outline-dark ">Save</button>
                            <a href="{{route('Home')}}" class="btn btn-outline-secondary ml-3">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection




