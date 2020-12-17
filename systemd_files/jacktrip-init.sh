#!/bin/bash
#
#
# Copyright Peter Mall

CONFOG_DIR=/etc/jacktrip

function update_issue {
	IP=$(hostname -I) || true
	MAC=$(cat /sys/class/net/eth0/address) || true
	APLAY=$(/usr/bin/aplay -l)


	if [ "$APLAY" == "" ]; then
		APLAY="No sound card found"
	fi

	cat << EOF >/etc/issue

Raspbian GNU/Linux 10 \\n \\l
My IP address is $IP
My MAC address is $MAC

$APLAY

EOF
}


#mount -o remount,rw /
#mount -o remount,rw /boot

wget /path/to/file -O /var/tmp/jack.conf

amixer -c 1 sset 'ADC Left Input' '{VIN1P, VIN1M}[DIFF]'
amixer -c 1 sset 'ADC Right Input' '{VIN1P, VIN1M}[DIFF]'


#mount -o remount,ro /
#mount -o remount,ro /boot
