<?php
// http://www.rapidtables.com/convert/color/rgb-to-hsl.htm
function hex2rgbCB( $num ) {
  return hexdec( $num );
}

function rgb2hslCB( $num ) {
  return $num / 255;
}

function hex2rgb( $hex ) {
  return array_map( "hex2rgbCB", str_split( str_replace( '#', '', $hex ), 2 ) );
}

function hex2hsl( $hex ) {
  $rgb = array_map( "rgb2hslCB", hex2rgb( $hex ) );

  $min = min( $rgb );
  $max = max( $rgb );

  $chroma = $max - $min;

  $h = $s = 0;
  $l = 100 * ( ( $max + $min ) / 2 );

  if ( $chroma != 0 ) {
    switch ( $max ) {
      case $rgb[0]:
        $h = 60 * fmod( ( $rgb[1] - $rgb[2] ) / $chroma, 6 );
        // if ( $rgb[2] > $rgb[1] ) $h += 360;
        break;
      case $rgb[1]:
        $h = 60 * ( ( $rgb[2] - $rgb[0] ) / $chroma + 2 );
        break;
      case $rgb[2]:
        $h = 60 * ( ( $rgb[0] - $rgb[1] ) / $chroma + 4 );
        break;
    }
    $s = round( 100 * ( $chroma / ( 1 - abs( 2 * ( $l / 100 ) - 1 ) ) ), 2 );
    $h = round( $h , 2 );
  }
  $l = round( $l, 2 );
  return array( $h, $s, $l );
}

function darken( $hex, $num, $print = true ) {
  $hsl = is_array( $hex ) ? $hex : hex2hsl( $hex );
  $hsl[2] -= $num;
  return $print ? 'hsl(' . $hsl[0] . ', ' . $hsl[1] . '%, ' . $hsl[2] . '%)' : $hsl;
}

function lighten( $hex, $num, $print = true ) {
  $hsl = is_array( $hex ) ? $hex : hex2hsl( $hex );
  $hsl[2] += $num;
  return $print ? 'hsl(' . $hsl[0] . ', ' . $hsl[1] . '%, ' . $hsl[2] . '%)' : $hsl;
}

function hsla( $hex, $opacity, $print = true ) {
  $hsla = is_array( $hex ) ? $hex : hex2hsl( $hex );
  array_push( $hsla, $opacity );
  return $print ? 'hsla(' . $hsla[0] . ', ' . $hsla[1] . '%, ' . $hsla[2] . '%, ' . $hsla[3] . ')' : $hsla;
}
