#!/bin/bash
# Ngrok Error : Manual Installation

str="\e[1;32m[*]\e[0m"

install () {
	clear
	printf "\e[1;32m[1] HiddenEye"
	printf "\e[1;32m[2] Shellphish"
	printf "\e[1;32m[3] Locator"
	printf "\e[1;32m[4] Saycheese"

	read -p $'$g Enter : ' in

	if [ "$in" = "1" ];then
	printf "$str Installing Ngrok in HiddenEye"
	cp -f $PREFIX/bin/ngrok ~/HiddenEye/Server
	chmod 777 ~/HiddenEye/Server/ngrok
	sleep 3
	printf "$str Installed successfully"
	fi

	if [ "$in" = "2" ];then
	printf "$str Installing Ngrok in shellphish"
	cp -f $PREFIX/bin/ngrok ~/shellphish
	chmod 777 ~/shellphish/ngrok
	sleep 3
	printf "$str Installed successfull"
	fi

	if [ "$in" = "3" ];then
	printf "$str Installing Ngrok in Locator"
	cp -f $PREFIX/bin/ngrok ~/locator
	chmod 777 ~/locator/ngrok
	printf "$str Installed successfull"
	fi

	if [ "$in" = "4" ];then
	printf "$str Installing Ngrok in saycheese"
	cp -f $PREFIX/bin/ngrok ~/saycheese
	chmod 777 ~/saycheese/ngrok
	printf "$str Installed successfull"
	fi
	}
	
echo -e "$str Downloading requirements"
command -v curl > /dev/null 2>&1 || pkg install curl
clear
echo -e "$str Downloading ngrok ..."
curl -O https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-arm.zip
clear
echo -e "$str Installing ngrok ..."
cp -f ngrok $PREFIX/bin
chmod 777 $PREFIX/bin/ngrok
rm -f ngrok
echo -e "$str Successfully Installed"