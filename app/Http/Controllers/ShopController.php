<?php

namespace App\Http\Controllers;

use App\Model\Shop;
use App\Model\ContactInformation;
use Illuminate\Http\Request;
use App\Model\BlogCategory;
use App\Model\Blog;
use App\Model\About; 
use App\Http\Requests\ShopRequest;
use DataTables;
class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware(['auth','admin'])->except(['index', 'show']);
    }
    public function index()
    {
        //
        $page='shop';
        $contact=ContactInformation::find(1);
        $items=Shop::paginate(9);
        $total=Shop::all();
        $blogCategories=BlogCategory::all();
        $popular=Blog::orderBy('count', 'desc')->limit(4)->get();
        $about=About::find(1);
        return view('client.shop', compact('page', 'contact', 'items', 'total', 'blogCategories', 'popular', 'about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.shop.additem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShopRequest $request)
    {
        $data=$request->all();
        if($file=$request->file('photo')){
            $name=time().$request->file('photo')->getClientOriginalName();
            $file->move('images/shops', $name);
            $data['photo']=$name;
            
        }
       
        Shop::create($data);
        $request->session()->flash('success', 'Item Created');
        return redirect(route('admin.blog.view'));
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show( $shop)
    {
        //
        $page='shop';
        $item=Shop::where('slug',$shop)->first();
        $contact=ContactInformation::find(1);
        $blogCategories=BlogCategory::all();
        $shop=Shop::all()->random(6);
        $popular=Blog::orderBy('count', 'desc')->limit(4)->get();
        $about=About::find(1);
        return view('client.shop_readmore', compact('page', 'contact', 'item', 'blogCategories', 'popular', 'shop', 'about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit( $shop)
    {
        $data=Shop::find($shop);
        return view('admin.shop.edit', compact('data'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(ShopRequest $request,  $shop)
    {
        //
        $data=$request->all();
        if($file=$request->file('photo')){
            $name=time().$request->file('photo')->getClientOriginalName();
            $file->move('images/shops', $name);
            $data['photo']=$name;
            
        }
        Shop::find($shop)->update($data);
        $request->session()->flash('success', 'Item Updated');
        return redirect(route('admin.shop.items'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $shop)
    {
        //
        Shop::find($shop)->delete();
        $request->session()->flash('success', 'Blog Deleted');
        return redirect()->back();
    }

    public function dataAjax(){
        $data=Shop::all();
        return Datatables::of($data)->addColumn('action', function($data){
            $button='<a type="button" class="edit btn btn-warning btn-sm mx-1 my-1" href="'. route('shop.edit', $data->id).'" name="edit" id="'.$data->id.'"><i class="fa fa-edit"></i></a>';
            $button.='<form method="post" action="'.route('shop.destroy', $data->id).'">'.csrf_field().'<input type="hidden" name="_method" value="DELETE"><button type="submit" value="" class="edit btn btn-danger btn-sm my-1 mx-1" ><i class="fa fa-trash"></i></button></form>';

            return $button;
        })->addColumn('comment', function($data){
            $count=count(Shop::find($data->id)->review);
            $button='<a type="button" class="edit btn btn-primary btn-sm" href="'. route('itemReview.show', $data->id).'" name="edit" id="'.$data->id.'"> ('.$count.') Comment</a>';
            return $button;
        })->rawColumns(['action', 'comment'])->make(true);
    }

    public function items(){
        return view('admin.shop.items');
    }

    public function orders(){
        return view('admin.shop.orders');
    }

    public function reviews(){
        return view('admin.shop.reviews');
    }
}
