<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class Acompanhe extends Model
{
    protected $table = 'acompanhe';
    protected $fillable = ['title', 'slug', 'author', 'resume', 'gallery', 'text', 'scheduled_at', 'order', 'status'];
    protected $appends = ['published_at'];
    
    protected $casts = [
        'gallery' => 'array',
        'scheduled_at' => 'datetime',
    ];

    protected static function booted()
    {
        /**
         * Ao criar um novo post
         */
        static::creating(function ($item) {
            $item->slug = Str::slug($item->title);
            $item->order = self::max('order') + 1;
        });
    
        /**
         * Ao editar um post
         */
        static::updating(function ($item) {
    
            // Atualiza slug apenas se o título mudar
            if ($item->isDirty('title')) {
                $item->slug = Str::slug($item->title);
            }
    
            /**
             * 🖼️ Controle de exclusão de imagens
             */
            if (!$item->isDirty('gallery')) {
                return;
            }
    
            $originalGallery = $item->getOriginal('gallery') ?? [];
            $newGallery = $item->gallery ?? [];
    
            $oldImages = collect($originalGallery)
                ->pluck('data.imagens')
                ->filter()
                ->toArray();
    
            $newImages = collect($newGallery)
                ->pluck('data.imagens')
                ->filter()
                ->toArray();
    
            $removedImages = array_diff($oldImages, $newImages);
    
            foreach ($removedImages as $path) {
                if ($path && Storage::disk('public')->exists($path)) {
                    Storage::disk('public')->delete($path);
                }
            }
        });
    
        /**
         * Ao excluir um post
         */
        static::deleting(function ($item) {
            if ($item->gallery) {
                foreach ($item->gallery as $imagem) {
                    $path = $imagem['data']['imagens'] ?? null;
    
                    if ($path && Storage::disk('public')->exists($path)) {
                        Storage::disk('public')->delete($path);
                    }
                }
            }
        });
    }

    public static function checkStatusUpdate()
    {
        $currentDateTime = now();
    
        self::where('status', 'schedule')
            ->whereNotNull('scheduled_at')
            ->where('scheduled_at', '<=', $currentDateTime)
            ->update([
                'status' => 'now',
            ]);
    }
    
    public function getPublishedAtAttribute()
    {
        if (!empty($this->scheduled_at)) {
            return Carbon::parse($this->scheduled_at);
        }
    
        return Carbon::parse($this->created_at);
    }
}
