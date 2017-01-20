#!/bin/sh
jekyll build
cd _site
rsync -avru --rsh='ssh -p2222' . stedman@50.87.147.174:public_html --delete-before
cd ..
