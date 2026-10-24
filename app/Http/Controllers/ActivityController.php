<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;
use App\Models\Course;
use App\Models\Gallery;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $activities = Activity::orderBy('id')->get();
        return view('gallery.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function add()
    {
        return view('gallery.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreActivityRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreActivityRequest $request)
    {
        $activity = new Activity();

        $activity->name = $request->input('name');

        if ($activity->save()) {
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
                    $gallery->activity_id = $activity->id; //foreign key
                    $gallery->url_img = $url_img;

                    $gallery->save();
                    $image_saved++;
                }
            }


            return redirect(route('gallery.index'))->withStatus('Successfully add new activity!');
        }

        return back()->withErrors('Failed to add new activity!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {

        $activity = Activity::with('galleries')->find($id);
        return view('gallery.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $activity = Activity::find($id); //single data of user
        return view('gallery.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActivityRequest  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateActivityRequest $request, $id)
    {
        $activity = Activity::findOrFail($id);
        $activity->name = $request->input('name');

        if ($activity->save($request->all())) {
            return redirect(route('gallery.index'))->withStatus('Successfully update!');
        }

        return back()->withErrors('Failed to update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $activities = Activity::findOrFail($id);

        if ($activities->delete()) {
            return redirect(route('gallery.index'))->withStatus('Successfully delete activity!');
        }

        return back()->withErrors('Failed to delete activity!');
    }
}
