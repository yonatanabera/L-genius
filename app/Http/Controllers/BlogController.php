<?php

namespace App\Http\Controllers;

use App\Model\Blog;
use App\Model\BlogCategory;
use App\Model\ContactInformation;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use DataTables;
class BlogController extends Controller
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
       
        $category=BlogCategory::pluck('name', 'name');
        return view('admin.blog.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
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
        $request->session()->flash('success', 'Blog Created');
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
        $category=BlogCategory::pluck('name' , 'name');
        return view('admin.blog.edit', compact('data', 'category'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $blog)
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
        $request->session()->flash('success', 'Blog Updated');
        return redirect(route('admin.blog.view'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $blog)
    {
        //
        Blog::find($blog)->delete();
        $request->session()->flash('success', 'Blog Deleted');
        return redirect()->back();
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
            $button='<a type="button" class="edit btn btn-warning btn-sm mx-1 my-1" href="'. route('blog.edit', $data->id).'" name="edit" id="'.$data->id.'"><i class="fa fa-edit"></i></a>';
            $button.='<form method="post" action="'.route('blog.destroy', $data->id).'">'.csrf_field().'<input type="hidden" name="_method" value="DELETE"><button type="submit" value="" class="edit btn btn-danger btn-sm my-1 mx-1" ><i class="fa fa-trash"></i></button></form>';

            return $button;
        })->addColumn('comment', function($data){
            $count=count(Blog::find($data->id)->comment);
            $button='<a type="button" class="edit btn btn-primary btn-sm" href="'. route('blogComment.show', $data->id).'" name="edit" id="'.$data->id.'"> ('.$count.') Comment</a>';
            return $button;
        })->rawColumns(['action', 'comment'])->make(true);
    }
}
