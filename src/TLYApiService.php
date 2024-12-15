<?php

namespace TLY\LaravelUrlShortener;

use Illuminate\Support\Facades\Http;

class TLYApiService
{
    protected $apiUrl = 'https://api.t.ly/api/v1/link';
    protected $apiToken;

    public function __construct($apiToken)
    {
        $this->apiToken = $apiToken;
    }

    private function headers()
    {
        return [
            'Authorization' => 'Bearer '.$this->apiToken,
            'Content-Type'  => 'application/json',
            'Accept'        => 'application/json',
        ];
    }

    public function create(array $data)
    {
        return Http::withHeaders($this->headers())
            ->post("{$this->apiUrl}/shorten", $data)
            ->json();
    }

    public function get(string $shortUrl)
    {
        return Http::withHeaders($this->headers())
            ->get($this->apiUrl, ['short_url' => $shortUrl])
            ->json();
    }

    public function update(array $data)
    {
        return Http::withHeaders($this->headers())
            ->put($this->apiUrl, $data)
            ->json();
    }

    public function delete(string $shortUrl)
    {
        return Http::withHeaders($this->headers())
            ->delete($this->apiUrl, ['short_url' => $shortUrl])
            ->json();
    }

    public function list(array $params = [])
    {
        return Http::withHeaders($this->headers())
            ->get("{$this->apiUrl}/list", $params)
            ->json();
    }

    public function stats(string $shortUrl)
    {
        return Http::withHeaders($this->headers())
            ->get("{$this->apiUrl}/stats", ['short_url' => $shortUrl])
            ->json();
    }
}