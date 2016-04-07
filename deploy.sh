#!/bin/sh
rsync -avru --rsh='ssh -p2222' _site stedman@stedmanhalliday.com:public_html --delete-before
