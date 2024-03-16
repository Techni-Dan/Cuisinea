<?php

function linesToArray(string $string) {
  return explode(PHP_EOL, $string);
}

function slugify($text, string $divider = '-')
{
  // Separate filename and extension
  $path_parts = pathinfo($text);
  $filename = $path_parts['filename'];
  $extension = isset($path_parts['extension']) ? '.' . $path_parts['extension'] : '';

  // Replace non-letter or digits by divider
  $filename = preg_replace('~[^\pL\d]+~u', $divider, $filename);

  // Transliterate
  $filename = iconv('utf-8', 'us-ascii//TRANSLIT', $filename);

  // Remove unwanted characters
  $filename = preg_replace('~[^-\w]+~', '', $filename);

  // Trim
  $filename = trim($filename, $divider);

  // Remove duplicate divider
  $filename = preg_replace('~-+~', $divider, $filename);

  // Lowercase
  $filename = strtolower($filename);

  if (empty($filename)) {
    return 'n-a';
  }

  // Append extension back
  return $filename . $extension;
}