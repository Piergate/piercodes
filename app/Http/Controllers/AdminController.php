<?php

namespace App\Http\Controllers;

use Alert;
use Validator;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        $products = Product::all();
        return view('admin.adminpanel', compact('products'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $product = Product::find($product)->first();
        $categories = Category::all();
        return view('admin.editprojects', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $validate = Validator::make($request->all(), [
            'title'       => 'required|max:191',
            'description' => 'required',
            'rate'        => 'required',
            'url'         => 'required',
            'category_id' => 'required'
        ]);
        $data = $request->all();
        if ($validate->passes()) {
            $product = Product::find($product)->first();
            $product->update([
                'title' => Input::get('title'),
                'description' => Input::get('description'),
                'rate' => Input::get('rate'),
                'category_id' => Input::get('category_id'),
                'slug' => str_replace(' ', '_', Input::get('title')),
                'url' => Input::get('url')
            ]);
            if ($request->hasfile('avater')) {
                $avater = Input::get('avater');
                $fileNameAvater = $product->title . '_avater.' . $avater->getClientOriginalExtension();
                ImageIntervent::make($avater)->save( storage_path('app/public/app-images/'.$fileNameAvater));
                $product->image()->update([
                    'avater' => $fileNameAvater
                ]);
                $product->image()->save();
            }
            elseif ($request->hasfile('background')) {
                $background = Input::get('background');
                $fileNameBackground = $product->title . '_background.' . $background->getClientOriginalExtension();
                ImageIntervent::make($background)->save( storage_path('app/public/app-images/'.$fileNameBackground));
                $product->image()->update([
                    'background' => $fileNameBackground
                ]);
                $product->image()->save();
            }
            elseif ($request->hasfile('logo')) {
                $logo = Input::get('logo');
                $fileNameLogo = $product->title . '_logo.' . $logo->getClientOriginalExtension();
                ImageIntervent::make($logo)->resize(300,300)->save( storage_path('app/public/app-images/'.$fileNameLogo));
                $product->image()->update([
                    'logo' => $fileNameLogo
                ]);
                $product->image()->save();
            }
            elseif ($request->hasfile('mockup')) {
                $mockup = Input::get('mockup');
                $fileNameMockup = $product->title . '_mockup.' . $mockup->getClientOriginalExtension();
                ImageIntervent::make($mockup)->save( storage_path('app/public/app-images/'.$fileNameMockup));
                $product->image()->update([
                    'mockup' => $fileNameMockup
                ]);
                $product->image()->save();
            }
            elseif ($request->hasfile('branding')) {
                $branding = Input::get('branding');
                $fileNameBranding = $product->title . '_branding .' . $branding->getClientOriginalExtension();
                ImageIntervent::make($branding)->save( storage_path('app/public/app-images/'.$fileNameBranding));
                $product->image()->update([
                    'branding' => $fileNameBranding
                ]);
                $product->image()->save();
            }
            $product->save();
            Alert::success('Success Message', 'Product Edit Successfully');
            return redirect('/adminpanel');
        }
        return response()->json(['error'=>$validate->errors()->all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
