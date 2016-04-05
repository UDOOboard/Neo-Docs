A Bluetooth NAP is similar to a Wi-Fi access point. It can be used to create a link between several bluetooth devices, allowing standard TCP/IP communication.

In this guide, we will make a board act like a *server*, other boards in the same bluetooth network (*clients*) will connect to the server board.

## Setup the server board

We need to create a bridge network interface for the bluetooth connection. First, install bridge-utils:

    sudo apt-get install bridge-utils

Create the bridge interface by adding the following lines to `/etc/network/interfaces`:

```
auto br0
iface br0 inet static
address 192.168.66.1
netmask 255.255.255.0
bridge_ports none
bridge_fd 5
bridge_stp no
```

Configure the DHCP server so it will be able to distribuite IP addresses to client boards. Add the following lines to `/etc/dhcp/dhcpd.conf`:

```
subnet 192.168.66.0 netmask 255.255.255.0 {
        option routers          192.168.66.1;
        option subnet-mask      255.255.255.0;
        range 192.168.66.10     192.168.66.20;
}
```

Then replace the content of `/etc/bluetooth/network.conf` with:

```
[General]
 
[PANU Role]
 Script=dhclient
 
[GN Role]
Script=dhclient
 
[NAP Role]
Interface=br0
```

Restart the `bluetooth` and `networking` services (or reboot the whole board):

    sudo /etc/init.d/bluetooth  restart
    sudo /etc/init.d/networking restart


Set the bluetooth as discoverable, so the client boards can find the server:

    bluez-test-adapter discoverable on


Get the MAC address of the server bluetooth chip using:

    hcitool dev |grep hci0 |awk '{print $2}'

You will need the server MAC address later (`$MASTER_MAC`).

Finally, we need to advertise that NAP services are being provided by our board:

    wget https://gist.githubusercontent.com/fmntf/10c24edb2fa741d682edad969076e792/raw/141e5ba03b78a406bec3c3bbababc482824f6a51/bt-nap.py
    chmod +x bt-nap.py
    ./bt-nap.py br0 &


## Pair the clients
You need to pair and trust the client boards to the server. The easiest way to do this is using the [blueman GUI](../Wireless_Communication/Bluetooth.html). If you prefer, you can use the command line, too.

On each client board, pair and trust the server board (identified by `$MASTER_MAC`):

    bluez-simple-agent hci0 $MASTER_MAC
    bluez-test-device trusted $MASTER_MAC yes

Then connect to the NAP network using:

    bluez-test-network $MASTER_MAC nap
    dhclient bnep0


## References
* [IP over Bluetooth with Linux](http://www.redtreerobotics.com/ip-over-bluetooth-with-linux/)
* [IP Over Bluetooth to a Raspberry Pi](http://notes.pitfall.org/ip-over-bluetooth-to-a-raspberry-pi.html)
