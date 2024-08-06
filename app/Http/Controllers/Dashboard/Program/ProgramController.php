<?php

namespace App\Http\Controllers\Dashboard\Program;
use App\Models\Program;
use App\Http\Requests\Dashboard\Program\ProgramRequest;
use App\Http\Controllers\Controller;
use App\Http\Services\Mutual\FileManagerService;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function __construct(
        private readonly FileManagerService $fileManagerService
    ) {

    }

    public function index()
    {
        $programs = Program::paginate(10);
        return view('dashboard.site.programs.index', compact('programs'));
    }

    public function show($id)
    {

    }

    public function create()
    {
        return view('dashboard.site.programs.create');
    }

    public function store(ProgramRequest $request)
    {
        try
        {
            if ($request->image !== null)
            {
                $image = $this->fileManagerService->handle('image', 'programs/images');
            }
            Program::create([
                                'name' => $request->name ,
                                'image' => $image,
                                'description' => $request->description,
                                'url_video' => $request->url_video,
                            ]);

            return redirect()->route('programs.index')->with(['success' => __('messages.created_successfully')]);
        }
        catch (\Exception $e)
        {
            return back()->with(['error' => __('messages.Something went wrong')]);
        }
    }

    public function edit($id)
    {
        $program = Program::find($id);
        return view('dashboard.site.programs.edit',compact('program'));
    }

    public function update(ProgramRequest $request, string $id)
    {
        $image = null;
        if ($request->image !== null)
        {
            $image = $this->fileManagerService->handle('image', 'programs/images');
        }
        $program = Program::find($id);
        if($image)
        {
            $program->update([
                                'name' => $request->name ,
                                'image' => $image,
                                'description' => $request->description,
                                'url_video' => $request->url_video,
                            ]);
        }
        else
        {
            $program->update([
                                'name' => $request->name ,
                                'description' => $request->description,
                                'url_video' => $request->url_video,
                            ]);
        }

        return redirect()->route('programs.index')->with(['success' => __('messages.created_successfully')]);
    }

    public function destroy($id)
    {
        try
        {
            $program = Program::find($id);
            $program->delete();
            return redirect()->back()->with(['success' => __('messages.deleted_successfully')]);
        }
        catch (\Exception $e)
        {
            return back()->with(['error' => __('messages.Something went wrong')]);
        }
    }
}
