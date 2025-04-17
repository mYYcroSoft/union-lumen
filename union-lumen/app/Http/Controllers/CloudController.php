<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CloudController extends Controller
{
    public function index()
    {
        $files = File::files(base_path('public/files'));
        return view('cloud', ['files' => $files]);
    }
    public function uploadFile(Request $request)
    {
        $file       = $request->file('file');
        $fileName   = time() . '_' . $file->getClientOriginalName();
        $uploadPath = base_path('public/files');
        $file->move($uploadPath, $fileName);

        return redirect('/cloud');
    }
    public function download($filename)
    {
        $path = storage_path('app/public/files/' . $filename);

        if (! file_exists($path)) {
            abort(404, 'Soubor nenalezen.');
        }

        return response()->download($path);
    }
}
