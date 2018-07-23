<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dhome_index()
    {
        $dhome_content=view('dhome_pages.dhome_content');
        return view('dhome')->with('yield_home_content',$dhome_content);
    }
    public function dservice_index()
    {
        $dservice_content=view('dhome_pages.dservice_content');
        return view('dhome')->with('yield_home_content',$dservice_content);
    }
    public function dproduct_index()
    {
        $dproduct_content=view('dhome_pages.dadvisor_content');
        return view('dhome')->with('yield_home_content',$dproduct_content);
    }
    public function dabout_index()
    {
        $dabout_content=view('dhome_pages.dabout_content');
        return view('dhome')->with('yield_home_content',$dabout_content);
    }
    public function dcontact_index()
    {
        $dcontact_content=view('dhome_pages.dcontact_content');
        return view('dhome')->with('yield_home_content',$dcontact_content);
    }
    public function dprice_index()
    {
        $dprice_content=view('dhome_pages.dprice_content');
        return view('dhome')->with('yield_home_content',$dprice_content);
    }
    public function customer_reg()
    {
        $customer=view('dhome_pages.customer_registration');
        return view('dhome')->with('yield_home_content',$customer);
    }
    public function product_cart()
    {
        $product_cart=view('dhome_pages.dcart_content');
        return view('dhome')->with('yield_home_content',$product_cart);
    }
    public function product_checkout()
    {
        $product_checkout=view('dhome_pages.product_checkout');
        return view('dhome')->with('yield_home_content',$product_checkout);
    }
    public function portwallet_pay()
    {
        $portwallet_pay=view('dhome_pages.portpay');
        return view('dhome')->with('yield_home_content',$portwallet_pay);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
