Newer builds of UDOObuntu are supporting the software access-point mode for the WL1831 chip.

In order to enable SoftAP mode, install the `udoo-softap` metapackage:

    sudo apt-get install udoo-softap

Doing this, a default `/etc/hostapd/hostapd.conf` will be provided. Edit this file to change the access point settings:

```
interface=wlan0           
driver=nl80211            
hw_mode=g                 
macaddr_acl=0             
auth_algs=1               
ignore_broadcast_ssid=0   
ieee80211n=1              

ssid=UDOO hotspot       
channel=1               
wpa=2                   
wpa_key_mgmt=WPA-PSK    
rsn_pairwise=CCMP       
wpa_passphrase=udooboard
```

You should change:

 * `ssid` is the name of the network;
 * `channel` is the frequency channel (it is better to pick the channel least congested);
 * `wpa_passphrase` is the password to connect to the network.

In the file `/etc/default/hostapd` uncomment the line `DAEMON_CONF` and set this value to the hostapd.conf path:

    DAEMON_CONF="/etc/hostapd/hostapd.conf"


<span class="label label-warning">Heads up!</span> When in Soft-AP mode, you cannot connect to wireless networks in client mode! In fact, installing `udoo-softap` you are disabling the `wpa_supplicant` service. Uninstall the Soft-AP metapackage to restore client Wi-Fi connectivity.

## Troubleshooting

To check everything is working fine you can run the command:

    sudo service hostapd status

If is says *"hostapd is not running"* check for possible issues using the command:

    sudo hostapd /etc/hostapd/hostapd.conf
    
### Error: Could not configure driver mode

If you encounter this problem, it is probably because the driver of hostapd is 
clashing with the drivers of network-manager utility.

They are basically fighting to take charge of the wireless device you are trying to configure with hostapd.
If you notice, when you put the card in monitor mode manually using the following commands:

Note:  *All commands are being run as root*

```bash
ifconfig wlan0 down
iwconfig wlan0 mode monitor
ifconfig wlan0 up
```

After a few seconds, the card jumps back to `mode:managed`

This is because the card is being managed by network-manager utility. So, there are two ways you can tackle this issue:

    airmon-ng check kill to kill all the potentially troublesome processes, like network-manager, wpa_supplicant, dhclient
    Make your selected card an exception in network-manager, so that it ignores the card and not mess with it ever.

How to make network-manager ignore your wireless card
– Get you wireless card’s MAC address/hardware address
```
ifconfig wlan0 | grep -i hwaddr
```
It will show an output like this:
```
wlan0 Link encap:Ethernet HWaddr 7d:e6:d2:30:9f:f2
```
– Open the network-manager configuration file: NetworkManager.conf

```
nano /etc/NetworkManager/NetworkManager.conf
```
Add the following code and replace the MAC address with your selected device’s MAC
```
[main]
plugins=ifupdown,keyfile

[ifupdown]
managed=false

[keyfile]
unmanaged-devices=mac:7d:e6:d2:30:9f:f2
```
Hit CTRL + O to save and CTRL + X to exit.
– Restart network-manager:
```
service network-manager restart 
```
This must fix the Could not configure driver mode error.

Credits: https://members.rootsh3ll.com/t/nl80211-could-not-configure-driver-mode-hostapd-error/197
