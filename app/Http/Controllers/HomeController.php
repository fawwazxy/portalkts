<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Certificate;
use App\Models\Course;
use App\Models\Quantity;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $users = User::orderBy('name')->get();
        $lecturer = Quantity::where('name', 'lecturer')->value('total');
        $student = Quantity::where('name', 'student')->value('total');

        $courses = Course::all();
//        $subjects = Subject::all();

        return view('users.index',compact('users','lecturer','student','courses'));
    }

    public function welcome()
    {
        $lecturer = Quantity::where('name', 'lecturer')->value('total');
        $student = Quantity::where('name', 'student')->value('total');
        $courses = Course::orderBy('id')->get();
        $certificates = Certificate::orderBy('id')->get();
        $activities = Activity::orderBy('id')->with('galleries')->get();
//        $subjects = Subject::all();

        return view('welcome', compact('lecturer','student', 'activities', 'courses', 'certificates'));
    }

    public function aboutUs()
    {
        $lecturer = Quantity::where('name', 'lecturer')->value('total');
        $student = Quantity::where('name', 'student')->value('total');
        $courses = Course::orderBy('id')->get();

        return view('about-us', compact('lecturer','student', 'courses'));
    }

    public function kos()
    {
//        $courses = Course::orderBy('id')->with('subjects')->get();
          $courses = Course::orderBy('id')->get();

        return view('kos', compact('courses'));
    }

    public function galeri()
    {
        $activities = Activity::orderBy('id')->with('galleries')->get();

        return view('galeri', compact('activities'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function login()
    {
        return view('auth.login');
    }


}
