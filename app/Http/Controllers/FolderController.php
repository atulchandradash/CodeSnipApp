<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use App\Models\Snippets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FolderController extends Controller
{
    //

    public function index()
    {
        $getSnippets =  Snippets::where('User_id', Auth::user()->id)->get();


        return view('Pages.FolderPage.FolderCreate', ['getSnippets' => $getSnippets]);
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'folder_name' => 'required|min:3'
            ]
        );

        $data = new Folder();

        $data->Name = $request->input('folder_name');
        $data->User_id = Auth::user()->id;

        $data->save();

        return redirect()->route('Home');



    }

    public function show($id)
    {
        $getFolderInfo = Folder::find($id);
        $getFolderSnippets =  Snippets::where('User_id', Auth::user()->id)
            ->where('Folder_id', $id)->get();


        return view('Pages.FolderPage.FolderShow', ['getFolderSnippets' => $getFolderSnippets, 'getFolderInfo' => $getFolderInfo]);
    }


    public function SnippetsShow($id,$s_id)
    {
        $getFolderInfo = Folder::find($id);
        $getFolderSnippets =  Snippets::where('User_id', Auth::user()->id)
            ->where('Folder_id', $id)->get();

        $getSelectedSnippets = Snippets::find($s_id);


        return view('Pages.FolderPage.FolderSnippetsShow', ['getFolderSnippets' => $getFolderSnippets, 'getFolderInfo' => $getFolderInfo,

            'getSelectedSnippets' => $getSelectedSnippets]);
    }

    public function SnippetsEdit($id,$s_id)
    {
        $getFolderInfo = Folder::find($id);
        $getFolderSnippets =  Snippets::where('User_id', Auth::user()->id)
            ->where('Folder_id', $id)->get();

        $getSelectedSnippets = Snippets::find($s_id);


        return view('Pages.FolderPage.FolderSnippetsEdit', ['getFolderSnippets' => $getFolderSnippets, 'getFolderInfo' => $getFolderInfo,

            'getSelectedSnippets' => $getSelectedSnippets]);
    }


    public function SnippetsDelete($id,$s_id)
    {
        $getFolderInfo = Folder::find($id);
        $getFolderSnippets =  Snippets::where('User_id', Auth::user()->id)
            ->where('Folder_id', $id)->get();

        $getSelectedSnippets = Snippets::find($s_id);


        return view('Pages.FolderPage.FolderSnippetsDelete', ['getFolderSnippets' => $getFolderSnippets, 'getFolderInfo' => $getFolderInfo,

            'getSelectedSnippets' => $getSelectedSnippets]);
    }






}
