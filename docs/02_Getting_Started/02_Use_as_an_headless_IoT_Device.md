## What is an headless device and why do I want to use my NEO this way?

Typically an headless device is a computer that is used without the need of Monitor, Keyboard and mouse. Typical examples
of this configuration include

* Web Servers
* Network Attached Storage (NAS)
* Internet of things Gateway or sensor 
* Rover or Drone 

Those configurations are pretty common and they are required when space and mobility are the first concerns.
In order to use your UDOO Neo in such ways, you have plenty of options.

### USB Headless Device

This mode is particularly handy if you don't have any available network or if you wish to use your NEO with your computer, for example at 
hackatons. Thanks to its integrated USB Tethering module, UDOO NEO will create a USB Network Upon Connection with your Computer.

To achieve this:

* Insert your SD Card
* Connect the Micro USB Cable to UDOO NEO and then to your PC. UDOO NEO will take its power from USB port.
* If its the first time you proceed this way, configure your PC as described in the <a href="../Basic_Setup/Usb_Direct_Connection.html">configure Usb Direct Connection</a>
* Done! Your UDOO Neo is available at the address [192.168.7.2](http://192.168.7.2)
* You can use it via SSH Remote Terminal, VNC Remote Desktop or trough Web Control Panel


### Network Connected Headless Device

* Insert your SD Card
* Connect to your Network via Ethernet Cable
* Turn on by applying power, either via Micro USB or DC-in

Your UDOO Neo will be available in your Network, you can now use it using SSH Remote Terminal, VNC Remote Desktop or trough Web Control Panel.


### Wireless Network Connected Headless Device

This mode is exactly the same as the one above, except you use the integrated Wireless Network adapter. Please note that you must configure your Wireless Network
accordingly. You can do it either via the Web Control Panel or Network Manager. 
