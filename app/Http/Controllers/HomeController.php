<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\HomeBanner;
use App\Models\Region;
use App\Models\ExperienceType;
use App\Models\TravelerType;
use App\Models\Budget;
use App\Models\Duration;
use App\Models\Destination;
use App\Models\Tourdetails;
use App\Models\Package;
use App\Models\Packagedetails;

class HomeController extends Controller
{
    public function homeShow(){
 
        $banners = HomeBanner::latest()->get();
        $destinations = Destination::latest()->take(6)->get();
return view('home',compact('banners','destinations'));
    }

        public function destination($slug = null){
       // $homepage = Title::select('seo_title_blog','seo_des_blog','seo_key_blog')->first();
       if($slug != null){
       $destinationCategory = Region::where('slug',$slug)->first();
       $destinationsList = Destination::latest()->with('regionCategory')->where('region_id', $destinationCategory->id)->paginate(6);
      // $seo_data['seo_description'] = $blogCategory->seo_description;
       // $seo_data['keywords'] = $blogCategory->seo_keyword;
        // $seo_data['seo_title'] = $blogCategory->seo_title;
    
       }else{

         $destinationsList = Destination::latest()->with('regionCategory')->paginate(6);
      // $seo_data['seo_description'] = $blogCategory->seo_description;
       // $seo_data['keywords'] = $blogCategory->seo_keyword;
        // $seo_data['seo_title'] = $blogCategory->seo_title;

       }
       
       $fillter = Region::all();
         return view('destination', compact('destinationsList', 'fillter'));
    }

        public function destinationdetails($slug = null){
        
            $alltour = Package::inRandomOrder()->with('regionCategorys')->get();
            $destinationsData = Destination::with('regionCategory')->where('slug', $slug)->first();
             //       $seo_data['seo_title'] =$destinationsData->seo_title;
        //   $seo_data['seo_description'] =$destinationsData->description;
        //   $seo_data['keywords'] =$destinationsData->keywords;
        
        $destinationsdetails = Tourdetails::orderBy('order_num', 'asc')->where('tour_id', $destinationsData->id)->get();
        return view('destinationdetails', compact('destinationsData', 'destinationsdetails', 'alltour'));
    }

        public function package(Request $request , $slug = null){
          $query = Package::query()->latest()->with('regionCategorys');

          // Slug based filtering (e.g., /package/rajasthan)
          if($slug !== null){
            $packageCategory = Region::where('slug',$slug)->first();

            if($packageCategory){
            $query->where('region_id', $packageCategory->id);
            }

          }

           // GET based filtering
          if($request->filled('region')){
            $query->where('region_id', $request->region);

          }

          if($request->filled('budget')){
            $query->where('budget_id', $request->budget);

          }


          if($request->filled('duration')){
            $query->where('duration_id', $request->duration);

          }

           if($request->filled('traveler')){
            $query->where('traveler_id', $request->traveler);

          }

           if($request->filled('experience')){
            $query->where('experience_id', $request->experience);

          }

           // Final result with pagination
           $packageList = $query->paginate()->appends($request->query());


           // Filter dropdown values
          $banners = HomeBanner::latest()->get();
          $budget = Budget::latest()->get();
          $duration = Duration::latest()->get();
          $traveler = TravelerType::latest()->get();
          $region = Region::latest()->get();
          $experience = ExperienceType::latest()->get();
          


            
           return view('packages',compact('banners','packageList','budget','duration','traveler','region','experience'));
           }


           public function packageDetails($slug = null){
            $alltour = Package::inRandomOrder()->with('regionCategorys')->get();
            $packageData = Package::with('regionCategorys')->where('slug',$slug)->first();
            $destinationsdetails = Packagedetails::orderBy('order_num', 'asc')->where('package_id', $packageData->id)->get();
        return view('packagedetails', compact('packageData', 'destinationsdetails', 'alltour'));

           }

        public function contactShow(){
           return view('contact');
         }
}
