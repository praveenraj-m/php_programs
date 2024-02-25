<?php
// Weather App
function weatherApp() {
    $city = readline("Enter the city name: ");
    $apiKey = "YOUR_API_KEY";  // Replace with your actual API key
    $weatherUrl = "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}";

    try {
        $response = file_get_contents($weatherUrl);
        $data = json_decode($response, true);

        if ($data["cod"] == 200) {
            $temperature = $data["main"]["temp"];
            $description = $data["weather"][0]["description"];
            echo "The current temperature in {$city} is {$temperature}°C. Weather: {$description}\n";
        } else {
            echo "Error: {$data['message']}\n";
        }

    } catch (Exception $e) {
        echo "Error: {$e->getMessage()}\n";
    }
}

// Run the Weather App
weatherApp();
?>
