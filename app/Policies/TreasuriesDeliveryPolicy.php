<?php

namespace App\Policies;

use App\Models\TreasuriesDelivery;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TreasuriesDeliveryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->hasPermission('browse_treasuriesdelivery');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, TreasuriesDelivery $treasuriesDelivery)
    {
        return $user->hasPermission('read_treasuriesdelivery');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->hasPermission('add_treasuriesdelivery');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, TreasuriesDelivery $treasuriesDelivery)
    {
        return $user->hasPermission('edit_treasuriesdelivery');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, TreasuriesDelivery $treasuriesDelivery)
    {
        return $user->hasPermission('delete_treasuriesdelivery');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, TreasuriesDelivery $treasuriesDelivery)
    {
        return $user->hasPermission('restore_treasuriesdelivery');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, TreasuriesDelivery $treasuriesDelivery)
    {
        return $user->hasPermission('forceDelete_treasuriesdelivery');
    }
}
