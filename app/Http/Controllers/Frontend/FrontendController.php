<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Menu;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $slider = Slider::where('is_active',1)->orderBy('updated_at','desc')->get()->first();
        $testimonials = Testimonial::where('is_active',1)->orderBy('updated_at','desc')->get()->take(5);
        $courses = Course::where('is_active',1)->orderBy('updated_at','desc')->get();

        return view('template.home',compact('slider','courses'));
    }


    public function articleDetails($slug){
        $menu = Menu::where('slug',$slug)->first();

        if ($menu!=null){
            $article = Article::where('menu_id',$menu->id)->first();

            if ($article!=null){
                return view('template.article-details',compact('article'));
            }
            else{
                return redirect(route('error404'));
            }
        }else{
            return redirect(route('error404'));
        }
    }

    public function error404(){
        return view('theme.404');
    }


    public function search(Request $request)
    {

//        $data2 = array();
//        $data3 = array();
//
//        DB::enableQueryLog();
//        DB::connection()->enableQueryLog();
        if ($request['q']) {
            $data = $request['q'];
            $articles = Article::where('title', 'like', '%' . $data . '%')
//                ->orWhereHas('categories', function ($q) use ($data) {
//                    $q->where('title', 'like', '%' . $data . '%');
//                })
//                ->orWhere('summary','like', '%' . $data . '%')
//                ->orWhere('content','like', '%' . $data . '%')
                ->get();
            return view('admin.item.getItem', compact('articles'));
        }else{
            $articles = Article::all();
            return view('admin.item.getItem', compact('articles'));
        }
    }

    public function courses(){
       $courses = Course::where('is_active','1')->get();
        return view('template.course',compact('courses'));

    }
public function coursesDetails($id,$slug){
        $course = Course::where('id',$id)->where('is_active','1')->first();

//        $lessons = Lesson::where('course_id',$id)->where('is_active','1')->get()->groupBy('lesson_type_id');
        return view('template.course-details',compact('course'));
}
}
