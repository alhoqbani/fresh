<?php

namespace App\Http\Controllers\Listing;

use App\Area;
use App\Category;
use App\Listing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListingController extends Controller
{
    public function index(Area $area, Category $category)
    {

       $listings = Listing::inArea($area)->isLive()->fromCategory($category)->latestFirst()->paginate(10);
       
        return view('listings.index', compact('listings', 'category'));
    }
}
