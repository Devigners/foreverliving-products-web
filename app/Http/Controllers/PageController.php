<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Traits\AppCommonTraits;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PageController extends Controller
{

    use AppCommonTraits;

    public function index()
    {
        $this->generateSeoData([
            'title' => 'Home',
            'description' => 'Home',
        ]);
        return view('pages.Home.index');
    }

    // shop
    public function shop(Request $request, $country, $restArea = null)
    {
        $this->generateSeoData([
            'title' => 'Shop',
            'description' => 'Shop',
        ]);
        return view('pages.Shop.index');
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
    public function productDetail(Request $request, $country, $restArea = null, $category, $name)
    {
        $this->generateSeoData([
            'title' => 'Product Detail',
            'description' => 'Product Detail',
        ]);
        return view('pages.Products.detail');
    }
}
