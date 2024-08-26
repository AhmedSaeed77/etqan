<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Mail\Reply;
use App\Http\Requests\Dashboard\Doctor\DoctorRequest;
use App\Http\Services\Mutual\FileManagerService;
use Mail;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{

    public function __construct(
        private readonly FileManagerService $fileManagerService
    ) {

    }

    public function index()
    {
        $members = Member::paginate(10);
        return view('dashboard.site.members.index', compact('members'));
    }


    public function create()
    {
        return view('dashboard.site.members.create');
    }

    public function store(DoctorRequest $request)
    {
        try
        {
            if ($request->image !== null)
            {
                $image = $this->fileManagerService->handle('image', 'members/images');
            }
            Member::create([
                                'name' => $request->name ,
                                'image' => $image,
                                'description' => $request->description,
                            ]);

            return redirect()->route('members.index')->with(['success' => __('messages.created_successfully')]);
        }
        catch (\Exception $e)
        {
            return back()->with(['error' => __('messages.Something went wrong')]);
        }
    }

    public function edit($id)
    {
        $member = Member::find($id);
        return view('dashboard.site.members.edit',compact('member'));
    }

    public function update(DoctorRequest $request, string $id)
    {
        $image = null;
        if ($request->image !== null)
        {
            $image = $this->fileManagerService->handle('image', 'members/images');
        }
        $member = Member::find($id);
        if($image)
        {
            $member->update([
                                'name' => $request->name ,
                                'image' => $image,
                                'description' => $request->description,
                            ]);
        }
        else
        {
            $member->update([
                                'name' => $request->name ,
                                'description' => $request->description,
                            ]);
        }

        return redirect()->route('members.index')->with(['success' => __('messages.created_successfully')]);
    }

    public function destroy($id)
    {
        try
        {
            $member = Member::find($id);
            $member->delete();
            return redirect()->back()->with(['success' => __('messages.deleted_successfully')]);
        }
        catch (\Exception $e)
        {
            return back()->with(['error' => __('messages.Something went wrong')]);
        }
    }

}
