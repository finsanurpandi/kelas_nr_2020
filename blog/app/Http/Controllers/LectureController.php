<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecture;
use App\Models\Student;
use App\Models\Department;
use App\Http\Requests\StoreLectureRequest;

use Session;

class LectureController extends Controller
{
    public function index()
    {
        $data['lectures'] = Lecture::all();
        // $data['department'] = Department::find(1)->student; has many through
        $data['department'] = Student::with('departments')
                                ->where('npm', '5520120503')->first();
        
        return view('lecture.index')->with($data);
    }

    public function create()
    {
        return view('lecture.create');
    }

    public function store(StoreLectureRequest $request)
    {
        // $validated = $request->validate([
        //     'nidn' => 'required|digits:10',
        //     'nama' => 'required|min:5'
        // ]);

        Lecture::create($request->all());
        Session::flash('status', 'Data berhasil ditambahkan');
        
        return redirect()->route('lecture.index');
    }

    public function edit($id)
    {
        $data['lecture'] = Lecture::find($id);
        $data['departments'] = Department::pluck('name', 'id');
        return view('lecture.edit')->with($data);
    }

    public function update(Request $req, $nidn)
    {
        $lecture = Lecture::find($nidn);
        $lecture->update($req->all());

        Session::flash('status', 'Ubah data berhasil!!!');
        return redirect('lecture');
    }

    public function destroy($id)
    {
        Lecture::destroy($id);

        Session::flash('status', 'Hapus data berhasil!!!');
        return redirect()->back();
    }

    public function recycle_bin()
    {
        $data['trash'] = Lecture::onlyTrashed()->get();

        return view('lecture.trash')->with($data);
    }

    public function restore($id)
    {
        Lecture::onlyTrashed()->where('nidn', $id)->restore();
        Session::flash('status', 'Data berhasil dikembalikan!!!');   
        
        return redirect()->back();
    }

    public function restore_all()
    {
        Lecture::onlyTrashed()->restore();
        Session::flash('status', 'Semua data berhasil dikembalikan!!!');   
        
        return redirect()->back();
    }

    public function delete($id)
    {
        Lecture::onlyTrashed()->where('nidn', $id)->forceDelete();
        Session::flash('status', 'Data berhasil dihilangkan!!!');   
        
        return redirect()->back();
    }

    public function empty()
    {
        Lecture::onlyTrashed()->forceDelete();
        Session::flash('status', 'Semua data berhasil dihilangkan!!!');   
        
        return redirect()->back();
    }

    // relationship

    public function student($nidn)
    {
        $data['students'] = Lecture::findOrFail($nidn)->student()->orderBy('npm', 'asc')->get();
        $data['lecture'] = Lecture::find($nidn);
        return view('lecture.student')->with($data);
    }

    public function department()
    {
        $data['department'] = Department::find(3)->student;
    }
}
