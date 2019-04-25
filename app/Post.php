<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use VanOns\Laraberg\Models\Gutenbergable;

class Post extends Model
{
    use Gutenbergable;

    protected $casts = [
        //'created_at' => 'datetime:Y-m-d',
        //'updated_at' => 'datetime:Y-m-d',
    ];

    protected $hidden = ['content'];

    public function getLarabergAttribute()
    {
        return $this->getRenderedContent();
    }

    protected $appends = ['laraberg'];
}
