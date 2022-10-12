<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * A publication
 *
 * @property integer $user_id
 * @property string  $title
 * @property string  $body
 * @property string  $description
 */
class Publication extends Model
{
    use HasFactory;
}
