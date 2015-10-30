## UDOO Web Control Panel

UDOO Web Control Panel is a utiliy designed to:

* Easily configure your UDOO, from Wireless Connection to its hostname
* Check its connection status
* Learn how to develop basic projects
* Expose the Documentation

PLEASE NOTE: UDOO'S Web Control Panel is currently in alpha state, and it doesn't resemble its complete state.

### Overview 

<img style="width:700px;" src="../img/udoo-web-control-panel1.jpg">

The Overview Tab will give you a quick insight on your UDOO NEO Status:

* On top left side, you'll find 3 graphical indicators, showing the magnitude of change state in Accelerometer, Gyroscope and Magnetometer
* On top right side, you'll find an overview of NEO's connectivity, indicating whether Ethernet, USB, Wlan and Bluetooth are connected, and their IP address
* The other tiles will be your starting point on discovering UDOO NEO's capabilities


### Arduino

<img style="width:500px;" src="../img/udoo-web-control-panel2.jpg">

On this section you can try the integrated Arduino M4 Processor. You can upload two simple hello world sketches, fate and blink.



### First Config Wizard 

<img style="width:500px;" src="../img/udoo-web-control-panel3.jpg">

This section helps you configure your UDOO and connect it to a wireless network:

To complete the configuration you need to complete every field, and hit next. Once finished, hit finished and your settings will be applied.  

* Board Name: this will change your hostname, and therefore the address:
If you call it myneo, it will be reachable trough http://myneo.local
This can help you identifying various NEOs on the same network

* Keyboard layout: pretty explanatory, change the keyboard layout 
* Wireless Network: connects to your wireless Network. This setting is persistent accross reboot. To verify the Wireless Network connection status, 
return on overview page where you will also discover its IP.


