<?php

namespace App\Policies;

use App\Models\BillingCategorie;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BillingCategoriePolicy
{
    public function viewAny(User $user)
    {
        return $user->hasPermission('browse_BillingCategorie');
    }
    public function view(User $user, BillingCategorie $billingCategorie)
    {
        return $user->hasPermission('read_BillingCategorie');
    }
    public function create(User $user)
    {
        return $user->hasPermission('add_BillingCategorie');
    }
    public function update(User $user, BillingCategorie $billingCategorie)
    {
        return $user->hasPermission('edit_BillingCategorie');
    }
    public function delete(User $user, BillingCategorie $billingCategorie)
    {
        return $user->hasPermission('delete_BillingCategorie');
    }
    public function restore(User $user, BillingCategorie $billingCategorie)
    {
        return $user->hasPermission('restore_BillingCategorie');
    }
    public function forceDelete(User $user, BillingCategorie $billingCategorie)
    {
        return $user->hasPermission('forceDelete_BillingCategorie');
    }
}
