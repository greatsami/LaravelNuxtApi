<?php

namespace App\Http\Controllers\Api\Posts;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use JustSteveKing\Launchpad\Http\Responses\CollectionResponse;

class IndexController
{

    public function __invoke(Request $request): Responsable
    {
        return new CollectionResponse(
            PostResource::collection(
                Post::all(),
            ),
        );
    }
}
