<?php

namespace App\Http\Controllers\Api\Teaching\Training;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teaching\Training\TrainingStoreRequest;
use App\Http\Requests\Teaching\Training\TrainingUpdateRequest;
use App\Http\Resources\Teaching\Training\TrainingRessource;
use App\Models\Teaching\Training\TrainingManagement;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

/**
 * Class TrainingApiController
 *
 * This controller handles API requests related to training programs.
 * It provides endpoints for creating, retrieving, and updating training program data.
 *
 * @package App\Http\Controllers\Api\Teaching\Training
 * @author RANDRIANARISOA <maheninarandrianarisoa@gmail.com>
 * @copyright 2024 RANDRIANARISOA
 */
class TrainingApiController extends Controller
{
    /**
     * Retrieve a paginated list of training programs.
     *
     * This method fetches training programs from the database, ordered by their creation date in descending order.
     * It returns the results in a paginated format, allowing clients to retrieve the data in chunks.
     *
     * @return JsonResource A JSON representation of the paginated training programs, formatted using the TrainingRessouce resource.
     */
    public function list_training(): JsonResource
    {
        // Retrieve training programs ordered by creation date in descending order and paginate the results.
        $trainings = TrainingManagement::orderBy('created_at', 'desc')->paginate(10);

        // Transform the paginated training programs into a JSON response using TrainingRessouce.
        $response = TrainingRessource::collection($trainings);

        return $response;
    }

    /**
     * Display a specific training program.
     *
     * This method retrieves a single training program identified by the given training ID.
     * If the training program is found, it returns the data formatted as a JSON resource.
     * If the training program is not found, it returns a 404 Not Found response with an error message.
     *
     * @param string $trainingId The ID of the training program to retrieve.
     *
     * @return JsonResponse|JsonResource A JSON response with the training program data if found,
     *                                   or a 404 Not Found response if the training program does not exist.
     */
    public function show_training(string $trainingId): JsonResponse|JsonResource
    {
        // Attempt to find the training program by its ID.
        $training = TrainingManagement::find($trainingId);

        // If the training program is not found, return a 404 Not Found response.
        if (!$training) {
            return response()->json(['message' => 'Training not found'], Response::HTTP_NOT_FOUND);
        }

        // Transform the found training program into a JSON resource for the response.
        $response = new TrainingRessource($training);

        return $response;
    }

    /**
     * Store a new training program.
     *
     * This method handles the creation of a new training program. It uses the provided request data,
     * which is validated by the TrainingStoreRequest class. Upon successful creation, it returns
     * a JSON response with the created training program data and a header indicating the name of the training.
     *
     * @param TrainingStoreRequest $request The validated request instance containing the data for the new training program.
     *
     * @return JsonResponse A JSON response containing the created training program data and an HTTP status code of 201 Created.
     */
    public function store_training(TrainingStoreRequest $request): JsonResponse
    {
        // Create a new training program using validated data from the request.
        $training = TrainingManagement::create($request->validated());

        // Return a JSON response with the created training program data.
        // Set the HTTP status code to 201 Created and include a custom header with the training program name.
        return response()->json($training, Response::HTTP_CREATED)
                         ->header('X-Action-Title', $training->training_name);
    }

    /**
     * Update an existing training program.
     *
     * This method updates a training program identified by the given training ID using the data provided
     * in the request. It first checks if the training program exists. If found, it updates the program
     * with the validated request data. If not found, it returns a 404 Not Found response with an appropriate
     * message. Upon a successful update, it returns the updated training program data in a JSON response.
     *
     * @param TrainingUpdateRequest $request The validated request instance containing the updated data for the training program.
     * @param string $trainingId The ID of the training program to be updated.
     *
     * @return JsonResponse A JSON response containing the updated training program data or an error message,
     *                      along with the appropriate HTTP status code.
     */
    public function update_training(TrainingUpdateRequest $request, string $trainingId): JsonResponse
    {
        // Attempt to find the training program by its ID.
        $training = TrainingManagement::find($trainingId);

        // If the training program is not found, return a 404 Not Found response.
        if (!$training) {
            return response()->json(['message' => 'Training not found'], Response::HTTP_NOT_FOUND)
                             ->header('X-Action-Title', 'Training not found');
        }

        // Update the training program with the validated data from the request.
        $training->update($request->validated());

        // Return a JSON response with the updated training program data and a 200 OK status.
        return response()->json($training, Response::HTTP_OK)
                         ->header('X-Action-Title', $training->training_name);
    }


    /**
     * Delete a specific training program.
     *
     * This method deletes a training program identified by the given training ID.
     * If the training program is found, it is removed from the database and a success message is returned.
     * If the training program is not found, a 404 Not Found response is returned with an error message.
     *
     * @param string $trainingId The ID of the training program to delete.
     *
     * @return JsonResponse A JSON response with a success message if the training program was deleted,
     *                      or an error message with a 404 Not Found status if the training program does not exist.
     */
    public function delete_training(string $trainingId): JsonResponse
    {
        // Attempt to find the training program by its ID.
        $training = TrainingManagement::find($trainingId);

        // If the training program is not found, return a 404 Not Found response.
        if (!$training) {
            return response()->json(['message' => 'Training not found'], Response::HTTP_NOT_FOUND);
        }

        // Delete the training program from the database.
        $training->delete();

        // Return a JSON response indicating that the training program has been removed.
        return response()->json(['message' => 'Training removed'], Response::HTTP_OK);
    }
}
