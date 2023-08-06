<?php

namespace App\Services\Admin;

use App\Enums\ResponseStatus;
use App\Models\User;
use App\Services\BaseService;
use Illuminate\Pagination\LengthAwarePaginator;

class UserService extends BaseService
{
    protected $userQueryBuilder;

    public function __constructor()
    {
        $this->userQueryBuilder = User::query()->getUserWithTrashed();
    }

    public function getIndexData()
    {
        return User::query()->get();
    }

    public function create($data)
    {
        return User::query()->create($data);
    }

    public function update($user, $data)
    {
        $user->update($data);
    }

    public function delete($user)
    {
        $user->delete();
    }
}
