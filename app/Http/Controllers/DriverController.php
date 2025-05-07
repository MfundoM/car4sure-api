<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Driver $driver)
    {
        try {
            $driver->delete();

            return response()->json([
                'success' => true,
                'message' => 'Driver deleted successfully.'
            ], 204);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete driver.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
