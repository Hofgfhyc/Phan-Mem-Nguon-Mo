<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'parent_id',
        'is_active',
        'is_delete'
    ];

    // Quan hệ cha
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // Quan hệ con (recursive)
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id')
                    ->where('is_delete', 0)
                    ->with('children');
    }

    // Scope chỉ lấy danh mục chưa xoá
    public function scopeActive($query)
    {
        return $query->where('is_delete', 0);
    }
}
