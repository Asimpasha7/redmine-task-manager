// app/Services/RedmineService.php

<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class RedmineService
{
    protected $redmineApiUrl;
    protected $apiKey;

    public function __construct()
    {

        $this->redmineApiUrl = config('app.redmine_api_url');
        $this->apiKey = config('app-redmine-api-key');
    }

    public function getAllTasks()
    {
        $response = Http::get("{$this->redmineApiUrl}/issues.json", [
            'key' => $this->apiKey,
            'status_id' => 'open', 
        ]);

        return $response->json()['issues'] ?? [];
    }

    public function createTask($data)
    {
        $response = Http::post("{$this->redmineApiUrl}/issues.json", [
            'key' => $this->apiKey,
            'issue' => $data,
        ]);

        return $response->json();
    }

    public function deleteTask($taskId)
    {
        $response = Http::delete("{$this->redmineApiUrl}/issues/{$taskId}.json", [
            'key' => $this->apiKey,
        ]);

        return $response->json();
    }
}
