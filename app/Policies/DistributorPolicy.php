<?php

namespace App\Policies;

use App\Policies\Distributor;
use Illuminate\Auth\Access\HandlesAuthorization;

class DistributorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the distributor can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the distributor can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Distributor  $model
     * @return mixed
     */
    public function view(User $user, Distributor $model)
    {
        return true;
    }

    /**
     * Determine whether the distributor can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the distributor can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Distributor  $model
     * @return mixed
     */
    public function update(User $user, Distributor $model)
    {
        return true;
    }

    /**
     * Determine whether the distributor can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Distributor  $model
     * @return mixed
     */
    public function delete(User $user, Distributor $model)
    {
        return true;
    }

    /**
     * Determine whether the distributor can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Distributor  $model
     * @return mixed
     */
    public function restore(User $user, Distributor $model)
    {
        return true;
    }

    /**
     * Determine whether the distributor can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Distributor  $model
     * @return mixed
     */
    public function forceDelete(User $user, Distributor $model)
    {
        return true;
    }
}
