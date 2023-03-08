<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Traits\AppCommonTraits;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
// products //
use DB;
use App\Models\products;
use App\Models\Countries;
use Session;
use Str;
use Route;

class PageController extends Controller
{

    use AppCommonTraits;

    public function index()
    {
        $this->generateSeoData([
            'title' => 'Home',
            'description' => 'Home',
        ]);

        Session()->put('country', 'unitedstates');
        // redirect to home page with country and home //

        // current route is with country and rest area //
        $currentRoute = Route::currentRouteName();
        $currentRouteWithParams = Route::hasParameter('country');

        dd($currentRoute, $currentRouteWithParams);

        return view('pages.Home.index');
    }

    // shop
    public function shop(Request $request, $country, $restArea = null)
    {
        $this->generateSeoData([
            'title' => 'Shop',
            'description' => 'Shop',
        ]);

        
        $country = strtolower(str_replace(' ','',$country));
        
        Session()->put('country', $country);

        $filteredcountry = '';
        $countries = Countries::get();
        foreach ($countries as $key => $value) {
            $value->country_name = strtolower(str_replace(' ','',$value->name));
            //   $countriesarray[] = $value->country_name;
            if($value->country_name == $country){
                $filteredcountry = $value->iso_name;
            }
        }
        
        // get first 3 products //
        $firstthreeproducts = products::select('id','title','slug','category','price','quantity','image_link','short_description','affiliate_link')->where('status', 'Active')->where('country', $filteredcountry)->limit(3)->get();
        
        // get products //
        $products = products::select('id','title','category','slug','price','quantity','image_link','short_description','affiliate_link')->where('status', 'Active')->where('country', $filteredcountry)->get();
        
        foreach ($products as $key => $value) {
            foreach (explode(',', $value->category) as $cat) {
                $value->singlecategory = $cat;
            }
        }
        
        // get unique categories from products and explode them //
        $categories = products::select('category')->where('status', 'Active')->where('country', $filteredcountry)->groupBy('category')->get();
        
        $filteredcategories = [];
        foreach ($categories as $key => $value) {
            foreach (explode(',', $value->category) as $cat) {
                $filteredcategories[] = $cat;
            }
        }
        
        // unique categories //
        $filteredcategories = array_unique($filteredcategories);        
        return view('pages.Shop.index', compact('firstthreeproducts','products','filteredcategories','country'));
    }
    
    public function loadMoreProducts($country, $category)
    {
        $filteredcountry = '';
        $countries = Countries::get();
        foreach ($countries as $key => $value) {
           $value->country_name = strtolower(str_replace(' ','',$value->name));
            //   $countriesarray[] = $value->country_name;
            if($value->country_name == $country){
                $filteredcountry = $value->iso_name;
            }
        }

        $products = products::select('id','title','slug','category','price','quantity','image_link','short_description','affiliate_link')->where('status', 'Active')->where('country', $filteredcountry)->get();

        $filteredproducts = [];
        
        $limit = 3;
        $count = 0;
        foreach ($products as $key => $value) {
            foreach (explode(',', $value->category) as $cat) {
                if($cat == $category){
                    $filteredproducts[] = $value;
                    $count++;
                }
            }
            if($count == $limit){
                break;
            }
        }

        return view('pages.Shop.loadbasedoncategory', compact('filteredproducts'));

    }

    // join now
    public function joinNow(Request $request, $country, $restArea = null)
    {
        $this->generateSeoData([
            'title' => 'Join Now',
            'description' => 'Join Now',
        ]);
        return view('pages.JoinNow.index');
    }

    // blogs
    public function blogs(Request $request, $country, $restArea = null)
    {
        $this->generateSeoData([
            'title' => 'Blogs',
            'description' => 'Blogs',
        ]);

        $data = Blogs::with("image")->where('status', "Active")->orderBy('id', 'desc')->get();
        $categories = Blogs::select('categories')->groupBy('categories')->get()->toArray();
        $categories = array_column($categories, 'categories');
        $categories = array_values($categories);
        $pageCat = [];
        foreach ($categories as $key => $value) {
            foreach ($value as $cat) {
                $pageCat[] = $cat;
            }
        }

        // unique categories
        $pageCat = array_unique($pageCat);

        $pageCat = array_diff($pageCat, ['Uncategorized']);

        return view('pages.Blogs.index', compact('data', 'pageCat'));
    }

    // blogs detail
    public function blogsDetail(Request $request, $country = null, $restArea = null, $id = null)
    {
        $this->generateSeoData([
            'title' => 'Blog Detail',
            'description' => 'Blog Detail',
        ]);

        $id = $request->id;

        if(!$id){
            return redirect()->route('page-blogs', ['country' => $country, 'restArea' => $restArea]);
        }

        $data = Blogs::with("image")->where('id', $id)->first();

        if (!$data) {
            return redirect()->route('page-blogs', ['country' => $country, 'restArea' => $restArea]);
        }

        return view('pages.Blogs.detail', compact('data'));
    }

    // product detail
    public function productDetail(Request $request, $country, $category, $name)
    {
        $this->generateSeoData([
            'title' => 'Product Detail',
            'description' => 'Product Detail',
        ]); 


        $filteredcountry = '';
        $countries = Countries::get();
        foreach ($countries as $key => $value) {
            $value->country_name = strtolower(str_replace(' ','',$value->name));
            if($value->country_name == $country){
                $filteredcountry = $value->iso_name;
            }
        }

        $products = products::select('id','title','slug','category','sku','price','quantity','image_link','short_description','description','affiliate_link','total_reviews', 'total_rating','usage','quantity','ingredients','tags')->where('status', 'Active')
        ->where('slug', $name)
        ->where('country', $filteredcountry)
        ->get()->first();

        $categories = $products->category;
        // similar product explode and filter all products with same category //
        $similarproducts =  products::select('id','title','slug','category','price','quantity','image_link','short_description','affiliate_link')->where('status', 'Active')->whereIn('category', explode(',', $categories))
        ->where('country', $filteredcountry)
        ->limit(4)->get();
        $similarproducts->category = explode(',', $products->category);
        $products->category = explode(',', $products->category);        

        $products->similarproducts = $similarproducts;
        // remove array from tags //
        $products->tags = explode(',', str_replace([':', '\\', '/', '*','"',"[","]"],"",$products->tags));
        // remove extra array from tags only take string from tags //
        
        // generate review //
        $total_rating = [];
        for ($i=0; $i < $products->total_rating; $i++) { 
            $total_rating[] = $i;
        }

        $products->total_rating = $total_rating;

        return view('pages.Products.detail', compact('products'));
    }
}