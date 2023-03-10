<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Validator;
use Illuminate\Support\Str;

class FileController extends Controller
{
    public function index(Request $request)
    {
        return File::all();
    }

    public function showByCardId($card_id)
    {
        return File::where('card_id', $card_id)->get();
    }

    public function store(Request $request, $card_id)
    {
        if ($request->hasfile('files')) {
            foreach ($request->file('files') as $key => $file) {
                $path = $file->store('public/files');
                $name = $file->getClientOriginalName();

                $insert[$key]['name'] = $name;
                $insert[$key]['path'] = $path;
                $insert[$key]['card_id'] = $card_id;
            }
        }

        File::insert($insert);
        return response(['files' => $file, 'message' => 'Files successfully upload.'], 201);
    }

    public function show($id)
    {
        $file = File::find($id);
        if ($file) {
            return response($file, 200);
        } else {
            return response(['message' => 'Not found'], 404);
        }
    }
}
