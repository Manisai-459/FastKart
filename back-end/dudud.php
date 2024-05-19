<?php
$oldDirectoryName = './category/mama'; // Your current directory name
$newDirectoryName = './category/mani'; // Your desired new directory name

if (rename($oldDirectoryName, $newDirectoryName)) {
    echo "Directory renamed successfully.";
} else {
    echo "Error renaming directory.";
}
?>
