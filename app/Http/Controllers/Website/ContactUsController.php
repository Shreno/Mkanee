<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Project;


class ContactUsController extends Controller
{
    public function index()
    {
       
        $projects=Project::all();
        return view('website.pages.contact_us',compact('projects'));
    }
    public function store(Request $request)
    {
        // التحقق من صحة البيانات
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'phone' => 'required|max:255',
            'message' => 'nullable|string',
            'project_id' => 'nullable|exists:projects,id', // تحقق من أن المشروع موجود
        ]);

        // حفظ البيانات في قاعدة البيانات
        Contact::create([
            'full_name' => $validatedData['full_name'],
            'phone' => $validatedData['phone'],
            'message' => $validatedData['message']?? null,
            'project_id' => $validatedData['project_id'] ?? null, // إذا لم يتم تحديد المشروع، احفظه كـ null
        ]);

        // إرسال إشعار أو رسالة تأكيد بعد الحفظ (اختياري)
        return redirect()->back()->with('success', __('website.response_message'));
    }


   

}
