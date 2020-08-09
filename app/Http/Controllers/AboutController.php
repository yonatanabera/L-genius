<?php

namespace App\Http\Controllers;

use App\Model\About;
use App\Model\CompanyDetail;
use App\Model\ContactInformation;
use Illuminate\Http\Request;
use App\Http\Requests\AboutArticleRequest;
use App\Http\Requests\ManagerInformationRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   
    
    public function index()
    {
        //
        $page='about';
        $company_details=CompanyDetail::find(1);
        $about=About::find(1);
        $contact=ContactInformation::find(1);
        return view('client.about', compact('page', 'about', 'company_details', 'contact'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
        $contact=ContactInformation::find(1);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($about)
    {
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(AboutArticleRequest $request,  $about)
    {
        //
        $input=$request->all();
        if($file=$request->file('article_photo')){
            
            $name=time().$file->getClientOriginalName();
            $file->move('images/about', $name);
            $input['article_photo']=$name;
            
        }else if($file=$request->file('profile_card_image')){
            
            $name=time().$file->getClientOriginalName();
            $file->move('images/about', $name);
            $input['profile_card_image']=$name;
        }
        About::find(1)->update($input);
        $request->session()->flash('success', 'About article is updated successfully');
        return redirect()->back();
    }

    public function updates(ManagerInformationRequest $request,  $about)
    {
        //
        $input=$request->all();
        if($file=$request->file('article_photo')){
            
            $name=time().$file->getClientOriginalName();
            $file->move('images/about', $name);
            $input['article_photo']=$name;
            
        }else if($file=$request->file('profile_card_image')){
            
            $name=time().$file->getClientOriginalName();
            $file->move('images/about', $name);
            $input['profile_card_image']=$name;
        }
        About::find(1)->update($input);
        $request->session()->flash('success', 'Manager information has been updated successfully');
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }

    public function article(){
        $data=About::find(1);
        
        return view('admin.about.article', compact('data'));
    }

    public function manager_information(){
        $data=About::find(1);
        return view('admin.about.managerinfo', compact('data'));
    }

    public function statements(){
        $data=CompanyDetail::find(1);
        // return $data;
        return view('admin.about.statement', compact('data'));
    }
}
