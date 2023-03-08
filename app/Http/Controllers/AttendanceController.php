<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Camera;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Reference\Reference;

class AttendanceController extends Controller
{
    public function index()
    {
        Attendance::paginate(10);
        return view('attendance');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $img = $request->image;
        $folderPath = "/public/photo/";

        $image_parts = explode(";base64,", $img);
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = 'photo.png';

        $file = $folderPath . $fileName;
        if (file_exists(public_path('photo/photo.png'))) {
            unlink(storage_path($folderPath . 'photo.png'));
            Storage::put($file, $image_base64);
        } else {
            Storage::put($file, $image_base64);
        }
        // return view('attendance');
        return redirect()->route('attendance.check');
    }

    public function check(){
        // create attendance
        $students = Student::all();

        $camImg = storage_path('\app\public\photo\photo.png');
        $camImg = base64_encode(file_get_contents($camImg));

        $recognition = [];
        foreach ($students as $student) {
            $referenceImg = $student->images;
            $referenceImg = storage_path('app\\public\\'.$referenceImg);
            $referenceImg = base64_encode(file_get_contents($referenceImg));
            $compare = Http::asForm()->post('https://api-us.faceplusplus.com/facepp/v3/compare?', [
                'api_key' => 'BylU_56kOE6uVhKHLm_SJxrgZao5Ooon',
                'api_secret' => 'mJTin_kFlMGz-rmlgtKizFzsPFYF-MWN',
                'image_base64_1' => $referenceImg,
                'image_base64_2' => $camImg,
            ]);
            $compare = json_decode($compare);
            $recognition[$student->nim] = $compare;
        }
        $bestMatch = [];
        $max = 0;
        foreach ($recognition as $key=>$item) {
            if ($item->confidence > $max) {
                // dd($item->confidence);
                $max = $item->confidence;
                unset($bestMatch);
                $bestMatch[$key] = $item;
            }
        }
        Attendance::create([
            'student_nim' => array_keys($bestMatch)[0]
        ]);
        return redirect()->route('attendance');


    }
}
