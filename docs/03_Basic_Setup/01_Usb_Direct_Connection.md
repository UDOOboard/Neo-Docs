### What is USB Direct Connection

UDOO NEO's Micro USB port can be used both to power up the board and to connect it to our computer.

Connecting UDOO NEO to your computer will result in:

* UDOO NEO powering on, taking power from its USB Port
* A storage device will be available, containing UDOO NEO'S Kernel and DTB files, together with an offline documentation and quick start guide
* UDOO NEO will establish a network connection with your Computer, allowing to use it in [headless mode](!Getting_Started/Use_as_a_headless_IoT_Device)

In order to use UDOO NEO'S USB Connection on Mac and Windows, you must install few drivers first as described below:

## Enable USB Direct Connection: Installing Drivers

Choose your OS to install the proper driver to make the USB Direct Connection works.

<div>
 <ul id="driver-examples" class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active"><a href="#linux-example" aria-controls="linux" role="tab" data-toggle="tab">Linux</a></li>
  <li role="presentation"><a href="#windows-example" aria-controls="windows" role="tab" data-toggle="tab">Windows</a></li>
  <li role="presentation"><a href="#macosx-example" aria-controls="macosx" role="tab" data-toggle="tab">Mac OS X</a></li>
 </ul>

 <div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="linux-example">

Linux doesn't need a specific driver installation to make USB connection work properly. Everything should work out-of-the-box.

  </div>
  <div role="tabpanel" class="tab-pane" id="windows-example">

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

  </div>
  <div role="tabpanel" class="tab-pane" id="macosx-example">

* Install both of these drivers:
  * [Serial](https://www.udoo.org/docs-neo/driversandtools/Mac%20USB%20Drivers/EnergiaFTDIDrivers2.2.18.pkg)
  * [HoRNDIS Network](http://joshuawise.com/horndis#available_versions): download and install the proper driver for your Mac OS X version from the official page.  

* Reboot your MAC
* UDOO NEO will be available at [192.168.7.2](http://192.168.7.2)

  </div>
 </div>
</div>
<script>
$('#driver-examples a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>

## Use USB Direct Connection to control UDOO NEO

* Upon successful connection, UDOO NEO will be available at the address [192.168.7.2](http://192.168.7.2)
* You can establish a <a href="../Basic_Setup/Remote_Terminal_(SSH).html">SSH Remote Terminal</a> using the address `192.168.7.2` with credentials user `udooer` and psw `udooer`
* You can establish a <a href="../Basic_Setup/Remote_Desktop_(VNC).html">VNC Remote Desktop</a> Session using the address `192.168.7.2` and port `5900` (`192.168.7.2:5900`). The default password is `udooer`.
* You can configure UDOO NEO via the [Web Control Panel](!Basic_Setup/Web_Control_Panel) directly from your browser.

## Troubleshooting

* If your UDOO NEO doesn't appear as a mass storage or is not recognized by your MAC\Pc, this may be due to insufficient power output from the USB port it is attached to. Therefore, try to:

- Change the USB port it is plugged into, to be on the safe side plug UDOO NEO to USB 3.0
- If you're on a Laptop, disable USB Power Saving mode
- Try to use a powered USB HUB
