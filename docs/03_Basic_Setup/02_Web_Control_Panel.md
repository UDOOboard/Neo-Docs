## UDOO NEO Web Control Panel

The UDOO NEO's Web Control Panel is a utility designed to:

* Easily configure your UDOO NEO, from the Wireless Connection to the UDOO NEO's hostname;
* Check its connection status;
* Learn how to develop basic projects;
* Test simple Arduino sketches on the fly;
* Expose the Documentation;

### How to connect to the UDOO NEO Web Control Panel

Once you followed the [USB Direct Connection](http://www.udoo.org/docs-neo/Basic_Setup/Usb_Direct_Connection.html) guide and installed all the necessary drivers you can connect to the UDOO NEO Web Control Panel through one of these ways:

1) connect UDOO NEO to your computer via USB, then open a browser on your computer and type 192.168.7.2   
2) open a browser and type the IP address of UDOO NEO if you know it and if NEO is connected to the same network of your host computer.
3) open a browser and type udooneo.local. Beware to have installed [Bonjour](https://developer.apple.com/bonjour/) on your Windows computer. On Mac and Linux you should have what you need pre-installed: Bonjour on Mac OS and [Avahi](http://www.avahi.org/) on Linux. This is a beta feature, thus we suggest to go for the first two methods.

### Overview 

<img style="width:700px;" src="../img/udoo-web-control-panel1.jpg">

The Overview Tab will give you a quick insight on the Status of your UDOO NEO:

* At the top left you'll find 3 graphical indicators, showing the magnitude of change state in Accelerometer, Gyroscope and Magnetometer;
* At the top right you'll find an overview of NEO's connectivity, indicating whether Ethernet, USB, Wlan and Bluetooth are connected, and their IP address;
* The other tiles will be your starting point on discovering UDOO NEO's capabilities.


### Arduino

<img style="width:500px;" src="../img/udoo-web-control-panel2.jpg">

On this section you can try the integrated Arduino M4 Processor. You can upload two simple Hello World sketches, Fade and Blink.

### First Config Wizard 

<img style="width:500px;" src="../img/udoo-web-control-panel3.jpg">

This section helps you configure your UDOO NEO and connect it to a wireless network.
To complete the configuration you need to fill all the blanks, and then hit next. Once finished, hit "finished" and your settings will be applied.  

* Board Name: this will change your hostname, and therefore the address:
If you call it myneo, it will be reachable trough http://myneo.local
This can help you identifying various NEOs on the same network

* Keyboard layout: pretty explanatory, change the keyboard layout 
* Wireless Network: connects to your wireless Network. This setting is persistent across reboot. To verify the Wireless Network connection status return on overview page where you will also discover its IP.


