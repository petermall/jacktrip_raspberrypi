#!/bin/bash
#
#
# Copyright Peter Mall
# This script installs Jackaudio, QJackTrip and RaspAP
# Jack and Jacktrip start on Systemboot with parameters in
# /etc/jacktrip/jackaudio
#

# Update System
echo "Update System first"

apt-get update
apt-get upgrade

# Install dependencies Jacktrip - Ubuntu/Raspian
apt install -y jack-tools
apt install -y --no-install-recommends build-essential librtaudio-dev qt5-default autoconf automake libtool make libjack-jackd2-dev qjackctl git


# Clone Repository and build
echo "Clone and Build qJackTrip"
cd
git clone https://github.com/jacktrip/jacktrip.git

cd jacktrip

git checkout qjacktrip

./build-script

cp qjacktrip /usr/bin/

cd
## Copy Init-scripts to systemd/system

echo "Copy Init-Scripts and start Service"

cp jacktrip_raspberrypi/systemd_files/jack*.service /etc/systems/system
cp jacktrip_raspberrypi/systemd_files/jack.conf /var/tmp/jack.conf

## add user jacktrip
echo "Add User Jacktrip"

useradd -M -r jacktrip -G audio

## Enable jack.service und jacktrip.service

systemctl deamon-reload
systemctl enable jack.service
# systemctl enable jacktrip.service        # if not started via webgui
## systemctl enable jacktrip-init.service     # TODO



## Install RaspAP
#echo "Install RaspAP - Follow instructions"

#curl -sL https://install.raspap.com | bash
