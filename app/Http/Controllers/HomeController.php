<?php

namespace App\Http\Controllers;
use App\Models\GlobalSetting;
use App\Models\Navigation;
use Illuminate\Http\Request;
use App\Models\NavigationItems;
use App\Job;


class HomeController extends Controller
{
    public function index(){


        // $all_jobs = Navigation::all()->where("page_type","Job")->first();
        // return $all_jobs;


        $menus = Navigation::query()->where('nav_category','Main')->where('page_type','!=','Job')->where('page_type','!=','Photo Gallery')->where('page_type','!=','Notice')->where('parent_page_id',0)->where('page_status','1')->orderBy('position','ASC')->get();
        //return $menus;
        //return $menus->first()->submenus;

        $jobs = Navigation::query()->where('page_type','Job')->latest()->get();
    
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()!=null){
            $about_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()->id;
            $About = Navigation::query()->where('parent_page_id',$about_id)->latest()->first();
        }
        else{
            $About = null;
        }
       if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()!=null){
            $about_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()->id;
            $About = Navigation::query()->where('parent_page_id',$about_id)->latest()->first();
        }
        else{
            $About = null;
        }
      
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()!=null){
            $banner_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()->id;
            $banners = Navigation::query()->where('parent_page_id',$banner_id)->latest()->get();
        }
        else{
            $banners = null;
        } 
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()!=null){
            $slider_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()->id;
            $sliders = Navigation::query()->where('parent_page_id',$slider_id)->latest()->get();
        }
        else{
            $sliders = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()!=null){
            $misson_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()->id;
            $missons = Navigation::query()->where('parent_page_id',$misson_id)->latest()->get();
            //return $misson;
        }
        else{
            $missons = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()!=null){
            $message_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()->id;
            $message = Navigation::query()->where('parent_page_id',$message_id)->latest()->get();
        }
        else{
            $message = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%testimonial%")->where('page_type','Group')->latest()->first()!=null){
            $testimonial_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%testimonial%")->where('page_type','Group')->latest()->first()->id;
            $testimonial = Navigation::query()->where('parent_page_id',$testimonial_id)->latest()->get();
        }
        else{
            $testimonial = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%statistic%")->where('page_type','Group')->latest()->first()!=null){
            $statistic_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%statistic%")->where('page_type','Group')->latest()->first()->id;
            $statistics = Navigation::query()->where('parent_page_id',$statistic_id)->latest()->get();
        }
        else{
            $statistics = null;
        } 
        
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%partner%")->where('page_type','Group')->latest()->first()!=null){
            $partners_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%partner%")->where('page_type','Group')->latest()->first()->id;
            $partners = Navigation::query()->where('parent_page_id',$partners_id)->latest()->get();
            //return $partners;
        }
        else{
            $partners = null;
        }
      
        // if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%jobs%")->where('page_type','Group')->latest()->first()!=null){
        //     $jobs_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%jobs%")->where('page_type','Group')->latest()->first()->id;
        //     $jobs = Navigation::query()->where('parent_page_id',$jobs_id)->orderBy('position','DESC')->get();
        // }
        // else{
        //     $jobs = null;
        // }
        //return $misson;
        $job_categories = Navigation::all()->where('page_type','Group Jobs');
        // if($category->count()>0){
        //     $category_id = $category->first()->id;
        //     $job_categories = Navigation::all()->where('parent_page_id',$category_id);
        // }
        
        // return $job_categories;
    
        $global_setting = GlobalSetting::all()->first(); 
        //return $missons;       
        return view("website.index")->with(['job_categories'=>$job_categories,'testimonial'=>$testimonial,'statistics'=>$statistics,'banners'=>$banners,'partners'=>$partners,'about'=>$About,'menus'=>$menus,'global_setting'=>$global_setting,'sliders'=>$sliders,'missons'=>$missons,'message'=>$message,'jobs'=>$jobs]);
    }


    public function category($menu){

        
        // return $menu." this is category";
        $menus = Navigation::query()->where('nav_category','Main')->where('page_type','!=','Job')->where('page_type','!=','Photo Gallery')->where('page_type','!=','Notice')->where('parent_page_id',0)->where('page_status','1')->orderBy('position','ASC')->get();
        //return $menus->first()->submenus;
        $jobs = Navigation::query()->where('page_type','Job')->latest()->get();
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()!=null){
            $about_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()->id;
            $About = Navigation::query()->where('parent_page_id',$about_id)->latest()->first();
        }
        else{
            $About = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()!=null){
            $banner_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()->id;
            $banners = Navigation::query()->where('parent_page_id',$banner_id)->latest()->get();
        }
        else{
            $banners = null;
        }
        
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()!=null){
            $slider_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()->id;
            $sliders = Navigation::query()->where('parent_page_id',$slider_id)->latest()->get();
        }
        else{
            $sliders = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()!=null){
            $misson_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()->id;
            $missons = Navigation::query()->where('parent_page_id',$misson_id)->latest()->get();
            //return $misson;
        }
        else{
            $missons = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()!=null){
            $message_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()->id;
            $message = Navigation::query()->where('parent_page_id',$message_id)->latest()->first();
        }
        else{
            $message = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%process%")->where('page_type','Group')->latest()->first()!=null){
            $process_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%process%")->where('page_type','Group')->latest()->first()->id;
            $process = Navigation::query()->where('parent_page_id',$process_id)->latest()->get();
        }
        else{
            $process = null;
        }
 
        $slug_detail = Navigation::all()->where('nav_name',$menu);
        $slug1 = $slug_detail->first();
        $category_id = Navigation::all()->where('nav_name',$menu)->first()->id;

        if(Navigation::all()->where('nav_name',$menu)->count()>0){
            if(Navigation::all()->where('parent_page_id',$category_id)->count()>0){
                   $category_type = Navigation::all()->where('parent_page_id',$category_id)->first()->page_type;
                }
            else{
                $category_type = Navigation::all()->where('nav_name',$menu)->where('page_type','!=','Notice')->first()->page_type;
            }
        }
        else{
            $category_type = null;
        }
        
        $job_categories = Navigation::all()->where('page_type','Group Jobs')->where('page_status',1);
        $global_setting = GlobalSetting::all()->first();        
        if(Navigation::all()->where('nav_name',$menu)->count()>0){

            $jobs = Navigation::query()->where('page_type','Job')->where('parent_page_id',$category_id)->where('page_status',1)->orderBy('created_at', 'desc')->get();
        }
        else{
            $jobs = null;
        }
    

        if($category_type == "Photo Gallery"){
            // $photos = Navigation::query()->where('parent_page_id',$category_id)->where('page_status','1')->latest()->get();
            $photos = NavigationItems::where('navigation_id',$category_id)->paginate(10);

            // return $photos;
            return view("website.galleryfolder")->with(['photos'=>$photos,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        elseif($category_type == "Job"){
            // return "return to view Job";
            $normal = Navigation::find($category_id);
            // return $normal->childs;
            return view("website.job-list")->with(['jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail,'slug1'=>$slug1]);
        }
        elseif($category_type == "Notice"){
            // return "return to view Notice";
            $notices = Navigation::query()->where('parent_page_id',$category_id)->latest()->get();
            $notice_heading = Navigation::find('parent_page_id');
            // return $notice_heading;
            return view("website.notice")->with(['notices'=>$notices,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        elseif($category_type == "Normal"){
            //return $category_id;
            $normal = Navigation::find($category_id);
            return view("website.normal")->with(['normal'=>$normal,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug1'=>$slug1]);
        }
        elseif($category_type == "Group Services"){
            //return $category_id;
            $normal = Navigation::find($category_id);
            return view("website.services")->with(['normal'=>$normal,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug1'=>$slug1]);
        }
        elseif($category_type == "Group Jobs"){
        
            // return $slug1->caption;

            $normal = Navigation::find($category_id);
            return view("website.job-list")->with(['normal'=>$normal,'jobs'=>$jobs,'job_categories'=>$job_categories,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug1'=>$slug1]);
        }
        else{
            if($jobs!=null){   
                return redirect('/');         
                //  return view("website.job-list")->with(['jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
            }
            else{
                return redirect('/');
            }
        }

    }

  public function subcategory($slug1,$submenu){
        
    // return "subcategory::".$submenu;
        $menus = Navigation::query()->where('nav_category','Main')->where('page_type','!=','Job')->where('page_type','!=','Photo Gallery')->where('page_type','!=','Notice')->where('parent_page_id',0)->where('page_status','1')->orderBy('position','ASC')->get();
        //return $menus->first()->submenus;
        $jobs = Navigation::query()->where('page_type','Job')->latest()->get();
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()!=null){
            $about_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()->id;
            $About = Navigation::query()->where('parent_page_id',$about_id)->latest()->first();
        }
        else{
            $About = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()!=null){
            $banner_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()->id;
            $banners = Navigation::query()->where('parent_page_id',$banner_id)->latest()->get();
        }
        else{
            $banners = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()!=null){
            $slider_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()->id;
            $sliders = Navigation::query()->where('parent_page_id',$slider_id)->latest()->get();
        }
        else{
            $sliders = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()!=null){
            $misson_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()->id;
            $missons = Navigation::query()->where('parent_page_id',$misson_id)->latest()->get();
            //return $misson;
        }
        else{
            $missons = null;
        }
       
        
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%process%")->where('page_type','Group')->latest()->first()!=null){
            $process_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%process%")->where('page_type','Group')->latest()->first()->id;
            $process = Navigation::query()->where('parent_page_id',$process_id)->latest()->get();
        }
        else{
            $process = null;
        }
        //return $misson; 
        $job_categories = Navigation::all()->where('nav_category','Main')->where('page_type','Group')->where('banner_image','!=',null);
        //sreturn $job_categories;
        $global_setting = GlobalSetting::all()->first();        
        //return view("website.index")->with(['jobs'=>$jobs,'banners'=>$banners,'about'=>$About,'menus'=>$menus,'global_setting'=>$global_setting,'sliders'=>$sliders,'missons'=>$missons,'job_categories'=>$job_categories,'message'=>$message,'process'=>$process]);
        if(Navigation::all()->where('nav_name',$submenu)->count()>0){
            $job_id = Navigation::all()->where('nav_name',$submenu)->first()->id;        
            $jobs = Navigation::query()->where('parent_page_id',$job_id)->where('page_type','Job')->orderBy('created_at', 'desc')->get();
        }
        else{
            $jobs = null;
        }
    
        $slug_detail = Navigation::all()->where('nav_name',$submenu);
        $slug1 = Navigation::where('nav_name',$slug1)->first();
        $slug2 = Navigation::where('nav_name',$submenu)->first();
        // $slug1 = $slug1;
        // $slug2 = $submenu;
        //
        if(Navigation::all()->where('nav_name',$submenu)->count()>0){
            $subcategory_id = Navigation::all()->where('nav_name',$submenu)->first()->id;
            if(Navigation::all()->where('parent_page_id',$subcategory_id)->count()>0){
                $subcategory_type = Navigation::all()->where('parent_page_id',$subcategory_id)->first()->page_type;//slug/slug2(GROUP)
                if($subcategory_type == "Photo Gallery"){
                    //return "return to page gallary";
                    $photos = Navigation::query()->where('parent_page_id',$subcategory_id)->latest()->get();
                    return view("website.galleryfolder")->with(['photos'=>$photos,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail,'slug1'=>$slug1,'slug2'=>$slug2]);
                }
            }
            if(Navigation::all()->where('nav_name',$submenu)->where('page_type','Group Jobcategory')->count()>0){
                $subcategory_type = Navigation::all()->where('nav_name',$submenu)->first()->page_type;//slug/slug2(group)
             }
            else{
               
                #return Navigation::all()->where('nav_name',$submenu)->where('page_type','Normal');
                if(Navigation::all()->where('nav_name',$submenu)->where('page_type','Normal')->count()>0){
                    $subcategory_type = Navigation::all()->where('nav_name',$submenu)->where('page_type','Normal')->first()->page_type;//slug/slug2(except group)
                }
                else if(Navigation::all()->where('nav_name',$submenu)->where('page_type','Photo Gallery')->count()>0){
                    $subcategory_type = Navigation::all()->where('nav_name',$submenu)->where('page_type','Photo Gallery')->first()->page_type;//slug/slug2(except group)
                
                }
                else if(Navigation::all()->where('nav_name',$submenu)->where('page_type','Video Gallery')->count()>0){
                    $subcategory_type = Navigation::all()->where('nav_name',$submenu)->where('page_type','Video Gallery')->first()->page_type;//slug/slug2(except group)
                }
                else if(Navigation::all()->where('nav_name',$submenu)->where('page_type','Chart')->count()>0){
                    $subcategory_type = Navigation::all()->where('nav_name',$submenu)->where('page_type','Chart')->first()->page_type;//slug/slug2(except group)
                }
                else{
                    
                    
                    if($submenu=="food")
                    {
                        
                        return view("website.job-list")->with(['jobs'=>Job::all(),'slug1'=>$slug1,'slug2'=>$slug2]);
                    }
                    return "Sad";
                    return redirect('/');//submenu is page_type=Group and its internal items are empty
                }
            }
           
         }
        else{
             $subcategory_type = null;
         }
         
        if($subcategory_type == "Photo Gallery"){
            // return "return to page gallary";
           
            $photos = NavigationItems::query()->where('navigation_id',$subcategory_id)->latest()->get();
            return view("website.photogallery")->with(['photos'=>$photos,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail,'slug1'=>$slug1,'slug2'=>$slug2]);
            
            
        }
        if($subcategory_type == "Video Gallery"){
            //return "return to page gallary";
            $photos = NavigationItems::query()->where('navigation_id',$subcategory_id)->latest()->get();
            return view("website.videogallery")->with(['photos'=>$photos,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail,'slug1'=>$slug1,'slug2'=>$slug2]);
        }
       
        elseif($subcategory_type == "Job"){
            // return $subcategory_type;
            //return "return to view job";
            return view("website.job-list")->with(['jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail,'slug1'=>$slug1,'slug2'=>$slug2]);
        }
        
        elseif($subcategory_type == "Notice"){
            // return "return to view Notice";
            $notices = Navigation::query()->where('parent_page_id',$subcategory_id)->where('page_type','Notice')->latest()->get();
            $notice_heading = Navigation::find($subcategory_id);
            //return $notice_heading;
            return view("website.notice")->with(['notice_heading'=>$notice_heading,'notices'=>$notices,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail,'slug1'=>$slug1,'slug2'=>$slug2]);
        }
        elseif($subcategory_type == "Normal"){
             
            $normal = Navigation::find($subcategory_id);
            return view("website.normal")->with(['normal'=>$normal,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug1'=>$slug1,'slug2'=>$slug2]);
        }
        elseif($subcategory_type == "Message"){
                
            $normal = Navigation::find($subcategory_id);
            // return $normal;
            return view("website.messagechairman")->with(['message'=>$message,'normal'=>$normal,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug1'=>$slug1,'slug2'=>$slug2]);
        }
    
        elseif($subcategory_type == "Chart"){
            
            $chart = Navigation::find($subcategory_id);
            // return $normal;
            return view("website.chart")->with(['chart'=>$chart,'jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug1'=>$slug1,'slug2'=>$slug2]);
        }
    
        elseif($subcategory_type == "Group"){
            //return "return to job else";
            return view("website.job-list")->with(['jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail,'slug1'=>$slug1,'slug2'=>$slug2]);
        }
        elseif($subcategory_type == "Group Jobcategory"){
            //return "return to job else";
            $job_categories = Navigation::query()->where('parent_page_id',$subcategory_id)->get();
            #return $job_categories;
            return view("website.jobcategories")->with(['job_categories'=>$job_categories,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail,'slug1'=>$slug1,'slug2'=>$slug2]);
        }
        else{
          
            return redirect("/");
        }
    }
    public function singlePage($slug){
      
        // $slug1 = Navigation::all()->where('nav_name',$Job)->first();
        $job =Navigation::all()->where('nav_name',$slug)->first();
        // return $job->parent_page_id;
        // $job_details_parent = Navigation::find($job->parent_page_id);
        // return 
        if($job->parents){
            $slug1 = $job->parents->caption;
        }
        else{
            $slug1 = "Jobdetails";
        }
 
        $slug2 = $job->caption;
        $global_setting = GlobalSetting::all()->first(); 
        $menus = Navigation::all()->where('nav_category','Main')->where('page_type','!=','Job')->where('page_type','!=','Photo Gallery')->where('page_type','!=','Notice')->where('parent_page_id',0);
        return view("website.job_detail_single_page")->with(['jobdetail'=>$job,'job'=>$job,'menus'=>$menus,'global_setting'=>$global_setting,'slug1'=>$slug1,'slug2'=>$slug2]);
    
    }

    public function ReadMore($slug){
        $normal = Navigation::where('id',$slug)->first();
        //return $normal;
        $global_setting = GlobalSetting::all()->first(); 
        $menus = Navigation::query()->where('nav_category','Main')->where('page_type','!=','Job')->where('page_type','!=','Photo Gallery')->where('page_type','!=','Notice')->where('parent_page_id',0)->where('page_status','1')->orderBy('position','ASC')->get();
        return view("website.normal")->with(['normal'=>$normal,'menus'=>$menus,'global_setting'=>$global_setting,'job_slug'=>$slug]);
    }
    public function viewAll(){
         $menus = Navigation::query()->where('nav_category','Main')->where('page_type','!=','Job')->where('page_type','!=','Photo Gallery')->where('page_type','!=','Notice')->where('parent_page_id',0)->where('page_status','1')->orderBy('position','ASC')->get();
         //return $menus;
         $job_categories = Navigation::all()->where('nav_category','Main')->where('page_type','Group')->where('banner_image','!=',null);
        $global_setting = GlobalSetting::all()->first();
        return view("website.all_category")->with(['job_categories'=>$job_categories,'global_setting'=>$global_setting,'menus'=>$menus]);
    }
    public function getJobListWithCategory($category_name){

        $slug1 = Navigation::all()->where('nav_name',$category_name)->first();
        // return $slug1
        // $slug1 = [];
        // $slug1 = Navigation::where('nav_name',joblist)
        $category_id = Navigation::all()->where('nav_name',$category_name)->first()->id;
        $jobs = Navigation::query()->where('parent_page_id',$category_id)->get();
        return view('website.job-list')->with(['jobs'=>$jobs,'slug1'=>$slug1,]);
    }
    public function GotoGallery($slug){
        $slug1  = "Photos";
        $slug2 = $navigation_id = Navigation::all()->where('nav_name',$slug)->first()->caption;
        // return Navigation::all()->where('id',$subcategory_id);
        $navigation_id = Navigation::all()->where('nav_name',$slug)->first()->id;
        $photos = NavigationItems::query()->where('navigation_id',$navigation_id)->latest()->get();
        return view("website.photogallery")->with(['photos'=>$photos,'slug1'=>$slug1,'slug2'=>$slug2]);
    }
  
}

