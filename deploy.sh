#!/bin/sh
jekyll build
cd _site
rsync -avru --rsh='ssh -p2222' . stedman@stedmanhalliday.com:public_html --delete-before
cd ..
