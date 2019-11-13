<?php

namespace App\Http\Controllers;

use Assert\AssertionFailedException;
use Illuminate\Http\Request;
use Domain\RequisitionService;

class RequisitionController extends Controller
{
    private $service;

    public function __construct(RequisitionService $service)
    {
        $this->service = $service;
    }

    public function create(Request $request)
    {
        try {
            $this->service->create($request);
        } catch (AssertionFailedException $e) {
            return response()->json(['errors' => $e->getMessage()], 400);
        } catch (\Exception $ex) {
            return response()->json(['errors' => $ex->getMessage()], 500);
        }

        return response('', 200);
    }
}
