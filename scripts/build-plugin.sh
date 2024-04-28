#!/bin/bash
target="$HOME/Downloads/local_nsplus.zip"
temp_folder="nsplus"

mkdir $temp_folder
cp -r ./* $temp_folder
rm -rf $temp_folder/node_modules

rm -rf $target

if zip "${target}" -r $temp_folder;then
    echo "Build success: $target"
else
    echo "Build failed with RC $?."
fi

rm -rf $temp_folder