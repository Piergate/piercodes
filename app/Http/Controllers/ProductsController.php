<?php

namespace App\Http\Controllers;

use App\Image;
use App\Product;
use App\Category;
use Image as ImageIntervent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {

        return view('product_details', compact('product') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::all();
        return view('admin.addprojects',compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:191',
            'description' => 'required',
            'rate' => 'required',
            
            'url'  => 'required',
            'category_id' => 'required',
            'avater' => 'required',
            'background' => 'required',
            'logo' => 'required',
            'mockup' => 'required',
            'branding' => 'required',

        ]);
        $data = $request->all();

        $product = auth()->user()->products()->create([
            'title' => $data['title'],
            'description' => $data['description'],
            'rate' => $data['rate'],
            'category_id' => $data['category_id'],
            'slug' => str_replace(' ', '_', $data['title']),
            'url' => $data['url']
        ]);

        $avater = $data['avater'];
        $fileNameAvater = $product->title . '_avater.' . $avater->getClientOriginalExtension();
        ImageIntervent::make($avater)->save( storage_path('app/public/images/'.$fileNameAvater));

        $background = $data['background'];
        $fileNameBackground = $product->title . '_background.' . $background->getClientOriginalExtension();
        ImageIntervent::make($background)->save( storage_path('app/public/images/'.$fileNameBackground));

        $logo = $data['logo'];
        $fileNameLogo = $product->title . '_logo.' . $logo->getClientOriginalExtension();
        ImageIntervent::make($logo)->resize(300,300)->save( storage_path('app/public/images/'.$fileNameLogo));

        $mockup = $data['mockup'];
        $fileNameMockup = $product->title . '_mockup.' . $mockup->getClientOriginalExtension();
        ImageIntervent::make($mockup)->save( storage_path('app/public/images/'.$fileNameMockup));

        $branding = $data['branding'];
        $fileNameBranding = $product->title . '_branding .' . $branding->getClientOriginalExtension();
        ImageIntervent::make($branding)->save( storage_path('app/public/images/'.$fileNameBranding));

        $product->image()->create([
            'avater' => $fileNameAvater,
            'background' => $fileNameBackground,
            'logo' => $fileNameLogo,
            'mockup' => $fileNameMockup,
            'branding' => $fileNameBranding
        ]);
        return 'Your Project Add .';

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
}
