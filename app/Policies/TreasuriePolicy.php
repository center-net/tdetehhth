<?php

namespace App\Policies;

use App\Models\Treasurie;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TreasuriePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->hasPermission('browse_treasurie');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Treasurie $treasurie)
    {
        return $user->hasPermission('read_treasurie');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->hasPermission('add_treasurie');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Treasurie $treasurie)
    {
        return $user->hasPermission('edit_treasurie');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Treasurie $treasurie)
    {
        return $user->hasPermission('delete_treasurie');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Treasurie $treasurie)
    {
        return $user->hasPermission('restore_treasurie');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Treasurie $treasurie)
    {
        return $user->hasPermission('forceDelete_treasurie');
    }
}
