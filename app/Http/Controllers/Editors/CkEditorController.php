<?php

namespace App\Http\Controllers\Editors;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CkEditorController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */

    public function index(): View
    {
        return view('ckeditor');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function upload(Request $request): JsonResponse
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move(public_path('uploads/media'), $fileName);
            $url = asset('uploads/media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
