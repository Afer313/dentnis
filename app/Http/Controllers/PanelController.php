<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogItem;
use App\Models\Panel;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PanelController extends Controller
{
    public function index(){
        //
    }
    public function saveNewPanel(Request $request){
        $data = $request->validate([
            'cont_en' => 'required | unique:panels',
            'cont_ru' => 'required | unique:panels',
            'cont_tr' => 'required | unique:panels',
            'link' => 'nullable',
            'img' => 'required',
        ]);
        try{
            $panel = new Panel();
            $panel->cont_en = $data['cont_en'];
            $panel->cont_ru = $data['cont_ru'];
            $panel->cont_tr = $data['cont_tr'];
            $panel->link = $data['link'];
            $imgPath = $request->file('img')->store('images', 'public');
            $panel->img = $imgPath;
            $panel->save();
        }
        catch (\Exception $e){
            dd($e->getMessage());
        }
        return redirect()->back();
    }
    public function deletePanel($id)
    {
        $worker = Panel::findOrFail($id);
        $worker->delete();
        return redirect()->back();
    }
    public function remakePanelGet(Request $request, $id)
    {
        $posts = BlogItem::all();
        $workers =  Worker::all();
        $panels = Panel::all();
        $panel = Panel::all()->find($id);
        return view('admin.editing.updatePanel', compact('workers','posts','panels','panel'));
    }
    public function remakePanel(Request $request, $id)
    {
        $data = $request->validate([
            'cont_en' => 'required',
            'cont_ru' => 'required',
            'cont_tr' => 'required',
            'link' => 'nullable',
            'img' => 'required',
            'visibility' => 'required'
        ]);

        if ($request->hasFile('img')) {
            $existingImgPath = Panel::find($id)->img;
            if ($existingImgPath) Storage::disk('public')->delete($existingImgPath);
            $data['img'] = $request->file('img')->store('images', 'public');
        }

        Panel::where('id', $id)->update($data);

        return redirect()->back();
    }
}
