Bluetooth can be configured using the *Bluetooth Manager* application in the *Preferences* menu of the UDOObuntu Desktop.

In *Adapter* / *Preferences* you can set the device name, and configure visiblity settings.

<img style="width:400px;" src="../img/blueman.png">

In the main window use the *Search* button to discover nearby devices. Then click the devices found to connect to them.


## Using the command line

You can use the bluetooth also from the command line. Just use the `hci*` and `bluez*` utilities which come prebundled with UDOObuntu.

```
udooer@udooneo:~$ hcitool dev
Devices:
        hci0    5C:31:3E:D5:7B:36
udooer@udooneo:~$
```
