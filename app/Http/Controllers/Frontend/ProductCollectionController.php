<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductCollectionController extends Controller
{
    public function index(Request $request)
    {
        // Get the current page from the request (default to 1 if not set)
        $currentPage = $request->get('page', 1);
        $limit = 10; // Default limit set by the API
        $offset = ($currentPage - 1) * $limit; // Calculate offset based on current page

        $response = Http::withHeaders([
            'X-External-Token' => JWT_TOKEN,  // Add JWT in the Authorization header
        ])->get(API_URL, [
            'type' => 'newOnboardedProducts',  // Query parameters
            'limit' => $limit,
            'offset' => $offset,
        ]);
        $products = $response->json()['listElements'];

        // Determine if there's a "Next" page by comparing the number of products
        // If the number of products returned equals the limit, it means there's more data
        $nextPageExists = count($products) == $limit;

        return view('frontend.product.collection', compact('products', 'currentPage', 'nextPageExists'));  // Return the data as JSON
    }

    public function getBestSellingProducts()
    {
        $limit = 10;
        $offset = 0;
        // $url = API_URL . "?type=bestSellingProducts&limit=" . $limit . "&offset=" . $offset;

        // Send the GET request to the API
        // $response = Http::get(API_URL, [
        //     'type' => 'bestSellingProducts',  // Query parameters
        //     'limit' => 10,
        //     'offset' => 0
        // ]);

        // JWT token (you can retrieve this from a session, config, or another source)
        $jwtToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiYWRtaW4iOnRydWUsImlzcyI6InJvcG9zbyIsImF1ZCI6InJvcG9zbyIsImlhdCI6MTc0MTE2MzE2MSwiZXhwIjoxNzcyNjk5MTYxfQ.AyiB2g90MEj0qQtlM4wIDYdrxRTZxPE5maBu3impjMDC5dYm512ertazhh3tJQNT4VbkloD6VMQ8A4-WYHFx8c6q6QWKNcbgtZzRlHdBXW77uvrjiNk9yBGq7gKqnaqKw3AzTM04VD3KSVUVUYAw0kUDzFhxj8oJ9xSXY1AwPm0t207-NYxK3wksEb_rq19DToGVsiEjcVNvnLmTecPqsvvEyWfvTAoSEZR1ECDiWjNkgSghAe1XlBUOIuDncz3jiDNoog3p-KvYcLzh2BVxQz6s6gMgrKNTDp4KIc-ZqW-CA_nuXKja2V2LremLUSWJuUo4bs7Uvxe4V_i11cyqHw'; // Replace with your actual JWT token


        $response = Http::withHeaders([
            'X-External-Token' => $jwtToken,  // Add JWT in the Authorization header
        ])->get(API_URL, [
            'type' => 'bestSellingProducts',  // Query parameters
            'limit' => 10,
            'offset' => 0
        ]);

        // Check if the request was successful
        if ($response->successful()) {
            // Return the API response data as a JSON
            return response()->json($response->json());  // Return the data as JSON
        } else {
            // Return an error message if the request failed
            return response()->json(['error' => 'Failed to fetch data from API'], 500);
        }
        return view('frontend.product.collection');
    }
}
