<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\News\AddFormValidation;

use App\Http\Requests\News\EditFormValidation;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends AdminBaseController
{
    protected $view_path='admin.news';
    protected $base_route='admin.news';
    protected $folder_name='news';
    protected $panel='News';
    protected $folder_path;

    public function __construct()
    {
        $this->folder_path=public_path().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$this->folder_name;
    }

    public function index()
    {
        $data=[];
        $data['rows']=News::select('id','created_at','title','image','status')->get();
        //dd($data['rows']);
        return view(parent::loadDataToVie($this->view_path.'.index'),compact('data'));
    }

    public function create()
    {
        return view(parent::loadDataToVie($this->view_path.'.create'));
    }

    public function store(Request $request)
    {


       //dd($request->all());
        if ($request->hasFile('main_image'))
        {
            $image=$request->file('main_image');
            $image_name=rand(4501,5010).'_'.$image->getClientOriginalName();
            $image->move($this->folder_path,$image_name);

        }
        //dd($request->all());
        $request->request->add([
            'slug'=> Str::slug($request->get('title')),
            'status'=>$request->get('status')=='active'?1:0,
            'image'=> isset($image_name)?$image_name:null,
        ]);

        News::create($request->all());

        $request->session()->flash('Success_message',$this->panel.' added successfylly');
        return redirect()->route($this->base_route);
    }

    public function edit(Request $request,$id)
    {
        $data=[];
        $data['row']=News::where('id',$id)->first();

        if (!$data['row']){
            $request->session()->flash('error_message','Invalid qeruest');
            return redirect()->route($this->base_route);
        }

        $data['row']->status=$data['row']->status==1?'active':'in-active';

        return view(parent::loadDataToVie($this->view_path.'.edit'),compact('data'));
    }

    public function update(EditFormValidation $request,$id)
    {
        $data=[];
        $data['row']=News::where('id',$id)->first();

        if ($request->hasFile('main_image'))
        {
            $image=$request->file('main_image');
            $image_name=rand(4501,5010).'_'.$image->getClientOriginalName();
            $image->move($this->folder_path,$image_name);

            if ($data['row']->image && $this->folder_path.DIRECTORY_SEPARATOR.$data['row']->image)
            {
                unlink($this->folder_path.DIRECTORY_SEPARATOR.$data['row']->image);
            }

        }
        $request->request->add([

            'slug'=> Str::slug($request->get('title')),
            'status'=>$request->get('status')=='active'?1:0,
            'image'=>isset($image_name)?$image_name:$data['row']->image,

        ]);

        $data['row']->update($request->all());

        $request->session()->flash('success_massage','News updated successfully');
        return redirect()->route($this->base_route);
    }

    public function destroy(Request $request,$id)
    {
        //dd($request->id);
        $data=[];
        $data['row']=News::where('id',$id)->first();
        if (!$data['row']){
            $request->session()->flash('success_massage','Invalid request.');
            return redirect()->route($this->base_route);
        }
        if ($data['row']->image && file_exists(public_path().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'category'.DIRECTORY_SEPARATOR.$data['row']->image))
        {
            unlink(public_path().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'category'.DIRECTORY_SEPARATOR.$data['row']->image);
            $data['row']->delete();
            $request->session()->flash('success_massage','News deleted successfully');
            return redirect()->route($this->base_route);
        }

        return redirect()->route($this->base_route);
    }


}
