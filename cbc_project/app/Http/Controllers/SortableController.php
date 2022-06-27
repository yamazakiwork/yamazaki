<?php

namespace App\Http\Controllers;

use App\Models\Sortable;
use Illuminate\Http\Request;

class SortableController extends Controller
{
    public function index() {
        $sortable = Sortable::orderBy('id', 'asc')->get();

        return view('sortable', ['sortables'=> $sortable]);
    }

    public function register(Request $request){
        $sortable = new Sortable;
        $sortable->name = $request->inputName;
        $sortable->save();

        return redirect('sortable');
    }
}
