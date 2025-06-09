<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    

    public function __invoke()
    {
        
        $job = Job::with( 'employer', 'tags')->Where( 'title', 'LIKE', '%'. request('q'). '%')->get();
 
        
        return view( 'results' , [ 'jobs' => $job ]); 
    }
}
