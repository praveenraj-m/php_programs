<?php
// Basic Website Scraper
function websiteScraper($url) {
    $html = file_get_contents($url);

    // Create a DOM parser
    $dom = new DOMDocument;
    @$dom->loadHTML($html);

    // Use XPath to find all a elements
    $xpath = new DOMXPath($dom);
    $links = $xpath->query('//a');

    // Print the href attribute of each a element
    foreach ($links as $link) {
        echo $link->getAttribute('href') . "\n";
    }
}

// Run the Website Scraper
websiteScraper('https://www.google.com');
?>
