<?php

namespace App\Http\Controllers\Api\Posts;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use JustSteveKing\Launchpad\Http\Responses\ModelResponse;

class ShowController
{

    public function __invoke(Request $request, string $ulid): Responsable
    {
        $post = Cache::remember("posts_$ulid", 3600, fn () => Post::query()->findOrFail($ulid));

        return new ModelResponse(
            new PostResource($post),
        );
    }
}
