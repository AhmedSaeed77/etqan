<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\ContactUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Mail\Reply;
use Mail;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function index(Request $request)
    {
        $contactuses = ContactUs::paginate(10);
        return view('dashboard.site.contactus.index',compact('contactuses'));
    }

    public function destroy($id)
    {
        $contactuses = ContactUs::find($id);
        $contactuses->delete();
        return redirect()->route('contactus.index')->with(['success' => __('messages.deleted_successfully')]);
    }

    public function reply(Request $request,$id)
    {
        $contactuses = ContactUs::find($id);
        $validator = Validator::make([
                                        'email' => $contactuses->email], [
                                        'email' => 'required|email',
                                    ]);

        if ($validator->fails())
        {
            return redirect()->route('contactus.index')->with(["error" => __('dashboard.invalid_email')]);
        }
        Mail::to($contactuses->email)->send(new Reply($request->reply));
        return redirect()->route('contactus.index')->with(["success"=>__('dashboard.reply_successfully')]);
    }




}
