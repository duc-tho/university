<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;
use App\Http\Requests\AddSlideRequest;
use App\Http\Requests\EditSlideRequest;
use App\Models\Slide;


class SlideController extends Controller
{
    //
    public function getSlide()
    {
        # code...
    
        // return view('server.pages.slide.index');
        $data['slidelist'] = Slide::Where(["status"=>"1"])->orderBy('display_order','desc')->paginate(10);
        $data['faculityslide']=Faculty::all();
         return view('server.pages.slide.index',$data);
    }

    public function getAddSlide(){
        $data['faculityslide']=Faculty::all();
        return view('server.pages.slide.add_slide',$data);
    }
    public function postAddSlide(AddSlideRequest $request){
        $slide=new Slide();
        $slide->faculty_id = $request->faculty_id;
        $slide->name = $request->name;
        $slide->display_order = $request->display_order;
        
        $slide->browser_target = $request->browser_target;
        $slide->description = $request->description;
        $slide->created_by = $request->created_by;
        $slide->updated_by = $request->updated_by;
        $slide->status = $request->status;
        $slide->link = upload_file($request->img,'dist/upload/image/slide');
        $slide->save();

        return back();
    }

    public function postEditSlide(EditSlideRequest $request,$id){
        $slide = new Slide();
        $arr['name']= $request->name;
        $arr['display_order']=$request->display_order;
        
        $arr['browser_target']=$request->browser_target;
        $arr['description']=$request->description;
        $arr['created_by']=$request->created_by;
        $arr['updated_by']=$request->updated_by;
        $arr['status']=$request->status;
        if ($request->hasFile('img')) {
            $arr['link'] = upload_file($request->img,'dist/upload/image/slide');
        }
        $slide::where('id', $id)->update($arr);
        return redirect('admin/slide');
    }

    public function getEditSlide($id){
        $data['slide'] = Slide::find($id);
        $data['list_faculty'] = Faculty::all();
        return view('server.pages.slide.edit_slide', $data);
    }
    public function deleteSlide($id){
        Slide::destroy($id);
        return back();
    }
}
