#!/bin/sh
name="$1"
y=$(date +"%Y")
m=$(date +"%m")
d=$(date +"%d")
path="_projects/${y}/${m}${d}-${name}"
mkdir -p $path
cp -R _models/newproj/* $path
mv $path/newproj.md $path/$name.md
