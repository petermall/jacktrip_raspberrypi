# Start Jackaudio and JackTrip as Service

The files have been adopted from the RaspberryPi installation provided by the project www.jacktrip.org.

## Installation (Raspberry Pi)

1. Install jackaudio with apt (jack-tools)
2. Install Jacktrip using the guide here: www.github.com/jacktrip (we use the qjacktrip branch)
3. Copy filed in this folder to /etc/systemd/system

Edit paths to binaries and config file (here /etc/jackaudio).

Start using systemctl.

Enable on startup:

sudo systemctl enable jack

This configuration adds user jacktrip to group audio. 
