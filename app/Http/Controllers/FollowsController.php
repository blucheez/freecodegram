<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowsController extends Controller
{
  public function store(\App\User $user)
  {
    return $user->username;
  }
}
