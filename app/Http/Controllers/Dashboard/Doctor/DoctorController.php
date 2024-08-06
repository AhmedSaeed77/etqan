<?php

namespace App\Http\Controllers\Dashboard\Doctor;
use App\Models\Doctor;
use App\Http\Requests\Dashboard\Doctor\DoctorRequest;
use App\Http\Controllers\Controller;
use App\Http\Services\Mutual\FileManagerService;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function __construct(
        private readonly FileManagerService $fileManagerService
    ) {

    }

    public function index()
    {
        $doctors = Doctor::paginate(10);
        return view('dashboard.site.doctors.index', compact('doctors'));
    }

    public function show($id)
    {

    }

    public function create()
    {
        return view('dashboard.site.doctors.create');
    }

    public function store(DoctorRequest $request)
    {
        try
        {
            if ($request->image !== null)
            {
                $image = $this->fileManagerService->handle('image', 'doctors/images');
            }
            Doctor::create([
                                'name' => $request->name ,
                                'image' => $image,
                                'description' => $request->description,
                            ]);

            return redirect()->route('homedoctors.index')->with(['success' => __('messages.created_successfully')]);
        }
        catch (\Exception $e)
        {
            return back()->with(['error' => __('messages.Something went wrong')]);
        }
    }

    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('dashboard.site.doctors.edit',compact('doctor'));
    }

    public function update(DoctorRequest $request, string $id)
    {
        $image = null;
        if ($request->image !== null)
        {
            $image = $this->fileManagerService->handle('image', 'doctors/images');
        }
        $doctor = Doctor::find($id);
        if($image)
        {
            $doctor->update([
                                'name' => $request->name ,
                                'image' => $image,
                                'description' => $request->description,
                            ]);
        }
        else
        {
            $doctor->update([
                                'name' => $request->name ,
                                'description' => $request->description,
                            ]);
        }

        return redirect()->route('homedoctors.index')->with(['success' => __('messages.created_successfully')]);
    }

    public function destroy($id)
    {
        try
        {
            $doctor = Doctor::find($id);
            $doctor->delete();
            return redirect()->back()->with(['success' => __('messages.deleted_successfully')]);
        }
        catch (\Exception $e)
        {
            return back()->with(['error' => __('messages.Something went wrong')]);
        }
    }
}
