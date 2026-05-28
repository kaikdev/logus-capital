<?php

namespace App\Http\Controllers;

use App\Models\Acompanhe;
use Illuminate\Http\Request;

class EmFocoController extends Controller
{
    public function index()
    {
        Acompanhe::checkStatusUpdate();

        $principal = Acompanhe::where('status', 'now')
            ->orderByRaw('COALESCE(scheduled_at, created_at) DESC')
            ->first();

        $lista = Acompanhe::where('status', 'now')
            ->when($principal, fn($q) => $q->where('id', '!=', $principal->id))
            ->orderByRaw('COALESCE(scheduled_at, created_at) DESC')
            ->paginate(5);

        // Requisição AJAX da paginação — retorna JSON
        if (request()->ajax() || request()->wantsJson()) {
            return response()->json([
                'data'          => $lista->items(),
                'current_page'  => $lista->currentPage(),
                'last_page'     => $lista->lastPage(),
            ]);
        }

        return view('pages.em-foco', compact('principal', 'lista'));
    }

    public function show(string $slug)
    {
        $item = Acompanhe::where('slug', $slug)
            ->where('status', 'now')
            ->firstOrFail();

        // Se for requisição AJAX, retorna JSON
        if (request()->ajax() || request()->wantsJson()) {
            $gallery = collect($item->gallery ?? [])->map(function ($group) {
                if (($group['type'] ?? '') === 'video' && !empty($group['data']['url'])) {
                    return [
                        'type' => 'video',
                        'src'  => $this->toYoutubeEmbed($group['data']['url']),
                    ];
                }

                if (!empty($group['data']['imagens'])) {
                    return [
                        'type' => 'image',
                        'src'  => asset('storage/' . $group['data']['imagens']),
                    ];
                }

                return null;
            })->filter()->values();

            return response()->json([
                'title'        => $item->title,
                'text'         => nl2br(e($item->text)),
                'author'       => $item->author ?? 'Global Silver',
                'published_at' => $item->published_at->format('d/m/Y'),
                'gallery'      => $gallery,
            ]);
        }

        // Acesso direto via URL — carrega a página normalmente com esse post como principal
        $lista = Acompanhe::where('status', 'now')
            ->where('id', '!=', $item->id)
            ->orderByRaw('COALESCE(scheduled_at, created_at) DESC')
            ->paginate(5);

        return view('pages.em-foco', [
            'principal' => $item,
            'lista'     => $lista,
        ]);
    }

    public function search(Request $request)
    {
        $q = trim($request->get('q'));

        if (!$q) {
            return response()->json([]);
        }

        $itens = Acompanhe::where('status', 'now')
            ->where(function ($query) use ($q) {
                $query->where('title', 'like', "%{$q}%")
                    ->orWhere('resume', 'like', "%{$q}%")
                    ->orWhere('text', 'like', "%{$q}%");
            })
            ->orderByRaw('COALESCE(scheduled_at, created_at) DESC')
            ->limit(5)
            ->get(['title', 'slug', 'gallery', 'scheduled_at', 'created_at'])
            ->map(function ($item) {
                $thumb = asset('storage/placeholder.webp');

                foreach ($item->gallery ?? [] as $group) {
                    if (($group['type'] ?? '') === 'video' && !empty($group['data']['url'])) {
                        preg_match(
                            '/(?:youtube\.com\/(?:watch\?v=|shorts\/)|youtu\.be\/)([a-zA-Z0-9_-]{11})/',
                            $group['data']['url'],
                            $m
                        );
                        if (isset($m[1])) {
                            $thumb = "https://img.youtube.com/vi/{$m[1]}/hqdefault.jpg";
                        }
                        break;
                    }

                    if (!empty($group['data']['imagens'])) {
                        $thumb = asset('storage/' . $group['data']['imagens']);
                        break;
                    }
                }

                return [
                    'title'        => $item->title,
                    'slug'         => $item->slug,
                    'published_at' => $item->published_at,
                    'thumb'        => $thumb,
                ];
            });

        return response()->json($itens);
    }

    private function toYoutubeEmbed(string $url): string
    {
        // Suporta: watch?v=ID, youtu.be/ID, shorts/ID
        preg_match(
            '/(?:youtube\.com\/(?:watch\?v=|shorts\/)|youtu\.be\/)([a-zA-Z0-9_-]{11})/',
            $url,
            $matches
        );

        return isset($matches[1])
            ? 'https://www.youtube.com/embed/' . $matches[1]
            : $url;
    }

    public function home()
    {
        Acompanhe::checkStatusUpdate();

        $emFoco = Acompanhe::where('status', 'now')
            ->orderByRaw('COALESCE(scheduled_at, created_at) DESC')
            ->first();

        // Resolve thumbnail (imagem ou YouTube)
        $thumb = null;

        foreach ($emFoco?->gallery ?? [] as $group) {
            if (($group['type'] ?? '') === 'video' && !empty($group['data']['url'])) {
                preg_match(
                    '/(?:youtube\.com\/(?:watch\?v=|shorts\/)|youtu\.be\/)([a-zA-Z0-9_-]{11})/',
                    $group['data']['url'],
                    $m
                );
                if (isset($m[1])) {
                    $thumb = "https://img.youtube.com/vi/{$m[1]}/hqdefault.jpg";
                }
                break;
            }

            if (!empty($group['data']['imagens'])) {
                $thumb = asset('storage/' . $group['data']['imagens']);
                break;
            }
        }

        return view('pages.index', compact('emFoco', 'thumb'));
    }
}