<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Traits\AppCommonTraits;
use Illuminate\Contracts\Encryption\DecryptException;
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

class SearchController extends Controller
{
    use AppCommonTraits;
    
    public function searchProductsdyn($country=null, $name=null){

        $this->generateSeoData([
            'title' => 'Search Products',
            'description' => 'Search Products',
        ]); 

        $filteredcountry = '';
        $countries = Countries::get();
        foreach ($countries as $key => $value) {
            $value->country_name = strtolower(str_replace(' ','',$value->name));
            if($value->country_name == $country){
                $filteredcountry = $value->iso_name;
            }
        }

        // filter products  based on country and search query from multiple columns //
        $products = products::select('id','title','slug','category','price','quantity','image_link','short_description','affiliate_link')->where('status', 'Active')->where('country', $filteredcountry)->where(function ($query) use ($name) {
            $query->where('title', 'like', '%' . $name . '%')
                ->orWhere('category', 'like', '%' . $name . '%')
                ->orWhere('short_description', 'like', '%' . $name . '%')
                ->orWhere('description', 'like', '%' . $name . '%')
                ->orWhere('ingredients', 'like', '%' . $name . '%')
                ->orWhere('usage', 'like', '%' . $name . '%');
        })->get();

        foreach ($products as $key => $value) {
            foreach (explode(',', $value->category) as $cat) {
                $value->singlecategory = $cat;
            }
        }

        return view('pages.filteredproducts.searchproducts', compact('products','country'));

    }

}