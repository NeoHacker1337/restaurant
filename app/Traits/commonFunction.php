<?php

// app/Traits/RoleRetrievable.php
namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait commonFunction
{
    /**
     * Get the role of the currently authenticated user.
     *
     * @return string|null
     */
    public function getAuthenticatedUserRole()
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Return the role or a default value if it's null
        return $user ? $user->role : null;
    }
}
