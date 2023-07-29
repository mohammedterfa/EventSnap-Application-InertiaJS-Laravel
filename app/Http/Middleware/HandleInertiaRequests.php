<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Http\Resources\Web\UserResource;
use Illuminate\Http\Request;
use Inertia\Middleware;
use Tightenco\Ziggy\Ziggy;

final class HandleInertiaRequests extends Middleware
{
    public function share(Request $request): array
    {
        $user = $request->user();

        // Check if the user is authenticated before attempting to load relationships
        if ($user) {
            $user->load(['currentTeam.projects.channels']);
        }

        return array_merge(parent::share($request), [
            'auth' => [
                'user' => $user
                    ? new UserResource(
                        resource: $user,
                    )
                    : null,
            ],
            'ziggy' => function () use ($request): array {
                return array_merge((new Ziggy())->toArray(), [
                    'location' => $request->url(),
                ]);
            },
        ]);
    }
}
