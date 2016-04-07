## What is a headless device and why do I want to use my NEO this way?

<iframe width="560" height="315" src="https://www.youtube.com/embed/s4y_yZ802Ac" frameborder="0" allowfullscreen></iframe>

Typically a headless device is a computer that is used without the need of monitor, keyboard and mouse. Typical examples
of this configuration include:

* Web Servers;
* Network Attached Storage (NAS);
* Internet of Things Gateway or sensors; 
* Rovers or Drones. 

These configurations are pretty common and they are required when space and mobility are the first concerns.
To use your UDOO Neo in such ways you have plenty of options.

### USB Headless Device

This mode is particularly handy if you don't have any available network or if you wish to use your NEO with your computer, for example at hackatons. Thanks to its integrated USB Tethering module, UDOO NEO will create a USB Network Upon Connection with your computer.

To achieve this:

* Insert your Micro SD Card;
* Connect the Micro USB Cable to UDOO NEO and then to your PC: UDOO NEO will take its power from USB port;
* If its the first time you proceed this way, configure your PC as described in the <a href="../Basic_Setup/Usb_Direct_Connection.html">configure Usb Direct Connection</a>;
* Done! Your UDOO NEO is available at the address [192.168.7.2](http://192.168.7.2);
* You can use it via <a href="../docs-neo/Basic_Setup/Remote_Terminal_(SSH).html">SSH Remote Terminal</a>, <a href="../docs-neo/Basic_Setup/Remote_Desktop_(VNC).html">VNC Remote Desktop</a> or through [Web Control Panel](../docs-neo/Basic_Setup/Web_Control_Panel.html).

### Network Connected Headless Device

* Insert your Micro SD Card;
* Connect to your Network via Ethernet Cable;
* Turn on by applying power, either via Micro USB or DC-in.

Your UDOO NEO will be available in your Network.
You can now use it using SSH Remote Terminal, VNC Remote Desktop or through the Web Control Panel.

### Wireless Network Connected Headless Device

This mode is exactly the same as the one above, except that you use the integrated Wireless Network adapter. Please note that you must configure your Wireless Network accordingly. You can do it either via the Web Control Panel or via Network Manager. 
