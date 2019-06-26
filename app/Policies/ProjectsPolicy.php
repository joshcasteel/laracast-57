<?php

namespace App\Policies;

use App\User;
use App\Projects;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the projects.
     *
     * @param  \App\User  $user
     * @param  \App\Projects  $projects
     * @return mixed
     */
    public function update(User $user, Projects $projects)
    {
        return $projects->owner_id == $user->id;
    }

}
