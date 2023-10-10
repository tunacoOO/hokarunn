<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimeCategory;

class TimeCategoryController extends Controller
{
     public function time(TimeCategory $time_category)
    {
        return view('categories.time')->with(['posts' => $time_category->getByTimeCategory()]);
    }
}
