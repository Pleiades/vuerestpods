<?php


// import/update definition of pods objects
function pod_objects_loader () {
  $path = __DIR__ . '/pods_objects';
  if ( class_exists( 'Pods_Migrate_Packages' ) ) {
    foreach (glob($path . '/' . "*.json") as $filename) {
      // echo "$filename size " . filesize($filename) . "\n";
      $content = file_get_contents($filename);
      $import = Pods_Migrate_Packages::import($content, false);
    }
  } else {
    // throw an error here
    die('Pods_Migrate_Packages is not loaded. Make sure Pods is installed and the Migrate Packages module is enabled.');
  }
}
