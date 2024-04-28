#!/bin/bash

#####################################
## Build script for NSPlus Moodle  ##
## plugin. Outputs a .zip archive  ##
## with the required structure.    ##
#####################################

target="$HOME/Downloads/local_nsplus.zip"
temp_folder="nsplus"
build_items="css \
            js \
            img \
            index.html \
            LICENSE \
            README.md\
            *.php\
            lang"

# Prepare folder for build, required by plugin structure
mkdir $temp_folder
cp -r $build_items $temp_folder # Copy listed items
rm -rf $target # Remove previous build

# Build zipped plugin
if zip "${target}" -r $temp_folder;then
    echo "Build success: $target"
else
    echo "Build failed with RC $?."
fi

# Clean up
rm -rf $temp_folder
