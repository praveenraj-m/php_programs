<?php
// Currency Converter with API

// Function to convert currency
function convert_currency($amount, $from_currency, $to_currency) {
    // API URL for fetching exchange rates
    $api_url = "https://v6.exchangerate-api.com/v6/79c4fa1306937cdc8e97ba63/latest/USD";

    try {
        // Fetch data from the API
        $response = file_get_contents($api_url);
        $data = json_decode($response, true);

        // Check if the API request was successful
        if ($response && $data["result"] === "success") {
            // Get conversion rates from the API response
            $conversion_rates = $data["conversion_rates"];

            // Check if both source and target currencies are in the conversion rates
            if (array_key_exists($from_currency, $conversion_rates) && array_key_exists($to_currency, $conversion_rates)) {
                // Perform the currency conversion
                $converted_amount = $amount * ($conversion_rates[$to_currency] / $conversion_rates[$from_currency]);
                $result = round($converted_amount, 2);
                echo "{$amount} {$from_currency} is equal to {$result} {$to_currency}\n";
            } else {
                // If either the source or target currency is not in the API response, return an error message
                echo "Invalid currency code\n";
            }
        } else {
            // If the API request fails or the response indicates an error, print an error message
            echo "Error: " . $data['error'] . "\n";
        }

    } catch (Exception $e) {
        // Handle other exceptions (e.g., network issues)
        echo "Error: {$e->getMessage()}\n";
    }
}

// Example usage with user prompts
while (true) {
    try {
        $amount = (float) readline("Enter the amount: ");
    } catch (Exception $ex) {
        echo "Invalid input. Please enter a numeric value for the amount.\n";
        continue;  // Restart the loop to get a valid input
    }

    echo "Please type the currency code listed correctly \n'USD'\n'EUR',\n'GBP'\n'INR' \n";
    $from_currency = strtoupper(readline("Enter the from currency: "));
    $to_currency = strtoupper(readline("Enter the to currency: "));
    convert_currency($amount, $from_currency, $to_currency);

    // Ask if the user wants to perform another conversion
    $another_conversion = strtolower(readline("Do you want to perform another conversion? (yes/no): "));
    if ($another_conversion !== 'yes') {
        break;
    }
}
?>
