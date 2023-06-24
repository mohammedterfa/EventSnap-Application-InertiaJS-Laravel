<?php

namespace App\Http\Resources\Web;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property-read Team $resource
 */
class TeamResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->getKey(),
            'name' => $this->resource->name,
            'personal' => $this->resource->personal_team,
            'projects' => ProjectResource::collection(
                resource: $this->whenLoaded(
                    relationship: 'projects',
                ),
            ),
        ];
    }
}
