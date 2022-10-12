<?php

declare(strict_types=1);

namespace App\Http\Controllers\Publications;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\JsonResponse;

final class PublicationsGetController extends Controller
{

    public function __invoke(): JsonResponse
    {
        $publications = Publication::paginate(10);

        return new JsonResponse([
            'data' => $publications->items(),
            'pagination' => [
                'path' => $publications->path() . '?page=',
                'current_page' => $publications->currentPage(),
                'last_page' => $publications->lastPage(),
            ]
        ], JsonResponse::HTTP_OK);
    }
}
