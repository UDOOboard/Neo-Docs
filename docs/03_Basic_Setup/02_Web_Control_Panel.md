## UDOO NEO Web Control Panel

The UDOO NEO's Web Control Panel is a utility designed to:

* Easily configure your UDOO NEO, from the Wireless Connection to the UDOO NEO's hostname;
* Check its connection status;
* Learn how to develop basic projects;
* Test simple Arduino sketches on the fly;
* Expose the Documentation;

### How to connect to the UDOO NEO Web Control Panel

Once you followed the [USB Direct Connection](http://www.udoo.org/docs-neo/Basic_Setup/Usb_Direct_Connection.html) guide and installed all the necessary drivers you can connect to the UDOO NEO Web Control Panel through one of these ways:

1) connect UDOO NEO to your computer via USB, then open a browser on your computer and type `192.168.7.2`
2) open a browser and type the IP address of UDOO NEO if you know it and if NEO is connected to the same network of your host computer.
3) open a browser and type udooneo.local. Beware to have installed [Bonjour](https://support.apple.com/kb/DL999) on your Windows computer. On Mac and Linux you should have what you need pre-installed: Bonjour on Mac OS and [Avahi](http://www.avahi.org/) on Linux. N.B: This is a beta feature, thus we suggest to go for the first two methods.

#### Dashboard

<a href="../img/webconf/home.png" target="_blank"><img style="width:700px;" src="../img/webconf/home.png"></a>

The Dashboard gives you a quick insight on the status of your UDOO Neo:

 * At the top, you'll find an overview of board's connectivity, indicating whether Ethernet, USB, Wlan and Bluetooth are connected, and their IP address;
 * In the center, you can find board model and unique ID. On the right, there are axis and modulus values for the Accelerometer, Gyroscope and Magnetometer;
 * The other tiles are the starting point on discovering UDOO Neo's capabilities.


#### Arduino

<a href="../img/webconf/webide.png" target="_blank"><img style="width:700px;" src="../img/webconf/webide.png"></a>

On this section you can try the integrated Arduino M4 Processor. You can upload two simple Hello World sketches, Fade and Blink (from the Samples section) or code your own sketch using th Web IDE.

Ardublockly allows to build Arduino sketches graphically, interconnecting logic blocks, without writing any code.


#### Configuration

This section helps you to configure your board and connect it to a wireless network:

 * On "Password and hostname", you can change your passwords and set a name for your board;
 * On "Network settings", you can connect to Wi-Fi networks;
 * On "Regional settings" you can set the locale, timezone and regional settings;
 * On "Advanced settings" you can change the main video output device (e.g. HDMI or LVDS), enable/disable the Arduino core and change the TCP port where the Web Configuration Tool operates (so you can, for example, install a webserver on your board, like Apache or nginx),

 <a href="../img/webconf/wifi.png" target="_blank"><img style="width:700px;" src="../img/webconf/wifi.png"></a>
 
 <a href="../img/webconf/regional.png" target="_blank"><img style="width:700px;" src="../img/webconf/regional.png"></a>

