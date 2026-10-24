<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Subject;
use File;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $courses = Course::orderBy('id')->with('subjects')->get();
        return view('course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function add()
    {
        return view('course.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCourseRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCourseRequest $request)
    {
        $course = new Course();

        $course->name = $request->input('name');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $file_name = str_replace(' ', '_', $file->getClientOriginalName());

            $upload_path = '/assets/course/';
            $attachment_name = time() . '_' . $file_name;

            $course_img = $upload_path . $attachment_name;

            //Move attachment from temporary folder to project folder
            $file->move(public_path($upload_path), $course_img);

            $course->course_img = $course_img;

        };

        if ($course->save()) {

//                $request->validate([
//                    'description' => 'required'
//                ]);
//
//                foreach ($request->description as $value) {
//                    $subject = new Subject();
//                    $subject->description = $value;
//                    $subject->course_id = $course->id;
//                    $subject->save();
//                }

            return redirect(route('course.index'))->withStatus('Successfully add new course!');
        }



        return back()->withErrors('Failed to add new course!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $courses = Course::find($id); //single data of user
        return view('course.show', compact('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $courses = Course::find($id); //single data of user
        return view('course.edit', compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCourseRequest  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCourseRequest $request, $id)
    {

        $course = Course::findOrFail($id);

        $course->name = $request->input('name');

        if ($course->save()) {
            if($request->hasFile('image')){

                $destination = '/assets/course/'.$course->course_img;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }

                $file = $request->file('image');
                $file_name = str_replace(' ', '_', $file->getClientOriginalName());

                $upload_path = '/assets/course/';
                $attachment_name = time() . '_' . $file_name;

                $course_img = $upload_path . $attachment_name;

                //Move attachment from temporary folder to project folder
                $file->move(public_path($upload_path), $course_img);

                $course->course_img = $course_img;
                $course->save();
            }

            return redirect(route('course.index'))->withStatus('Successfully update!');
        }

        return back()->withError('Failed to update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $courses = Course::findOrFail($id);

        if ($courses->delete()) {
            return redirect(route('course.index'))->withStatus('Successfully delete course!');
        }

        return back()->withErrors('Failed to delete course!');
    }
}
