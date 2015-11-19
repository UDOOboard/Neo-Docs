### What is USB Direct Connection

UDOO NEO's Micro USB port can be used both to power up the board and to connect it to our computer.

Connecting UDOO NEO to your computer will result in:

* UDOO NEO powering on, taking power from its USB Port
* A storage device will be available, containing UDOO NEO'S Kernel and DTB files, together with an offline documentation and quick start guide
* UDOO NEO will establish a network connection with your Computer, allowing to use it in [headless mode](../Getting_Started/Use_as_a_headless_IoT_Device.html)

In order to use UDOO NEO'S USB Connection on Mac and Windows, you must install few drivers first as described below:

## Enable USB Direct Connection: Installing Drivers

### Installing Drivers on Mac OS X 

* Install both of this drivers: [Serial](../driversandtools/Mac%20USB%20Drivers/EnergiaFTDIDrivers2.2.18.pkg) and [Network](../driversandtools/Mac%20USB%20Drivers/HoRNDIS.pkg)
* Reboot your MAC
* UDOO NEO will be available at [192.168.7.2](http://192.168.7.2)

### Installing Drivers on Windows

* Connect UDOO NEO via Micro USB Cable to PC, eventually you'll get the following message:

<img style="width:500px;" src="../img/win_drv/wd_01.jpg">

* Right click on Computer and select Manage. From System Tools, select Device Manager. It will show a list of devices currently connected with the development PC. In the list, RNDIS Kitl can be seen with an exclamation mark implying that driver has not been installed.

<img style="width:500px;" src="../img/win_drv/wd_02.jpg">

* Right click on it and select Update Driver Software... When prompted to choose how to search for device driver software, choose Browse my computer for driver software.

* Browse for driver software on your computer will come up. Select Let me pick from a list of device drivers on my computer.

* A window will come up asking to select the device type. Select Network adapters, as RNDIS emulates a network connection.

<img style="width:500px;" src="../img/win_drv/wd_03.jpg">

* In the Select Network Adapter window, select Microsoft Corporation from the Manufacturer list. Under the list of Network Adapter:, select Remote NDIS compatible device.

<img style="width:500px;" src="../img/win_drv/wd_04.jpg">

* The RNDIS Kitl device is now installed and ready for use.

<img style="width:500px;" src="../img/win_drv/wd_05.jpg">

## Use USB Direct Connection to control UDOO NEO

* Upon successful connection, UDOO NEO will be available at the address [192.168.7.2](http://192.168.7.2)
* You can establish a <a href="../Basic_Setup/Remote_Terminal_(SSH).html">SSH Remote Terminal</a> using the address 192.168.7.2 with credentials udooer/udooer
* You can establish a <a href="../Basic_Setup/Remote_Desktop_(VNC).html">VNC Remote Desktop</a> Session using the address 192.168.7.2 and port 5900 (192.168.7.2:5900). The default password is udooer.
* You can configure UDOO NEO via the [Web Control Panel](../Basic_Setup/Web_Control_Panel.html)


