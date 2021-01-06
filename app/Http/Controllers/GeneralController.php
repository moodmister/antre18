<?php

namespace App\Http\Controllers;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class GeneralController extends Controller
{
    public function welcome() {
        app()->setLocale(Session::get('locale'));
        return view('welcome');
    }

    public function show_service() {
        return view('service');
    }
    public function show_pricelist() {
        return view('pricelist');
    }
    public function show_catalogue() {
        return view('catalogue');
    }
    public function show_promo() {
        return view('promo');
    }
    public function show_gallery() {
        $images = File::all();
        return view('gallery', ['images' => $images]);
    }
    public function show_aboutme() {
        return view('aboutme');
    }
    public function show_contact() {
        return view('contact');
    }

    public function show_upload() {
        return view('upload');
    }
    public function store (Request $request) {

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $validated = $request->validate([
                    'name' => 'string|max:40',
                    'image' => 'mimes:jpeg,png|max:1024',
                ]);
                
                $extension = $request->image->extension();
                $request->image->storeAs('/public', $validated['name'].".".$extension);
                $url = Storage::url($validated['name'].".".$extension);

                $file = File::create([
                   'name' => $validated['name'],
                    'url' => $url,
                ]);

                Session::flash('success', "Success!");
                return \Redirect::back();
            }
        }
        abort(500, 'Could not upload image :(');
    }

    public function viewUploads () {
        $images = File::all();
        return view('view_uploads')->with('images', $images);
    }

    public function destroy($id) {
        $image = File::findorFail($id);
        $image->delete();

        return redirect('/view-uploads')->with('msg', 'Deleted successfully');
    }
    public function set_locale($locale) {
        if (in_array($locale, \Config::get('app.locales'))) {
          session(['locale' => $locale]);
        }
        return redirect()->back();
    }
}