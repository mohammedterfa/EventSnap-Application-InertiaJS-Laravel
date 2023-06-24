<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web\Projects;

use App\Http\Resources\Web\ProjectResource;
use App\Queries\Projects\FetchProjectsForTeam;
use Illuminate\Contracts\Auth\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\ResponseFactory;
use Inertia\Response as InertiaResponse;
use Inertia\ResponseFactory as InertiaResponseFactory;

final readonly class IndexController
{

    public function __construct(
        private readonly Factory $auth,
        private FetchProjectsForTeam $query,
        private InertiaResponseFactory $response,
    )
    {

    }
    public function __invoke(Request $request): InertiaResponse
    {
        return $this->response->render(
            component: 'Projects/Index',
            props: [
                'projects' => ProjectResource::collection(
                    resource: $this->query->handle(
                        team: $this->auth->guard()->user()->current_team_id,
                        include: ['channels'],
                    ),
                ),
            ],
        );
    }
}
