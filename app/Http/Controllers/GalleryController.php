<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use Illuminate\Http\Response;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function add()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreGalleryRequest $request
     * @param $activity_id
     * @return Response
     */
    public function store(StoreGalleryRequest $request, $activity_id)
    {
//        return $request;
        $image_saved = 0;
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $file_name = str_replace(' ', '_', $file->getClientOriginalName());

                $upload_path = '/assets/gallery/';
                $attachment_name = time() . '_' . $file_name;

                $url_img = $upload_path . $attachment_name;

                //Move attachment from temporary folder to project folder
                $file->move(public_path($upload_path), $url_img);

                $gallery = new Gallery();
                $gallery->activity_id = $activity_id; //foreign key
                $gallery->url_img = $url_img;

                $gallery->save();
                $image_saved++;
            }

            return back()->withStatus(__('New picture successfully added'));
        }

        return back()->withFailed(__('Failed to add picture'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGalleryRequest  $request
     * @param  \App\Models\Gallery  $gallery
     * @return Response
     */
    public function update(UpdateGalleryRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        if ($gallery->delete()){
            return back()->withStatus(__('Picture successfully deleted'));
        }
        return back()->withFailed(__('Failed to delete picture'));
    }
}
