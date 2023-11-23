<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\Flght\ReserveRequest;
use App\Http\Requests\Client\Flight\AvailRequest;
use App\Http\Requests\Client\Flight\ConfirmRequest;
use App\Http\Requests\Client\Flight\PreReserveRequest;
use App\Repositories\Interfaces\Client\FlightRepositoryInterface;
use GuzzleHttp\Client;
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

    public function test()
    {
        $client = new Client();
        $request = $client->request('POST', 'http://192.168.2.177:8000/api/flights/available', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
            'json' => [
                'origin' => 'MHD',
                'destination' => 'THR',
                'departure_date' => '2024-01-02',
            ],
        ]);
        $response = $request->getBody()->getContents();
        return response()->json([
            'success' => true,
            'message' => 'List of available flights',
            'flights' => json_decode($response, true),
        ], 200);
    }
}
