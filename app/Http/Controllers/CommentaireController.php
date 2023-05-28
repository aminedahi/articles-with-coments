<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commantaire;

class CommentaireController extends Controller
{

    public function store(Request $request )
    {
        $input = $request->all(); 
        Commantaire::create($input);
        return redirect('/article')->with('flash_message', 'commantaire Addedd!');
    }
    
}
