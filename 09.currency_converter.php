<?php
// Currency Converter
function convertCurrency($amount, $fromCurrency, $toCurrency) {
    // Replace with actual conversion rates
    $conversionRates = [
        'USD' => 1.20,
        'EUR' => 1.00,
        'GBP' => 0.85,
        'INR' => 90.0,  // Example conversion rate for INR
    ];

    if (isset($conversionRates[$fromCurrency]) && isset($conversionRates[$toCurrency])) {
        $convertedAmount = $amount * ($conversionRates[$toCurrency] / $conversionRates[$fromCurrency]);
        return number_format($convertedAmount, 2, '.', '');
    } else {
        return "Invalid currency code";
    }
}

// Example usage
$amount = 100;
$fromCurrency = 'USD';
$toCurrency = 'INR';

$result = convertCurrency($amount, $fromCurrency, $toCurrency);
echo "{$amount} {$fromCurrency} is equal to {$result} {$toCurrency}\n";
?>
