Light Pollution vs Depressive Disorders — Code Snapshot (Exact-Output-Preserving)

This repository provides the exact code snapshot used to generate results for the preprint below.
No logic changes have been made; comments/filenames may differ but outputs are preserved.

Preprint (Research Square): https://doi.org/10.21203/rs.3.rs-7233105/v1
License (code): MIT
License (preprint text/figures): CC BY 4.0 (see the preprint page)

Contents
- src/php/estimateBrightness_preprint.php — PHP function used to estimate relative brightness (light pollution proxy) from nighttime satellite tiles.

Requirements
- PHP 7.x/8.x
- GD and Imagick extensions enabled

Minimal Usage (example)
<?php
require 'src/php/estimateBrightness_preprint.php';

// Input: path to a PNG tile extracted from the VIIRS composite
$val = estimateBrightness('path/to/tile.png');

// Output: normalized brightness proxy in [0..1]
echo $val . PHP_EOL;
?>

Note: This repository does not include satellite imagery or health data.
Please acquire the original imagery (e.g., VIIRS day/night band composite) and city tiles as in the study workflow, then call the function for each tile.

Reproducibility Notes
- This is an archival snapshot matching the preprint computations (exact-output-preserving).
- Any future improvements will be committed as separate files without altering this snapshot.

How to Cite
Hossein Zamaninasab, Arsalan Heidarpanah. The Negative Correlation Between Nighttime Light Pollution and the Prevalence of Depressive Disorders: A Medical Image-Processing Study on 35 US Cities. Research Square (preprint). https://doi.org/10.21203/rs.3.rs-7233105/v1
