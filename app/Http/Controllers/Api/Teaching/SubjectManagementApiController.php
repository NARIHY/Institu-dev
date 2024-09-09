<?php

namespace App\Http\Controllers\Api\Teaching;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teaching\Subject\StoreSubjectManagementRequest;
use App\Http\Requests\Teaching\Subject\UpdateSubjectManagementRequest;
use App\Http\Resources\Teaching\Subject\SubjectManagementResource;
use App\Models\Teaching\SubjectManagement;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Handles API operations related to Subject Management.
 *
 * This controller provides CRUD operations for managing subjects in the teaching system.
 *
 * @package App\Http\Controllers\Api\Teaching
 * @author RANDRIANARISOA <maheninarandrianarisoa@gmail.com>
 * @version 2024
 */
class SubjectManagementApiController extends Controller
{
    /**
     * Retrieves a paginated list of all subjects.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function list_subject(): JsonResponse
    {
        // Fetch all subjects with pagination
        $subjects = SubjectManagement::paginate(10);
        $response = SubjectManagementResource::collection($subjects);

        // Add custom header to describe the action
        return response()->json($response)
            ->header('X-Action-Title', 'List Subjects');
    }

    /**
     * Retrieves a specific subject by its ID.
     *
     * @param string $subjectId The unique identifier of the subject.
     * @return \Illuminate\Http\JsonResponse
     */
    public function show_subject(string $subjectId): JsonResponse
    {
        // Find the subject by ID
        $subject = SubjectManagement::find($subjectId);
        if ($subject === null) {
            return response()->json(['message' => 'Resource not found'], Response::HTTP_NOT_FOUND)
                ->header('X-Action-Title', 'Show Subject');
        }
        return response()->json(SubjectManagementResource::make($subject))
            ->header('X-Action-Title', 'Show Subject');
    }

    /**
     * Stores a new subject.
     *
     * @param \App\Http\Requests\Teaching\Subject\StoreSubjectManagementRequest $request The request containing the subject data.
     * @return \Illuminate\Http\JsonResponse
     */
    public function store_subject(StoreSubjectManagementRequest $request): JsonResponse
    {
        // Create a new subject
        $subject = SubjectManagement::create($request->validated());
        return response()->json($subject, Response::HTTP_CREATED)
            ->header('X-Action-Title', 'Create Subject');
    }

    /**
     * Updates an existing subject by its ID.
     *
     * @param \App\Http\Requests\Teaching\Subject\UpdateSubjectManagementRequest $request The request containing the updated subject data.
     * @param mixed $subjectId The unique identifier of the subject.
     * @return \Illuminate\Http\JsonResponse
     */
    public function update_subject(UpdateSubjectManagementRequest $request, $subjectId): JsonResponse
    {
        // Find the subject by ID
        $subject = SubjectManagement::find($subjectId);

        if (!$subject) {
            return response()->json(['message' => 'Resource not found'], Response::HTTP_NOT_FOUND)
                ->header('X-Action-Title', 'Update Subject');
        }

        // Update the subject with the validated data
        $subject->update($request->validated());
        return response()->json($subject)
            ->header('X-Action-Title', 'Update Subject');
    }

    /**
     * Deletes a specific subject by its ID.
     *
     * @param string $subjectId The unique identifier of the subject.
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete_subject(string $subjectId): JsonResponse
    {
        // Find the subject by ID
        $subject = SubjectManagement::find($subjectId);

        if (!$subject) {
            return response()->json(['message' => 'Resource not found'], Response::HTTP_NOT_FOUND)
                ->header('X-Action-Title', 'Delete Subject');
        }

        // Delete the subject
        $subject->delete();
        return response()->json(['message' => 'Resource deleted successfully'], Response::HTTP_NO_CONTENT)
            ->header('X-Action-Title', 'Delete Subject');
    }
}
