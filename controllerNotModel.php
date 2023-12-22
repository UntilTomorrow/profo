<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;
class AdminComments extends Controller
{
    public function index(){
        $pageTitle = 'Comments';
        $data = DB::table('comments')->get();
        return view('admin.comments.list', compact('pageTitle','data')); 
    }
}
