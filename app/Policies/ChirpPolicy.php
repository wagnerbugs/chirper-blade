<?php

namespace App\Policies;

use App\Models\Chirp;
use App\Models\User;

class ChirpPolicy
{
    public function viewAny(User $user): bool
    {
        //
    }

    public function view(User $user, Chirp $chirp): bool
    {
        //
    }

    public function create(User $user): bool
    {
        //
    }

    public function update(User $user, Chirp $chirp): bool
    {
        return $chirp->user()->is($user);
    }

    public function delete(User $user, Chirp $chirp): bool
    {
        return $this->update($user, $chirp);
    }

    public function restore(User $user, Chirp $chirp): bool
    {
        //
    }

    public function forceDelete(User $user, Chirp $chirp): bool
    {
        //
    }
}
