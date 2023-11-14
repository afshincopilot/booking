<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\Flght\ReserveRequest;
use App\Http\Requests\Client\Flight\AvailRequest;
use App\Http\Requests\Client\Flight\ConfirmRequest;
use App\Http\Requests\Client\Flight\PreReserveRequest;
use App\Repositories\Interfaces\Client\FlightRepositoryInterface;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function __construct(protected readonly FlightRepositoryInterface $repository)
    {
    }

    public function avail(AvailRequest $request)
    {
        $flights = $this->repository->avail($request->validated());
        return response()->json([
            'success' => true,
            'message' => 'List of available flights',
            'search_id' => $flights['search_id'],
            'flights' => $flights['flights'],
        ], 200);
    }

    public function preReserve(PreReserveRequest $request)
    {
        $data = $this->repository->preReserve($request->validated());
        return response()->json([
            'success' => true,
            'message' => 'Flight pre-reserved',
            'data' => $data,
        ], 200);
    }

    public function reserve(ReserveRequest $request)
    {
        $data = $this->repository->reserve($request->validated());
        return response()->json([
            'success' => true,
            'message' => 'Flight reserved',
            'data' => $data,
        ], 200);
    }
    public function confirm(ConfirmRequest $request)
    {
        $data = $this->repository->confirm($request->validated());
        return response()->json([
            'success' => true,
            'message' => 'Flight confirmed',
            'data' => $data,
        ], 200);
    }
}
