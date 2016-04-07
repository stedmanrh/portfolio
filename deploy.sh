#!/bin/sh
rsync -avr --rsh='ssh -p2222' _site stedman@stedmanhalliday.com:public_html
