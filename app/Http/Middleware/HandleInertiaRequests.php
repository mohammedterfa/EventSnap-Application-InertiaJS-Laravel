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
        return array_merge(parent::share($request), [
            'auth' => [
                'user' => $request->user()->load(['currentTeam.projects.channels'])
                    ? new UserResource(
                        resource: $request->user(),
                    ) : null ,
                    ],
            'ziggy' => function () use ($request): array {
                return array_merge((new Ziggy())->toArray(),
                    [
                        'location' => $request->url(),
                    ]);
            },
        ]);
    }
}
