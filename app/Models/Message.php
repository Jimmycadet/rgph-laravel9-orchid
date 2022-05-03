<?php

namespace App\Models;

use App\Orchid\Presenters\MessagePresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Orchid\Access\UserAccess;
use Orchid\Filters\Filterable;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

class Message extends Model
{
    use Notifiable, UserAccess, AsSource, Filterable, Chartable, HasFactory;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'messages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable=[
        'id',
        'name',
        'email',
        'subject',
        'comments',
        'created_at',
        'updated_at',
    ];

//    /**
//     * The attributes excluded from the model's JSON form.
//     *
//     * @var array
//     */
//    protected $hidden = [
//        'id',
//        'created_at',
//        'updated_at',
//    ];

//    /**
//     * The attributes that should be cast to native types.
//     *
//     * @var array
//     */
//    protected $casts = [
//        ''          => '',
//    ];

    /**
     * The attributes for which you can use filters in url.
     *
     * @var array
     */
    protected $allowedFilters = [
        'id',
        'name',
        'email',
        'subject',
        'comments',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes for which can use sort in url.
     *
     * @var array
     */
    protected $allowedSorts = [
        'id',
        'name',
        'email',
        'subject',
        'comments',
        'created_at',
        'updated_at',
    ];

    /**
     * @return MessagePresenter
     */
    public function presenter()
    {
        return new MessagePresenter($this);
    }
}
