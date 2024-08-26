<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Graduate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Mail\Reply;
use App\Http\Requests\Dashboard\Graduate\GraduateRequest;
use App\Http\Services\Mutual\FileManagerService;
use Mail;
use Illuminate\Support\Facades\Validator;

class GraduateController extends Controller
{

    public function __construct(
        private readonly FileManagerService $fileManagerService
    ) {

    }

    public function index()
    {
        $graduates = Graduate::paginate(10);
        return view('dashboard.site.graduates.index', compact('graduates'));
    }


    public function create()
    {
        return view('dashboard.site.graduates.create');
    }

    public function store(GraduateRequest $request)
    {
        try
        {
            Graduate::create([
                                'name' => $request->name ,
                                'description' => $request->description,
                            ]);

            return redirect()->route('graduates.index')->with(['success' => __('messages.created_successfully')]);
        }
        catch (\Exception $e)
        {
            return back()->with(['error' => __('messages.Something went wrong')]);
        }
    }

    public function edit($id)
    {
        $graduate = Graduate::find($id);
        return view('dashboard.site.graduates.edit',compact('graduate'));
    }

    public function update(GraduateRequest $request, string $id)
    {
        $graduate = Graduate::find($id);
        $graduate->update([
                            'name' => $request->name ,
                            'description' => $request->description,
                        ]);

        return redirect()->route('graduates.index')->with(['success' => __('messages.created_successfully')]);
    }

    public function destroy($id)
    {
        try
        {
            $graduate = Graduate::find($id);
            $graduate->delete();
            return redirect()->back()->with(['success' => __('messages.deleted_successfully')]);
        }
        catch (\Exception $e)
        {
            return back()->with(['error' => __('messages.Something went wrong')]);
        }
    }

}
