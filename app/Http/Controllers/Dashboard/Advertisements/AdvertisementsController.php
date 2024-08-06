<?php

namespace App\Http\Controllers\Dashboard\Advertisements;
use App\Models\Advertisements;
use App\Http\Requests\Dashboard\Advertisements\AdvertisementsRequest;
use App\Http\Controllers\Controller;
use App\Http\Services\Mutual\FileManagerService;
use Illuminate\Http\Request;

class AdvertisementsController extends Controller
{
    public function __construct(
        private readonly FileManagerService $fileManagerService
    ) {

    }

    public function index()
    {
        $advertisements = Advertisements::paginate(10);
        return view('dashboard.site.advertisements.index', compact('advertisements'));
    }

    public function show($id)
    {

    }

    public function create()
    {
        return view('dashboard.site.advertisements.create');
    }

    public function store(AdvertisementsRequest $request)
    {
        try
        {
            if ($request->image !== null)
            {
                $image = $this->fileManagerService->handle('image', 'advertisements/images');
            }
            Advertisements::create([
                                        'name' => $request->name ,
                                        'image' => $image,
                                        'description' => $request->description,
                                        'date_time' => $request->date_time
                                    ]);

                                    return redirect()->route('advertisements.index')->with(['success' => __('messages.created_successfully')]);
        }
        catch (\Exception $e)
        {
            return back()->with(['error' => __('messages.Something went wrong')]);
        }
    }

    public function edit($id)
    {
        $advertisement = Advertisements::find($id);
        return view('dashboard.site.advertisements.edit',compact('advertisement'));
    }

    public function update(AdvertisementsRequest $request, string $id)
    {
        $image = null;
        if ($request->image !== null)
        {
            $image = $this->fileManagerService->handle('image', 'advertisements/images');
        }
        $advertisement = Advertisements::find($id);
        if($image)
        {
            $advertisement->update([
                                        'name' => $request->name ,
                                        'image' => $image,
                                        'description' => $request->description,
                                        'date_time' => $request->date_time
                                    ]);
        }
        else
        {
            $advertisement->update([
                                        'name' => $request->name ,
                                        'description' => $request->description,
                                        'date_time' => $request->date_time
                                    ]);
        }

        return redirect()->route('advertisements.index')->with(['success' => __('messages.created_successfully')]);
    }

    public function destroy($id)
    {
        try
        {
            $advertisement = Advertisements::find($id);
            $advertisement->delete();
            return redirect()->back()->with(['success' => __('messages.deleted_successfully')]);
        }
        catch (\Exception $e)
        {
            return back()->with(['error' => __('messages.Something went wrong')]);
        }
    }
}
