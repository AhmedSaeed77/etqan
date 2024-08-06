<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Http\Requests\Api\V1\User\LoginRequest;
use App\Http\Services\Mutual\FileManagerService;
use App\Models\Advertisements;
use App\Models\Doctor;
use App\Models\ContactUs;
use App\Models\User;
use App\Repository\StructureRepositoryInterface;
use Illuminate\Support\Str;
use App\Http\Requests\Api\V1\User\UserRequest;


class HomeController extends Controller
{

    public function __construct(
        private readonly StructureRepositoryInterface $structureRepository,
        private readonly FileManagerService          $fileManagerService
    )
    {
    }

    public function index()
    {
        $local = 'ar';
        $structures = $this->structureRepository->structure('home');
        $data = json_decode($structures['content'], true);
        $home = $data[$local];

        $advertisements = Advertisements::all();
        $doctors = Doctor::latest()->take(3)->get();
        return view('website.site.index',compact('home','advertisements','doctors'));
    }

    public function doctors()
    {
        $local = 'ar';
        $structures = $this->structureRepository->structure('home');
        $data = json_decode($structures['content'], true);
        $home = $data[$local];
        $doctors = Doctor::get();
        return view('website.site.doctors',compact('home','doctors'));
    }

    public function contact()
    {
        $local = 'ar';
        $structures = $this->structureRepository->structure('home');
        $data = json_decode($structures['content'], true);
        $home = $data[$local];
        return view('website.site.contact',compact('home'));
    }

    public function storecontact(Request $request)
    {
        $request->validate([
                                'name' => 'required|string',
                                'email' => 'required|email',
                                'message' => 'required',
                            ]);
        $contact = ContactUs::create([
                                        'name' => $request->name,
                                        'email' => $request->email,
                                        'message' => $request->message,
                                    ]);
        toastr()->success('تم الارسال بنجاح');
        return redirect()->back();

    }

    public function getregister()
    {
        return view('website.site.register');
    }

    public function register(UserRequest $request)
    {
        try
        {
            $data = $request->validated();
            $user = User::create([
                                    'name' => $data['name'],
                                    'email' => $data['email'],
                                    'phone' => $data['phone'],
                                    'is_active' => false,
                                    'graduation_document' => $this->fileManagerService->handle("graduation_document", "user/images"),
                                    'certificate' => $this->fileManagerService->handle("certificate", "user/images"),
                                ]);

            return redirect()->back()->with(['success' => 'تم انشاء حساب بنجاح']);
        }
        catch (\Exception $e)
        {
            return back()->with(['error' => __('messages.Something went wrong')]);
        }
    }

    public function getlogin()
    {
        return view('website.site.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();
        $user = User::where('email',$request->email)->first();
        if (auth('website')->attempt($credentials))
        {
            if($user->is_active == 0)
            {
                return redirect()->back()->with(["error"=>'هذا المستخدم غير مفعل']);
            }
            return redirect()->route('index')->with(['success' => 'تم تسجيل الدخول بنجاح.']);
        }
        else
        {
            return redirect()->back()->with(['error' => 'البريد الالكترونى او كلمة المرور خطأ']);
        }
    }

    public function logout()
    {
        auth('website')->logout();
        return redirect()->route('index');
    }

  public function ads_details($id){
    return view('website.site.ads_details');
  }

  public function program_details($id){
    return view('website.site.program_details');
  }

}
