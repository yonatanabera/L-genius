<?php

namespace App\Http\Controllers;

use App\Model\Blog;
use App\Model\BlogCategory;
use App\Model\ContactInformation;
use Illuminate\Http\Request;
use DataTables;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $page='blog';
        $blogs=Blog::paginate(3);
        $blogCategories=BlogCategory::all();

        $contact=ContactInformation::find(1);
        
        return view('client.blog', compact('page', 'blogs', 'blogCategories', 'contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       
        return view('admin.blog.create');
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

        $data=$request->all();
        if($file=$request->file('photo')){
            $name=$request->file('photo')->getClientOriginalName();
            $file->move('images/Blogs', $name);
            $data['photo']=$name;
            
        }
        if($blogCategory=BlogCategory::where('name',$data['category'])->first()){
            $data['category_id']=$blogCategory->id;
         
          
        }else{
            
            $data['category_id']=BlogCategory::create(['name'=>$data['category']])->id;
           
        }
        Blog::create($data);
        return redirect(route('admin.blog.view'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
        $page='blog';
        $blog=Blog::findOrFail($blog->id);
        $contact=ContactInformation::find(1);
        return view('client.blog_readmore', compact('page', 'blog', 'contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit( $blog)
    {
        //
        $data=Blog::find($blog);
        $data['category']=$data->category->name;
        return view('admin.blog.edit', compact('data'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $blog)
    {
        //
        $data=$request->all();
        if($file=$request->file('photo')){
            $name=$request->file('photo')->getClientOriginalName();
            $file->move('images/Blogs', $name);
            $data['photo']=$name;
            
        }
        if($blogCategory=BlogCategory::where('name',$data['category'])->first()){
            $data['category_id']=$blogCategory->id;
            Blog::find($blog)->update($data);
          
        }else{
            
            $data['category_id']=BlogCategory::create(['name'=>$data['category']])->id;
            Blog::find($blog)->update($data);
        }
        return redirect(route('admin.blog.view'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }

    public function admin_blog_view(){
        return view('admin.blog.view');
    }


    public function dataAjax(){
        $data=Blog::all();
        return Datatables::of($data)->editColumn('updated_at', function($data){
            return $data->updated_at->diffForHumans();
        })->editColumn('category_id', function($data){
            return $data->category->name;
        })->addColumn('action', function($data){
            $button='<a type="button" class="edit btn btn-warning btn-sm" href="'. route('blog.edit', $data->id).'" name="edit" id="'.$data->id.'">Edit</a>';
            return $button;
        })->addColumn('comment', function($data){
            $count=count(Blog::find($data->id)->comment);
            $button='<a type="button" class="edit btn btn-primary btn-sm" href="'. route('blogComment.show', $data->id).'" name="edit" id="'.$data->id.'"> ('.$count.') Comment</a>';
            return $button;
        })->rawColumns(['action', 'comment'])->make(true);
    }
}
