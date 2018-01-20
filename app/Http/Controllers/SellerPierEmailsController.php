<?php

namespace App\Http\Controllers;

use App\SellerPierEmails;
use Illuminate\Http\Request;
use App\Jobs\SendSellerPierMaill;

class SellerPierEmailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.SellerPierEmailForm');        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $emails = explode(PHP_EOL, $request->emailAddress);
       // $list =  array();
       foreach ($emails as $key => $email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $mailAdded =  SellerPierEmails::firstOrCreate([
               'email' => $email
           ]);
            $list = $mailAdded->email;
            SendSellerPierMaill::dispatch($list);
        }
    }
    // return $list;
    return "You Added " .count($emails) ." Emails";
    /*var_dump( Mail:: failures());*/
}

    /**
     * Display the specified resource.
     *
     * @param  \App\SellerPierEmails  $sellerPierEmails
     * @return \Illuminate\Http\Response
     */
    public function show(SellerPierEmails $sellerPierEmails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SellerPierEmails  $sellerPierEmails
     * @return \Illuminate\Http\Response
     */
    public function edit(SellerPierEmails $sellerPierEmails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SellerPierEmails  $sellerPierEmails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SellerPierEmails $sellerPierEmails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SellerPierEmails  $sellerPierEmails
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellerPierEmails $sellerPierEmails)
    {
        //
    }
}
