<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'path',
    ];

    public function scopeFilter($query, array $filters)
    {
        // filter search
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query->where('name', 'like', '%' . $search . '%');
        });

        // filter category
        $query->when($filters['category'] ?? false, function ($query, $category) {
            $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        // filter sort
        $query->when($filters['sort'] ?? false, function ($query, $sort) {
            if ($sort == 1) {
                $query->latest();
            } elseif ($sort == 2) {
                $query->oldest();
            } elseif ($sort == 3) {
                $query->orderBy('name', 'ASC');
            } else {
                $query->orderBy('name', 'DESC');
            }
        });
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->isoFormat('D MMMM Y');
    }

    public function getCategoryAttribute($value)
    {
        return ucfirst($value);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
