<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Events;
use App\Models\User;

class EventsPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Events');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Events $events): bool
    {
        return $user->checkPermissionTo('view Events');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Events');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Events $events): bool
    {
        return $user->checkPermissionTo('update Events');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Events $events): bool
    {
        return $user->checkPermissionTo('delete Events');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Events');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Events $events): bool
    {
        return $user->checkPermissionTo('restore Events');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Events');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Events $events): bool
    {
        return $user->checkPermissionTo('replicate Events');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Events');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Events $events): bool
    {
        return $user->checkPermissionTo('force-delete Events');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Events');
    }
}
