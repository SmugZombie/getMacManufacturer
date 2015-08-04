#!/bin/bash
# getManufacturer.sh
# author: SmugZombie
# version: 1.0

MACIN=$1
if [ -z "$MACIN" -o "$MACIN" = "-h" -o "$MACIN" = "--help" ] ; then
echo ""
echo "Error: No MAC Supplied."
echo ""
echo "Usage:"
echo "./getManufacturer.sh <MACADDRESS>"
echo ""
echo "MAC Address can be first 6 chars, or full 12."
echo ""
echo "Example:"
echo "./getManufacturer.sh CC:3A:61"
echo "./getManufacturer.sh CC:3A:61:XX:XX:XX"
echo ""
exit
fi
homeUrl="http://digdns.com/mac/?mac=$MACIN"
curlResult=$(curl -m 10 -s $homeUrl)
echo $curlResult
