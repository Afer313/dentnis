<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogItem;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkerController extends Controller
{
    public function saveNewWorker(Request $request)
    {
        $request->validate([
            'name_tr' => 'required|unique:workers',
            'position_tr' => 'required',
            'name_en' => 'required|unique:workers',
            'position_en' => 'required',
            'name_ru' => 'required|unique:workers',
            'position_ru' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        try {
            $worker = new Worker();
            $worker->name_tr = $request->input('name_tr');
            $worker->name_en = $request->input('name_en');
            $worker->name_ru = $request->input('name_ru');
            $worker->position_tr = $request->input('position_tr');
            $worker->position_en = $request->input('position_en');
            $worker->position_ru = $request->input('position_ru');

            $imgPath = $request->file('img')->store('images', 'public');
            $worker->img = $imgPath;
            $worker->save();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return redirect()->back();
    }

    public function deleteWorker($id)
    {
        $worker = Worker::findOrFail($id);
        $worker->delete();
        return redirect()->back();
    }
    public function remakeWorkerGet(Request $request, $id)
    {
        $posts = BlogItem::all();
        $workers =  Worker::all();
        $worker = Worker::all()->find($id);
        return view('admin.editing.remakeWorker', compact('workers','worker','posts'));
    }
    public function remakeWorker(Request $request, $id)
    {
        $data = $request->validate([
            'name_tr' => 'required|unique:workers,name_tr,' . $id,
            'position_tr' => 'required',
            'name_en' => 'required|unique:workers,name_en,' . $id,
            'position_en' => 'required',
            'name_ru' => 'required|unique:workers,name_ru,' . $id,
            'position_ru' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('img')) {
            $existingImgPath = Worker::find($id)->img;
            if ($existingImgPath) Storage::disk('public')->delete($existingImgPath);
            $data['img'] = $request->file('img')->store('images', 'public');
        }

        Worker::where('id', $id)->update($data);

        return redirect()->back();
    }

}

