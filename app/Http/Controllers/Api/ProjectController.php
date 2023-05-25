<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // PASSA TUTTO ( MA NON LE TABELLE RELZIONATE )
        // $projects = Project::paginate(20);

        // SPECIFICA ANCHE LE TABELLE RELAZIONATE 
        $projects = Project::with('tecnologies')->paginate(20);

        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }
}
