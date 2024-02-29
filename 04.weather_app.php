<?php
// Weather App
function weatherApp() {
    $city = readline("Enter the city name: ");
    $apiKey = "c9988ab52aacedc0c0533b4287c2a35d";  // Replace with actual API key
    $weatherUrl = "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}";

    try {
        // Make an API request and get the response
        $response = file_get_contents($weatherUrl);
        $data = json_decode($response, true);  // Decode the JSON response

        // Check if the response code is 200 (OK)
        if ($data["cod"] == 200) {
            // Extract temperature and weather description from the response
            $temperature = $data["main"]["temp"];
            $description = $data["weather"][0]["description"];
            echo "The current temperature in {$city} is {$temperature}°C. Weather: {$description}\n";
        } else {
            // Display an error message if the response code is not 200
            echo "Error: {$data['message']}\n";
        }

    } catch (Exception $e) {
        // Handle exceptions (e.g., connection issues)
        echo "Error: {$e->getMessage()}\n";
    }
}

// Run the Weather App
weatherApp();
?>
