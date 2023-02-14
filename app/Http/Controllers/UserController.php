<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\AK;

class UserController extends Controller
{
    public function index()
    {
        $data = AK::all();
        return view('form', compact('data'));
    }

    public function store(Request $request)
    {
        $category = new Ak();

        $category->name = $request->post('name');
        $category->email = $request->post('email');
        $category->phone = $request->post('phone');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads', $filename);
            $category->image = $filename;
        }
        $category->save();
        return redirect('form')->with('msg', " Added Sucessfully");
    }

    public function edit($id)
    {
        $list = Ak::find($id);
        return view('formedit', compact('list'));
    }

    public function update($id, Request $request)
    {

        // $list = $request->all();
        // Ak::find($id)->update($list);
        // return redirect('form')->with('msg','Form data  updated');
        $category = Ak::find($id);

        $category->name = $request->post('name');
        $category->email = $request->post('email');
        $category->phone = $request->post('phone');
        if ($request->hasfile('image')) {
            $destination = 'uploads/' . $category->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads', $filename);
            $category->image = $filename;
        }
        $category->update();
        return redirect('form')->with('msg', " updated Sucessfully");
    }

    public function delete(Request $request, $id)
    {

        $category = AK::find($id);
        $destination = 'uploads/' . $category->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $category->delete();
        return redirect("form")->with('status', ' Deleted successfullyy!!!');
    }

    //pagination

    public function paginate()
    {
        $data = Ak::paginate(5);
        return view('form',compact('data'));
    }
}
