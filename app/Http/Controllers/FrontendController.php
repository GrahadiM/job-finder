<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    protected $jobModel;
    protected $categoryModel;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->jobModel = new Job();
        $this->categoryModel = new Category();
    }

    public function index() {
        $data['jobs']       = $this->jobModel->with('company', 'category')->take(4)->get();
        $data['categories'] = $this->categoryModel->with('jobs')->get();
        return view('user.index', $data);
    }

    public function category($id) {
        $data['jobs']     = $this->jobModel->with('company', 'category')->where('category_id', $id)->get();
        $data['category'] = $this->categoryModel->with('jobs')->where('id', $id)->first();
        return view('user.category', $data);
    }

    public function job_listing() {
        $data['jobs']     = $this->jobModel->with('company', 'category')->get();
        $data['category'] = $this->categoryModel->with('jobs')->get();
        return view('user.job_listing', $data);
    }

    public function job_detail($id) {
        $data['job'] = $this->jobModel->with('company', 'category')->where('id', $id)->first();
        return view('user.job-detail', $data);
    }

    public function about() {
        return view('user.about');
    }

    public function contact() {
        return view('user.contact');
    }
}
