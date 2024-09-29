<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Requests\dashboard\CreateUpdateCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Status;
use App\Models\Call;

use Illuminate\Support\Facades\Storage;

class ContactUsController extends Controller
{

  

    public function index()
    {
        $contacts = Contact::paginate(25);
        return view('dashboard.contacts.index' , compact('contacts'));
    }

    public function create()
    {
        return view('dashboard.contacts.create');
    }

    public function store(Request $request)
    {
        // التحقق من صحة البيانات
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string',
            'contact_id' => 'required|exists:contacts,id', // تحقق من أن المشروع موجود
        ]);

        // حفظ البيانات في قاعدة البيانات
        Call::create([
            'title' => $validatedData['title'],
            'message' => $validatedData['message'],
            'contact_id' => $validatedData['contact_id'] ?? null, // إذا لم يتم تحديد المشروع، احفظه كـ null
        ]);

        // إرسال إشعار أو رسالة تأكيد بعد الحفظ (اختياري)
        return back();
    }


    public function edit($id)
    {
        $contact=Contact::find($id);
        $statuses=Status::all();
        $calls=Call::where('contact_id',$id)->get();
        return view('dashboard.contacts.edit' , compact('statuses','contact','calls'));
    }

    public function update(request $request , $id)
    {
        $attachment = Contact::findOrFail($id);
        $data = $request->validate([
            'status_id' => 'required|exists:statuses,id',

        ]);

        $attachment->update(['status_id'=>$request->status_id]);
        return response()->json();
    }


    public function destroy($id)
    {
        $attachment = Status::findOrFail($id);
        $attachment->delete();
        return response()->json();

    }

    
    public function deleteAll(Request $request) {
        $requestIds = json_decode($request->data);
    
        foreach ($requestIds as $id) {
          $ids[] = $id->id;
        }
        if (PrimaryAmenity::whereIn('id', $ids)->delete()) {
            return response()->json('success');
        } else {
          return response()->json('failed');
        }
    }

}