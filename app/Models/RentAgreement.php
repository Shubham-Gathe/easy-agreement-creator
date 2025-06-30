<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentAgreement extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tenant_name',
        'landlord_name',
        'property_address',
        'monthly_rent',
        'duration_months',
    ];
}
