<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /*ブログ投稿作成処理用のモデル実装*/
    protected $fillable = [
    'title',
    'body',
    ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

}
