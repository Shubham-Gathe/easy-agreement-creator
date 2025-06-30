<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentAgreementController extends Controller
{
    public function store( Request $request){
        $validated = $request->validate([
            'tenant_name' => 'required|string|max:255',
            'landlord_name' => 'required|string|max:255',
            'property_address' => 'required|string|max:255',
            'monthly_rent' => 'required|numeric|min:0',
            'duration_months' => 'required|integer|min:1',
        ]);

        $agreement = RentAgreement::create(
            'user_id' => $request->user()->id,
            ...$validated
        );

        return response()->json([
            'message' => 'Agreement created successfully',
            'agreement_id' => $agreement->id,
            'data' => $agreement,
        ]);
    }
}
