<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class EntryController extends Controller {

    public function index() { 
    
    }
    
    public function show($id) {
    
        // $reference = Reference::find($id);

        // if (!$reference) {
        //     redirect(route('/admin/references'))
        // }

        // $entries = $reference->entries()->get();

        // return view('admin/references/show', compact('reference', 'entries'));
    }
    
    public function create() {
        
    }
    
    public function store() {
        $data = request()->all();
       
        $entry = new Entry($data);
       
        if ($data['description'] == null) {
            $entry->description = '';
        }
      
        $entry->save();

        return redirect()->back();
    }
    
    public function edit($id) {
       
    }

    public function update($id) {
        
    }
}
