<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Media;
use App\Helpers\Core;

use Intervention\Image\ImageManagerStatic as Image;
// use Image;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::orderBy('id', 'DESC')->paginate('40');
        return view('backend.media.index', compact('media'));
    }

    //store for Ajax
    public function store_old(Request $request)
    {
        /*
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        */

        if ($files = $request->file('image')) {
            $image = pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time();
            $image = (new Core())->cleanString($image);
            $image = strtolower($image) . '.' . $files->getClientOriginalExtension();
            $imagepath = $request->image->move('public/uploads/images', $image);

            Media::create([
                'original_name' => $files->getClientOriginalName(),
                'file_type' => $files->getClientmimeType(),
                'filename' => $image,
                'file_size' => $imagepath->getSize(),
                'file_extension' => $files->getClientOriginalExtension(),
                'file_directory' => '/public/uploads/images/',
                'user_id' => auth()->user()->id,
            ]);
            $filelocation = url('/public/uploads/images/') . '/' . $image;
            return array('ok', $filelocation);
            //return redirect()->back()->with('success', 'Media Uploaded Succeefully');

        } else {
            return 'err';
        }
    }

    public function store(Request $request)
    {
        if ($files = $request->file('image')) {
            $image = pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time();
            $image = (new Core())->cleanString($image);
            $image = strtolower($image) . '.' . $files->getClientOriginalExtension();

            $imagePath = $request->image->move('images/products/', $image);

            // Resize the image to 300x300
            $resizedImage = Image::make($imagePath)->fit(450, 450);
            $resizedImage->save($imagePath);

            Media::create([
                'original_name' => $files->getClientOriginalName(),
                'file_type' => $files->getClientmimeType(),
                'filename' => $image,
                'file_size' => $imagePath->getSize(),
                'file_extension' => $files->getClientOriginalExtension(),
                'file_directory' => 'images/products/',
                'user_id' => auth()->user()->id,
            ]);

            $fileLocation = url('images/products/') . '/' . $image;
            return ['ok', $fileLocation];
        } else {
            return 'err';
        }
    }


    //store Media for No Ajax
    public function storeMedia_old(Request $request)
    {
        /*
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        */

        if ($files = $request->file('image')) {
            foreach ($files as $file) {
                //$image = $request->image->move('public/images');
                $image = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time();
                $image = (new Core())->cleanString($image);
                $image = strtolower($image) . '.' . $file->getClientOriginalExtension();
                $imagepath = $file->move('images/products/', $image);
                // return Response()->json([
                //     "success" => true,
                //     "image" => $image
                // ]);
                Media::create([
                    'original_name' => $file->getClientOriginalName(),
                    'file_type' => $file->getClientmimeType(),
                    'filename' => $image,
                    'file_size' => $imagepath->getSize(),
                    'file_extension' => $file->getClientOriginalExtension(),
                    'file_directory' => '/images/products/',
                    'user_id' => auth()->user()->id,
                ]);

                $filelocation = url('/images/products/') . '/' . $image;
            }
            // return array('ok', $filelocation);
            return redirect()->back()->with('success', 'Media Uploaded Succeefully');
        } else {
            return redirect()->back()->with('delete', 'Something has wrong!');
        }
    }

    public function storeMedia(Request $request)
    {
        if ($files = $request->file('image')) {
            foreach ($files as $file) {
                $image = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time();
                $image = (new Core())->cleanString($image);
                $image = strtolower($image) . '.' . $file->getClientOriginalExtension();
                $imagePath = $file->move('images/products/', $image);

                // Resize the image to 300x300
                $resizedImage = Image::make($imagePath)->fit(450, 450);
                $resizedImage->save($imagePath);

                Media::create([
                    'original_name' => $file->getClientOriginalName(),
                    'file_type' => $file->getClientmimeType(),
                    'filename' => $image,
                    'file_size' => $imagePath->getSize(),
                    'file_extension' => $file->getClientOriginalExtension(),
                    'file_directory' => '/images/products/',
                    'user_id' => auth()->user()->id,
                ]);

                $fileLocation = url('/images/products/') . '/' . $image;
            }
            return redirect()->back()->with('success', 'Media Uploaded Successfully');
        } else {
            return redirect()->back()->with('delete', 'Something went wrong!');
        }
    }


    //Ajax Load Image
    public function getMedia()
    {
        $get = Media::orderBy('created_at', 'DESC')->get();
        return $get;
        //return url('/images/products/').'/'.$get[0]->filename;
    }

    //Delete Media
    public function destroy($id)
    {
        $d = Media::find($id);
        if (file_exists(public_path('/public/uploads/images/' . $d->filename))) {
            unlink(public_path('/public/uploads/images/' . $d->filename));
        }
        $d->delete();
        return redirect()->back()->with('delete', 'Media Deleted Succeefully');
    }

    //Delete Media By ajax
    public function destroy_ajax(Request $request)
    {
        $mediaId = $request->input('media_id');
        $mediam = Media::find($mediaId);
        if ($mediam) {

            // $filePath = 'public/uploads/images/' . $mediam->filename;
            $filePath = 'images/products/' . $mediam->filename;

            if (file_exists($filePath)) {
                unlink($filePath);
                $mediam->delete();

                $media = Media::orderBy('id', 'DESC')->paginate('40');
                return view('backend.media.data_box', compact('media'));
            }
        }
        return response()->json(['success' => false], 404);
    }
}
