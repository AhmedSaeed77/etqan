<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\User\UserRequest;
use App\Http\Services\Dashboard\User\UserService;
use Illuminate\Http\Request;
use App\Http\Mail\Reply;
use Illuminate\Support\Facades\Validator;

use Mail;

class UserController extends Controller
{
    public function __construct(private readonly UserService $user)
    {
    }

    public function index()
    {
        return $this->user->index();
    }

    public function show($id)
    {
        return $this->user->show($id);
    }

    public function create()
    {
        return $this->user->create();
    }

    public function store(UserRequest $request)
    {
        return $this->user->store($request);
    }

    public function edit(string $id)
    {
        return $this->user->edit($id);
    }

    public function update(UserRequest $request, string $id)
    {
        return $this->user->update($request, $id);
    }

    public function destroy(string $id)
    {
        return $this->user->destroy($id);
    }

    public function toggle(Request $request)
    {
        try
        {
            $user = \App\Models\User::findOrFail($request->itemId);
            $user->update(['is_active' => $request->status]);
            return response()->json(['success' => true]);
        }
        catch (\Exception $e)
        {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function reply(Request $request,$id)
    {
        $user = \App\Models\User::find($id);
        $validator = Validator::make([
                                        'email' => $user->email], [
                                        'email' => 'required|email',
                                    ]);

        if ($validator->fails())
        {
            return redirect()->route('contactus.index')->with(["error" => 'البريد الالكترونى غير صحيح']);
        }
        Mail::to($user->email)->send(new Reply($request->reply));
        return redirect()->back()->with(["success"=>__('dashboard.reply_successfully')]);
    }
}
