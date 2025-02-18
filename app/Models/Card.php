<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'set_id',
        'name',
        'version',
        'number',
        'card_identifier',
        'image',
        'thumbnail',
        'description',
        'rarity',
        'story'
    ];

    public function set()
    {
        return $this->belongsTo(Set::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_cards')
            ->withPivot('normal_quantity', 'foil_quantity');
    }

    public function wishlistUsers()
    {
        return $this->belongsToMany(User::class, 'wishlists');
    }
}
