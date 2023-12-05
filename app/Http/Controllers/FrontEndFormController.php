<?php

namespace App\Http\Controllers;

use App\Models\SupportForm;
use Illuminate\Http\Request;
use DB;


class FrontEndFormController extends Controller
{
    public function frontendform()
    {

        return view('frontendform');
    }

    public function datasend(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $massage = $request->massage;

        $savedata = DB::table('support')
            ->insert(
                array(
                    'name' => $name,
                    'email' => $email,
                    'subject' => $subject,
                    'massage' => $massage
                )
            );

        if ($savedata) {
            return redirect()->back();

        } else {
            return "Not Saved";

        }

    }
    public function readdata()
     {
        
        //    $data = SupportForm::all();
        //    return view('frontendform', compact('data'));

           $data=DB::table('support')->get();
           return view('frontendform')->with('data',$data);
     }

     public function delete(Request $request)
     {
        $id = $request->id;
        $delete = DB::table('support')->where('id',$id)->delete();
        return view('response.success');

     }

}


