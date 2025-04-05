<?php

namespace App\Helpers;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Support\Facades\Storage;

class JwtHelper
{
    public static function generateToken($payload)
    {
        // Load the private key
        $privateKeyPath = storage_path('keys/jwtRS256-private.pem');

        if (!file_exists($privateKeyPath)) {
            throw new \Exception('Private key not found.');
        }

        // Read private key and base64 decode if necessary
        $privateKey = file_get_contents($privateKeyPath);

        // Define token expiration time (1 hour)
        // $expTime = time() + 3600;

        // Set expiry to **1 year (365 days)**
        $expTime = time() + (365 * 24 * 60 * 60); // 1 year in seconds

        // Define payload (customize as needed)
        $tokenPayload = array_merge($payload, [
            "iss" => "roposo", // Issuer
            "aud" => "roposo", // Audience
            "iat" => time(), // Issued At
            "exp" => $expTime // Expiration
        ]);

        // Generate JWT Token using RSA256
        return JWT::encode($tokenPayload, $privateKey, 'RS256');
    }
}
