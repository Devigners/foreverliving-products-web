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
use App\Models\States;
use App\Models\RestAreas;
use App\Models\Countries;
use App\Models\OfferCards;
use Session;
use Str;
use Route;

class PageController extends Controller
{

    use AppCommonTraits;

    public function index(Request $request, $country, $restArea = null, $extra=null)
    {
        
        $this->generateSeoData([
            'title' => 'Home',
            'description' => 'Home',
        ]);
        
        Session()->put('country', $country);
     
        $currentRoute = Route::currentRouteName();
        $parameters = Route::current()->parameters();
       
        $countparameters = count($parameters);
        
        if($countparameters == 1){
           
            $filteredcountry = '';
            $filteredcountryname = '';
            $filteredcountryiso = '';
            $countries = Countries::get();
            foreach ($countries as $key => $value) {
                $value->country_name = strtolower(str_replace(' ','',$value->name));
                if($value->country_name == $country){
                    $filteredcountry = $value->id;
                    $filteredcountryname = $value->name;
                    $filteredcountryiso = $value->iso_name;
                }
            }
            
            $getstated = States::select('id','name')->where('country_id', $filteredcountry)->get();
            $getproductslist = products::select('id','title','slug','country','category')->where('country', strtolower($filteredcountryiso))->get();

            foreach($getproductslist as $key => $value){
                // filter cateogry and get first category //
                $value->category = explode(',',$value->category);
                $value->category = $value->category[0];
            }
            $statename = null;
            
            return view('pages.Home.countryindex', compact('getstated','filteredcountryname','filteredcountryiso','country','getproductslist','statename'));
           
        }
        elseif($countparameters == 2){
            $filteredcountry = '';
            $countryid = '';
            $iso_name = '';
            $countries = Countries::get();
            foreach ($countries as $key => $value) {
                $value->country_name = strtolower(str_replace(' ','',$value->name));
                if($value->country_name == $country){
                    $filteredcountry = $value->name;
                    $countryid = $value->id;
                    $iso_name = $value->iso_name;
                }
            }

           

            $filteredstate = '';
            $stateflag = '';
            $statename = '';
            $states = States::get();
            foreach ($states as $key => $value) {
                $value->state_name = str_replace(' ','',$value->name);
                if($value->state_name == $parameters['restArea']){
                    $filteredstate = $value->id;
                    $statename = $value->name;
                    $stateflag = $value->image_url;
                }
            }
            
            
            $getproductslist = products::select('id','title','slug','country','category')->where('country', strtolower($iso_name))
            ->get();

            foreach($getproductslist as $key => $value){
                // filter cateogry and get first category //
                $value->category = explode(',',$value->category);
                $value->category = $value->category[0];
            }

            $getrestareas = RestAreas::select('id','name')->where('country_id', $countryid)
            ->where('state_id',$filteredstate)->get();
            

            $firstfiverestareas = RestAreas::select('name')->where('country_id', $countryid)
            ->where('state_id',$filteredstate)->limit(5)->get()->all();

            $sixthrestarea = RestAreas::select('id','name')->where('country_id', $countryid)
            ->where('state_id',$filteredstate)->offset(5)->limit(1)->pluck('name')->first();
           
            $aftersixrestareas = RestAreas::select('id','name')->where('country_id', $countryid)
            ->where('state_id',$filteredstate)->offset(6)->limit(4)->get();
           
            
            return view('pages.Home.countrystateindex', compact('getrestareas','firstfiverestareas','sixthrestarea','aftersixrestareas', 'filteredcountry', 'iso_name','stateflag','statename','country','getproductslist'));
        }
        elseif($countparameters == 3){
            $filteredcountry = '';
            $countryid = '';
            $iso_name = '';
            $countries = Countries::get();
            foreach ($countries as $key => $value) {
                $value->country_name = strtolower(str_replace(' ','',$value->name));
                if($value->country_name == $country){
                    $filteredcountry = $value->name;
                    $countryid = $value->id;
                    $iso_name = $value->iso_name;
                }
            }

        
            $filteredstate = '';
            $stateflag = '';
            $statename = '';
            $states = States::get();
            foreach ($states as $key => $value) {
                $value->state_name = str_replace(' ','',$value->name);
                if($value->state_name == $parameters['restArea']){
                    $filteredstate = $value->id;
                    $statename = $value->name;
                    $stateflag = $value->image_url;
                }
            }

            $requestedrestarea = $parameters['extra'];
            
            $filtereddynrestarae = '';
            $getdynrestarea = RestAreas::get();
            foreach ($getdynrestarea as $key => $value) {
                $value->radynname = str_replace(' ','',$value->name);
                if($value->radynname == $parameters['extra']){
                    $filtereddynrestarae = $value->id;
                }
            } 

            $drestareagetid = RestAreas::select('id','name')->where('country_id', $countryid)
            ->where('state_id',$filteredstate)->where('id',$filtereddynrestarae)->get()->first();
            
            
            $getproductslist = products::select('id','title','slug','country','category')->where('country', strtolower($iso_name))
            ->get();

            foreach($getproductslist as $key => $value){
                // filter cateogry and get first category //
                $value->category = explode(',',$value->category);
                $value->category = $value->category[0];
            }

            $getrestareas = RestAreas::select('id','name')->where('country_id', $countryid)
            ->where('state_id',$filteredstate)->get();
            

            $firstfiverestareas = RestAreas::select('name')->where('country_id', $countryid)
            ->where('state_id',$filteredstate)->limit(5)->get()->all();

            $sixthrestarea = RestAreas::select('id','name')->where('country_id', $countryid)
            ->where('state_id',$filteredstate)->offset(5)->limit(1)->pluck('name')->first();
           
            $aftersixrestareas = RestAreas::select('id','name')->where('country_id', $countryid)
            ->where('state_id',$filteredstate)->offset(6)->limit(4)->get();
           
            
                return view('pages.Home.countrystateextraindex', compact('getrestareas','firstfiverestareas','sixthrestarea','aftersixrestareas', 'filteredcountry', 'iso_name','stateflag','statename','country','getproductslist','drestareagetid'));
        }
       
        else
        {
            $country = 'unitedstates';
            $filteredcountry = '';
            $countries = Countries::get();
            foreach ($countries as $key => $value) {
                $value->country_name = strtolower(str_replace(' ','',$value->name));
                //   $countriesarray[] = $value->country_name;
                if($value->country_name == $country){
                    $filteredcountry = $value->id;
                }
            }

            $filteredcountry = '';
            $filteredcountryname = '';
            $filteredcountryiso = '';
            $countries = Countries::get();
            foreach ($countries as $key => $value) {
                $value->country_name = strtolower(str_replace(' ','',$value->name));
                if($value->country_name == $country){
                    $filteredcountry = $value->id;
                    $filteredcountryname = $value->name;
                    $filteredcountryiso = $value->iso_name;
                }
            }
            
            
            $getstated = States::select('id','name')->where('country_id', $filteredcountry)->get();
            $getproductslist = products::select('id','title','slug','country','category')->where('country', strtolower($filteredcountryiso))->get();

            foreach($getproductslist as $key => $value){
                // filter cateogry and get first category //
                $value->category = explode(',',$value->category);
                $value->category = $value->category[0];
            }

            $statename = null;
            
            return view('pages.Home.index', compact('getstated', 'filteredcountryname','filteredcountryiso','country','getproductslist','statename'));
        }      
        
        
    }

    // shop //
    public function shop(Request $request, $country, $restArea = null, $extra = null)
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
           $statename = null;


           // get offer cards //

           $countriesoffers = Countries::getWithStatus();
        //    dd($countries);
           $offercards = OfferCards::get();
           $offercards = $offercards->toArray();

           $offercards = array_combine(array_column($offercards, 'type'), $offercards);
           $filteredoffercards = [];
           foreach ($offercards as $key => $value) {
            if (isset($value["country_links"]) && array_key_exists($filteredcountry, $value["country_links"])) {
                $value["country_links"] = $value["country_links"][$filteredcountry];
                $filteredoffercards[] = $value;
            }
          } 

        //   dd($filteredoffercards);
            
            // go to shop page and change url //
            return view('pages.Shop.index', compact('firstthreeproducts','filteredcategories','products','country','statename','offercards','filteredoffercards','filteredcountry'));
            
    }
    
    public function loadMoreProducts($country,$category)
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
        $statename = null;
        return view('pages.JoinNow.index', compact('country','statename'));
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
        $statename = null;
        return view('pages.Blogs.index', compact('data', 'pageCat', 'country','statename'));
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

        $statename = null;

        return view('pages.Products.detail', compact('products','country','statename'));
    }
}