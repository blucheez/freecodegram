<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $guarded = [];

  public function profileImage()
  {
    $imagePath = $this->image
      ? $this->image
      : 'storage/uploads/mBg6KzgcKu7uvW1arMZsO2zCMDkZ9EqfRamJFu8X.jpg';
    return '/storage/' . $imagePath;
  }

  public function followers()
  {
    return $this->belongsToMany(User::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
