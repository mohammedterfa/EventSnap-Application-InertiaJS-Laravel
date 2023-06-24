<?php

namespace App\Http\Resources\Web;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property-read Channel $resource
 */
class ChannelResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->getKey(),
            'name' => $this->resource->name,
            'events' => EventResource::collection(
                resource: $this->whenLoaded(
                    relationship: 'events',
                ),
            ),
        ];
    }
}
