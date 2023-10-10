<?php

namespace App\Http\Controllers;

use App\Models\Snippets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SnippetsController extends Controller
{
    //

    public function index()
    {
        $getSnippets =  Snippets::where('User_id', Auth::user()->id)->get();


        return view('Pages.Snippets.SnippetCreate', ['getSnippets' => $getSnippets]);
    }

    public function create(Request $request)
    {

        $validatedData = $request->validate([
            'Title' => 'required|min:5',
            'EncodedCode' => 'required|min:15',
            'Folder' => 'required'
        ]);


        $data = new Snippets();

        $data->Title = $request->input('Title');
        $data->Snippets = $request->input('EncodedCode');
        $data->Folder_id = $request->input('Folder');
        $data->User_id = Auth::user()->id;

        $data->save();



        return redirect()->back()->with('success', "Snippets Add Successfully");

    }

    public function show($id)
    {
        $getSnippets =  Snippets::where('User_id', Auth::user()->id)->get();

        $getSelectedSnippets =  Snippets::where('User_id', Auth::user()->id)->where('id' , $id)->first();


        return view('Pages.Snippets.SnippetShow', ['getSnippets' => $getSnippets , 'getSelectedSnippets' => $getSelectedSnippets]);
    }



    public function updateShow($id)
    {
        $getSnippets =  Snippets::where('User_id', Auth::user()->id)->get();
        $getSelectedSnippets =  Snippets::where('User_id', Auth::user()->id)->where('id' , $id)->first();
        return view('Pages.Snippets.SnippetsEdit', ['getSnippets' => $getSnippets, 'getSelectedSnippets' => $getSelectedSnippets]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Title' => 'required|min:5',
            'EncodedCode' => 'required|min:15',
            'Folder' => 'required'
        ]);



        $data = Snippets::find($id);

        $data->Title = $request->input('Title');
        $data->Snippets = $request->input('EncodedCode');
        $data->Folder_id = $request->input('Folder');

        $data->save();

        return redirect()->back()->with('success', "Snippets Edit Successfully");
    }

    public function DeleteIndex($id)
    {
        $getSnippets =  Snippets::where('User_id', Auth::user()->id)->get();
        $getSelectedSnippets =  Snippets::where('User_id', Auth::user()->id)->where('id' , $id)->first();
        return view('Pages.Snippets.DeleteSnippets', ['getSnippets' => $getSnippets, 'getSelectedSnippets' => $getSelectedSnippets]);
    }


    public function destroy($id)
    {
        $data = Snippets::find($id);

        $data->delete();

        return redirect()->route('Home');
    }



}
