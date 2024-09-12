<?php

namespace App\Http\Controllers\Api\Teaching\Period;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teaching\Periods\PeriodStoreRequest;
use App\Http\Requests\Teaching\Periods\PeriodUpdateRequest;
use App\Http\Resources\Teaching\Periods\PeriodsRessources;
use App\Models\Teaching\PeriodeManagement;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Handles API operations related to Periods Managements.
 *
 * This controller provides CRUD operations for managing subjects in the teaching system.
 *
 * @package App\Http\Controllers\Api\Teaching
 * @author RANDRIANARISOA <maheninarandrianarisoa@gmail.com>
 * @version 2024
 */
class PeriodManagementApiController extends Controller
{

    /**
     * Retrieve a paginated list of periods.
     *
     * This method fetches a list of periods from the `PeriodeManagement` model, ordered by
     * the `start_date` in descending order. The results are paginated with 10 periods per page
     * and returned as a JSON response using the `PeriodsRessources` resource collection.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function lists_periods(): JsonResponse
    {
        $periods = PeriodeManagement::orderBy('start_date', 'desc')->paginate(10);
        $response = PeriodsRessources::collection($periods);
        // Add custom header to describe the action
        return response()->json($response)
            ->header('X-Action-Title', 'List Periods');
    }


    /**
     * Retrieve and display a specific period by its ID.
     *
     * This method finds a period by its unique identifier (`$periodId`) and returns it in a
     * JSON response. If the period is not found, it returns a 404 Not Found response with an
     * error message. If the period is found, the response includes the period data and an
     * additional header `X-Action-Title` set to the period's name.
     *
     * @param string $periodId The unique identifier of the period to retrieve.
     *
     * @return \Illuminate\Http\JsonResponse The JSON response containing the period data or an error message.
     */
    public function show_periods(string $periodId): JsonResponse
    {
        $period = PeriodeManagement::find($periodId);

        if (!$period) {
            return response()->json(['message' => 'Content not found'], Response::HTTP_NOT_FOUND);
        }

        $response = PeriodsRessources::collection([$period]);

        return response()->json($response)
            ->header('X-Action-Title', $period->period_name);
    }

    /**
     * Store a new period in the database.
     *
     * This method creates a new period using the validated data from the request.
     * The `PeriodStoreRequest` is used to ensure that the incoming request data meets
     * the necessary validation rules before creating the period. Upon successful
     * creation, a JSON response with the newly created period is returned,
     * accompanied by a `201 Created` HTTP status code and an additional header
     * `X-Action-Title` indicating the action performed.
     *
     * @param \App\Http\Requests\Teaching\Periods\PeriodStoreRequest $request The request instance containing the validated data for the new period.
     *
     * @return \Illuminate\Http\JsonResponse The JSON response containing the created period and HTTP status code `201 Created`.
     */
    public function store_periods(PeriodStoreRequest $request): JsonResponse
    {
        $period = PeriodeManagement::create($request->validated());

        return response()->json($period, Response::HTTP_CREATED)
            ->header('X-Action-Title', 'Create Subject');
    }

    /**
     * Update an existing period in the database.
     *
     * This method updates a specific period identified by its unique identifier (`$periodId`)
     * using the validated data provided in the request. The `PeriodUpdateRequest` is utilized
     * to ensure that the incoming request data meets the necessary validation rules before updating
     * the period. If the period with the given ID is not found, a `404 Not Found` response is returned
     * with an error message. If the period is found and successfully updated, a `200 OK` JSON response
     * containing the updated period is returned.
     *
     * @param \App\Http\Requests\Teaching\Periods\PeriodUpdateRequest $request The request instance containing the validated data for updating the period.
     * @param string $periodId The unique identifier of the period to be updated.
     *
     * @return \Illuminate\Http\JsonResponse The JSON response containing the updated period or an error message with HTTP status code.
     */
    public function update_periods(PeriodUpdateRequest $request, string $periodId): JsonResponse
    {
        $period = PeriodeManagement::find($periodId);

        if (!$period) {
            return response()->json(['message' => 'Content not found'], Response::HTTP_NOT_FOUND);
        }

        $period->update($request->validated());

        return response()->json($period, Response::HTTP_OK);
    }

    /**
     * Delete a specific period from the database.
     *
     * This method deletes a period identified by its unique identifier (`$periodId`).
     * If the period with the given ID is not found, a `404 Not Found` response is returned
     * with an error message. If the period is found and successfully deleted, a `200 OK`
     * JSON response containing the deleted period is returned.
     *
     * @param string $periodId The unique identifier of the period to be deleted.
     *
     * @return \Illuminate\Http\JsonResponse The JSON response indicating the deletion status
     *         of the period with HTTP status code `200 OK` or an error message with HTTP status code `404 Not Found`.
     */
    public function delete_periods(string $periodId): JsonResponse
    {
        $period = PeriodeManagement::find($periodId);

        if (!$period) {
            return response()->json(['message' => 'Content not found'], Response::HTTP_NOT_FOUND);
        }

        $period->delete();

        return response()->json(['message' => 'Content removed'], Response::HTTP_OK);
    }




}
