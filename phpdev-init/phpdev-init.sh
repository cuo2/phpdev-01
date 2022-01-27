#!/bin/bash

apt install nginx php-fpm php-mysql

wget -P /tmp/ https://az764295.vo.msecnd.net/stable/899d46d82c4c95423fb7e10e68eba52050e30ba3/code_1.63.2-1639562499_amd64.deb
dpkg -i /tmp/code_1.63.2-1639562499_amd64.deb

sh -c "$(wget https://raw.github.com/ohmyzsh/ohmyzsh/master/tools/install.sh -O -)"
