<?php

namespace App\Repositories\Interfaces\Client;

interface FlightRepositoryInterface
{
    public function avail($request):array;

    public function preReserve($request):array;

    public function reserve($request);

    public function confirm($request);
}
