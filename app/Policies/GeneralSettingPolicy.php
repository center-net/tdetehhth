<?php

namespace App\Policies;

use App\Models\GeneralSetting;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class GeneralSettingPolicy
{
    public function viewAny(User $user)
    {
        return $user->hasPermission('browse_generalsetting');
    }
    public function view(User $user, GeneralSetting $generalSetting)
    {
        return $user->hasPermission('read_generalsetting');
    }
    public function create(User $user)
    {
        return $user->hasPermission('add_generalsetting');
    }
    public function update(User $user, GeneralSetting $generalSetting)
    {
        return $user->hasPermission('edit_generalsetting');
    }
    public function delete(User $user, GeneralSetting $generalSetting)
    {
        return $user->hasPermission('delete_generalsetting');
    }
    public function restore(User $user, GeneralSetting $generalSetting)
    {
        return $user->hasPermission('restore_generalsetting');
    }
    public function forceDelete(User $user, GeneralSetting $generalSetting)
    {
        return $user->hasPermission('forceDelete_generalsetting');
    }
}
