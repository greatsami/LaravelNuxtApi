<?php

namespace App\Http\Resources;

use App\Models\Post;
use Illuminate\Http\Request;
use TiMacDonald\JsonApi\JsonApiResource;

/**
 * @property-read Post $source
 */
class PostResource extends JsonApiResource
{
    public function toAttributes(Request $request): array
    {
        return [
            'title' => $this->resource->title,
            'status' => $this->resource->status->value,
            'summary' => $this->resource->summary,
            'content' => $this->resource->content,
            'meta' => $this->resource->meta,
        ];
    }
}
