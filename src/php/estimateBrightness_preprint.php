<?php
/**
 * Snapshot of the exact code used in the preprint:
 * DOI: 10.21203/rs.3.rs-7233105/v1
 * NOTE: Header comments only; logic/output preserved.
 */

function estimateBrightness( $image ){

    $target = imagecreatefrompng($image);
    
    $width = imagesx($target);
    
    $height = imagesy($target);

    try
    {
        
        $imagick = new imagick($image);

        $result = 0;

        $pixel_counter = 0;

        $alpha_counter = 0;
        
        for( $w=0; $w < $width; $w++ ){
            
            for( $h=0; $h < $height; $h++ ){

                $rgb = imagecolorat($target, $w, $h);
                
                $alpha = ($rgb & 0x7F000000) >> 24;
                
                if( ($pixel = $imagick->getImagePixelColor($w, $h)) && $alpha != 127){
                    
                    if( ($colors = $pixel->getColor()) && isset($colors['b']) ){
                                                
                        if($brightness > 0.2){
                            
                            $result += ($colors['r'] + $colors['g'] + $colors['b']);
    
                            $pixel_counter++;
                            
                        }

                    }
                }
            }
        }

        return $result/( $pixel_counter * 255 * 3);

    } catch( ImagickException $e ){}

    return 0;
}
?>
