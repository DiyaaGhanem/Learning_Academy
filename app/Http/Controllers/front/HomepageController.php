<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\Student;
use App\Trainer;
use App\Test;
use App\SiteContent;

class HomepageController extends Controller
{
    public function index(){

        $data['banner'] = SiteContent::select('content')->where('name', 'banner')->first();
        $data['courses_content'] = SiteContent::select('content')->where('name', 'courses')->first();
        $data['medone_content'] = SiteContent::select('content')->where('name', 'medone')->first();
        $data['medtwo_content'] = SiteContent::select('content')->where('name', 'medtwo')->first();
        $data['medthree_content'] = SiteContent::select('content')->where('name', 'medthree')->first();
        $data['medfour_content'] = SiteContent::select('content')->where('name', 'medfour')->first();
        
        $data['courses'] = Course::select('id', 'name', 'small_desc', 'cat_id', 'trainer_id', 'img', 'price')
        ->orderBy('id', 'desc')
        ->take(3)
        ->get();

        $data['courses_count'] = Course::count();
        $data['trainers_count'] = Trainer::count();
        $data['students_count'] = Student::count();



        $data['tests'] = Test::select('name', 'spec', 'desc', 'img')->get();
        
        return view('front.index', $data);
    }
}
