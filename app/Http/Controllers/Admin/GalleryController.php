<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GalleryRequest;
use App\Gallery;
use App\TravelPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Gallery::with(['travel_package'])->get();
        // dd($items);
        return view('pages.admin.gallery.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $travel_packages = TravelPackage::where('type_travel', '!=', 'bookperday')->get();
        return view('pages.admin.gallery.create', [
            'travel_packages' => $travel_packages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'travel_packages_id' => 'required',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $data = $request->all();
        // $data['image'] = $request->file('image')->store(
        //     'assets/gallery','public'
        // );

        // Gallery::create($data);
        // return redirect()->route('gallery.index');


        if($request->hasfile('image')) {
            foreach($request->file('image') as $file)
            {
        // = $file->getClientOriginalName();
                // $name = $file->store( 'assets/gallery','public');
                $name = $file->getClientOriginalName();
                $file->move(public_path('/storage/assets/gallery'), $name);
                // $imgData[] = public_path('/storage/assets/gallery/').$name;
                $imgData[] = '/assets/gallery/'.$name;
                // $imgData[] = $name;
            }

            $data['image'] = json_encode($imgData);
            Gallery::create($data);

            return redirect()->route('travel-package.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Gallery::findOrFail($id);
        $travel_packages = TravelPackage::all();

        return view('pages.admin.gallery.edit', [
            'item' => $item,
            'travel_packages' => $travel_packages
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $item = Gallery::findOrFail($id);
        $data = $request->all();

        if($request->hasfile('image')) {

            try {
                foreach($request->file('image') as $file)
                    {
                        // $name = $file->getClientOriginalName();
                        $name = $file->getClientOriginalName();
                        // $file->move(public_path('/storage/assets/gallery'), $name);
                        $imgData[] = '/assets/gallery/'.$name;
                        // $imgData[] = $name;
                    }
                    // $oldImage =str_replace('assets\/gallery\/', '', ($item->image));
                    $oldImage = json_decode($item->image );
                    Storage::disk('public')->delete($oldImage);

                $data['image'] = json_encode($imgData);
                // Gallery::create($data);
                $item->update($data);
                return base_url('admin/travel-gallery') .'/'. $id;
            } catch (\Throwable $th) {
                return redirect()->back()->withErrors(['error' => $th]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Gallery::findOrFail($id);
        $oldImage = json_decode($item->image );
        Storage::disk('public')->delete($oldImage);
        $item->delete();

        // return redirect()->route('travel-package.index');
    }

    public function travel_gallery($id)
    {
        // dd($id);
        $travel_packages = TravelPackage::with('galleries')->findOrFail($id);
        $item = Gallery::findOrFail($travel_packages->galleries->id);
        // Gallery::findOrFail($id);

        // dd($item);
        return view('pages.admin.gallery.travel_gallery', compact('item'));
    }
}
