<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use OpenApi\Annotations as OA;

/**
 * @OA\Post(
 *     path="/api/posts",
 *     summary="Создание поста",
 *     tags={"Post"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(
 *                     property="title",
 *                     type="string"
 *                 ),
 *                 @OA\Property(
 *                     property="likes",
 *                     type="integer"
 *                 ),
 *                 example={"title": "Some title", "likes": 7}
 *             )
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="title", type="string", example="Some title"),
 *                 @OA\Property(property="likes", type="integer", example=7),
 *                 @OA\Property(property="updated_at", type="datetime", example="2023-06-01T08:40:03.000000Z"),
 *                 @OA\Property(property="created_at", type="datetime", example="2023-06-01T08:40:03.000000Z"),
 *                 @OA\Property(property="id", type="integer", example=1),
 *             )
 *         )
 *     )
 * ),
 *
 *
 * @OA\Get(
 *     path="/api/posts",
 *     summary="Получение списка постов",
 *     tags={"Post"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="array", @OA\Items(
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="title", type="string", example="Some title"),
 *                 @OA\Property(property="likes", type="integer", example=7),
 *                 @OA\Property(property="created_at", type="datetime", example="2023-06-01T08:40:03.000000Z"),
 *                 @OA\Property(property="updated_at", type="datetime", example="2023-06-01T08:40:03.000000Z"),
 *             ))
 *         )
 *     )
 * ),
 *
 *
 * @OA\Get(
 *     path="/api/posts/{post}",
 *     summary="Получение поста",
 *     tags={"Post"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
 *         description="ID поста",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=1
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="title", type="string", example="Some title"),
 *                 @OA\Property(property="likes", type="integer", example=7),
 *                 @OA\Property(property="created_at", type="datetime", example="2023-06-01T08:40:03.000000Z"),
 *                 @OA\Property(property="updated_at", type="datetime", example="2023-06-01T08:40:03.000000Z"),
 *             )
 *         )
 *     )
 * ),
 *
 * * @OA\Patch(
 *     path="/api/posts/{post}",
 *     summary="Обновление поста",
 *     tags={"Post"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
 *         description="ID поста",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=1
 *     ),
 *
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(
 *                     property="title",
 *                     type="string"
 *                 ),
 *                 @OA\Property(
 *                     property="likes",
 *                     type="integer"
 *                 ),
 *                 example={"title": "Some title", "likes": 7}
 *             )
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="title", type="string", example="Some title"),
 *                 @OA\Property(property="likes", type="integer", example=7),
 *                 @OA\Property(property="created_at", type="datetime", example="2023-06-01T08:40:03.000000Z"),
 *                 @OA\Property(property="updated_at", type="datetime", example="2023-06-01T08:40:03.000000Z"),
 *             )
 *         )
 *     )
 * ),
 *
 * * @OA\Delete(
 *     path="/api/posts/{post}",
 *     summary="Удаление поста",
 *     tags={"Post"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
 *         description="ID поста",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=1
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="OK",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="done")
 *         )
 *     )
 * ),
 */


class PostController extends Controller
{

}
