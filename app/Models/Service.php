<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class   Service extends Model
{
    use HasFactory, Notifiable;
=======

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Service
 *
 * @property int $id
 * @property string $title
 * @property string $tags
 * @property string $author
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\ServiceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereTitle($value)
 * @mixin \Eloquent
 */
class Service extends Model
{
    use  HasFactory, Notifiable;
>>>>>>> b160b33c79382548d58b2e8fd7dcab4f23c7209f

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'tags',
<<<<<<< HEAD
        'sphere',
=======
        'author',
        'sphere',
        'description',
>>>>>>> b160b33c79382548d58b2e8fd7dcab4f23c7209f
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
<<<<<<< HEAD
    protected $hidden = [
        'title',
        'tags',
        'sphere',
    ];

=======
   /* protected $hidden = [
        'password',
        'remember_token',
    ];
 */
>>>>>>> b160b33c79382548d58b2e8fd7dcab4f23c7209f
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
<<<<<<< HEAD
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}


=======
    /*protected $casts = [
        'email_verified_at' => 'datetime',
    ]; */
}
>>>>>>> b160b33c79382548d58b2e8fd7dcab4f23c7209f
