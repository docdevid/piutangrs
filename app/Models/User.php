<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }

    public function roleWithBadge()
    {
        if (count($this->getRoleNames()) < 1) {
            return;
        }

        $role = $this->getRoleNames()->toArray()[0];

        if ($role == 'Super Admin') {
            return '<span class="text-primary bg-blue-lt small fst-italic p-1">' . $role . '</span>';
        }

        if ($role == 'Bendahara') {
            return '<span class="text-secondary bg-secondary-lt small fst-italic p-1">' . $role . '</span>';
        }

        if ($role == 'Data Entry') {
            return '<span class="text-success bg-success-lt small fst-italic p-1">' . $role . '</span>';
        }
    }
}
