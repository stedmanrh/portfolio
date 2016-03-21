#!/bin/sh
if [ -n "$1" ]
then

    if [ -n "$2" ] && [ -n "$3" ]
    then
        year="$1"
        monthdate="$2"
        name="$3"
    else
        name="$1"
        year=$(date +"%Y")
        monthdate=$(date +"%m%d")
    fi

    path="_projects/${year}/${monthdate}-${name}"
    mkdir -p $path
    cp -R _models/newproj/* $path
    mv $path/newproj.md $path/$name.md

else
    echo "Usage: newproj [yyyy mmdd] name"
fi
