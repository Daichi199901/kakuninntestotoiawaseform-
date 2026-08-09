<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * マスアサイメントで代入を許可する属性。
     */
    protected $fillable = [
        'category_id'
        'first_name'
        'last_name'
        'gender'
        'email'
        'tel'
        'address'
        'building'
        'detail'
    ];

    /**
     * ContactモデルとCategoryモデルの関連を定義します。
     * １つのコンタクト1つのカテゴリーに属します。
     */
    public function catgory()
    {
        return $this->belongsTO(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
