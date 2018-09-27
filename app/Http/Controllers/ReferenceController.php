<?php

namespace App\Http\Controllers;

use App\Reference;
use Illuminate\Http\Request;

class ReferenceController extends Controller {

    public function index() { 
    
       $references = Reference::all();
       
        return view('admin/references/index', compact('references'));
    }
    
    public function show($id) {
    
        $reference = Reference::find($id);

        if (!$reference) {
            redirect(route('/admin/references'));
        }

        $entries = $reference->entries()->get();

        return view('admin/references/show', compact('reference', 'entries'));
    }
    
    public function create() {
    
    }
    
    public function store() {
        
    }
    
    public function edit($id) {
       
    }

    public function update($id) {
        
    }
}
