#!/bin/bash
clear
lessc /var/www/evacorp2/public_html/html/corporate/css/style.less > /var/www/evacorp2/public_html/html/corporate/css/style.css
cp /var/www/evacorp2/public_html/html/corporate/css/style.css /var/www/evacorp2/public_html/wp-content/themes/eva2015/css/style.css
