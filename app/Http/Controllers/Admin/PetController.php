<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\PetService;

class PetController extends Controller
{
    protected PetService $petService;
    public function __construct(
        PetService $petService
    ) {
        $this->petService = $petService;
    }
    public function index()
    {
        return view('admin.pets.index', [
            'pets' =>$this->petService->getIndexData()
        ]);
    }
}
