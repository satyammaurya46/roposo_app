<?php

use Illuminate\Support\Facades\Http;

 function getProducts($type="",$limit="",$offset="")
 {
     $response = Http::withHeaders([
         'X-External-Token' => JWT_TOKEN,  // Add JWT in the Authorization header
     ])->get(API_URL, [
         'type' => $type,  // Query parameters
         'limit' => $limit,
         'offset' => $offset
     ]);
     return $response->json()['listElements'];  // Return the data as JSON
 }
 function getRatings($rating,$maxrating="")
 {
    $percentage=($rating/$maxrating)*100;
    return $percentage;
 }