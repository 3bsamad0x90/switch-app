<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\SerialNumbers;
use Illuminate\Http\Request;
use Response;

class SerialNumbersController extends Controller
{
    public function index(){
        $SerialNumbers = SerialNumbers::all();
        return view('AdminPanel.SerialNumbers.index',[
            'active' => 'serialNumbers',
            'title' => 'الأرقام التسلسلية',
            'SerialNumbers' => $SerialNumbers,
            'breadcrumbs' => [
                [
                    'url' => '',
                    'text' => 'الأرقام التسلسلية'
                ]
            ]
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'serial_number' => 'required|unique:serial_numbers,serial_number',
        ],
        [
            'serial_number.required' => 'هذا الحقل مطلوب',
            'serial_number.unique' => 'هذا الرقم موجود مسبقا',
        ]);
        $SerialNumbers = new SerialNumbers();
        $SerialNumbers->serial_number = $request->serial_number;
        $SerialNumbers->save();
        return redirect()->back()->with('success','تمت الإضافة بنجاح');
    }

    public function update(Request $request, $id)
    {
        $serial_number = SerialNumbers::findOrFail($id);
        if($serial_number){
            $request->validate([
                'serial_number' => 'required|unique:serial_numbers,serial_number,'.$id,
            ],
            [
                'serial_number.required' => 'هذا الحقل مطلوب',
                'serial_number.unique' => 'هذا الرقم موجود مسبقا',
            ]);
            $serial_number->serial_number = $request->serial_number;
            $update = $serial_number->update();

        if ($update) {
            return redirect()->back()
                            ->with('success',trans('common.successMessageText'));
        } else {
            return redirect()->back()
                            ->with('faild',trans('common.faildMessageText'));
        }
        }

    }

    public function delete($id)
    {
        $serial_number = SerialNumbers::findOrFail($id);
        if ($serial_number->delete()) {
            return Response::json($id);
        }
        return Response::json("false");
    }
}
