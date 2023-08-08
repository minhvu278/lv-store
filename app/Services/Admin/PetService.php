<?php

namespace App\Services\Admin;

use App\Models\Pet;
use Illuminate\Support\Collection;
use App\Services\BaseService;

class PetService extends BaseService
{

    public function getIndexData(): Collection
    {
        return Pet::query()->get();
    }
}
