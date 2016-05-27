## Overview

UDOO Neo features a Serial Debug Console available on the external pinout which is very useful to have a complete debug console starting from the boot process.

Connecting via serial will practically result in a shell console, the same as the one you’ll obtain through SSH connection http://en.wikipedia.org/wiki/Secure_Shell.

You can find a useful accessory in the UDOO shop to easy exploit the Serial Debug Console of UDOO Neo: the [USB-to-TTL/Serial Debug Module for UDOO NEO](http://shop.udoo.org/accessories/usb-serial-debug-module-for-neo.html).

The Serial Debug Console is available through UART 1 over the external pinout header `J7` on two pins, `46` and `47` (PCB names). You can find more info useful to locate the pins in the [UART Serial Ports](../Hardware_\&_Accessories/UART_serial_ports.html) section.

If you haven't the official UDOO NEO accessory module you can use a any other standard USB-to-TTL/Serial dongle available in the market.

## Connecting via Serial

Choose the OS you use.

<div>
 <ul id="adc-examples" class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active"><a href="#windows-example" aria-controls="windows" role="tab" data-toggle="tab">Windows</a></li>
  <li role="presentation"><a href="#mac-example" aria-controls="mac" role="tab" data-toggle="tab">Mac OS X</a></li>
  <li role="presentation"><a href="#linux-example" aria-controls="linux" role="tab" data-toggle="tab">Linux</a></li>
 </ul>

 <div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="windows-example">

## Connecting via Serial from Windows

* Download and install the serial adapter Driver. For the official `USB-to-Serial debug module fo UDOO NEO` you can find Driver here:
<a href="http://www.silabs.com/products/mcu/pages/usbtouartbridgevcpdrivers.aspx">http://www.silabs.com/products/mcu/pages/usbtouartbridgevcpdrivers.aspx</a>

* Install the proper version for your Operating system:
CP210xVCPInstaller_x86.exe for 32-bit systems
CP210xVCPInstaller_x64.exe for 64-bit system

* How to define your Windows version:
<a href="http://windows.microsoft.com/en-us/windows7/32-bit-and-64-bit-windows-frequently-asked-questions">http://windows.microsoft.com/en-us/windows7/32-bit-and-64-bit-windows-frequently-asked-questions</a>

* Download and install a software called putty
<a href="http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html">http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html</a>

* Open putty and configure it as follow:
Connection type <strong>“serial”</strong>
Port: <strong>“COM3”</strong> (please note that this value may be different, try to use COM4 if COM3 is not working)
Speed: <strong>“115200”</strong>
Save it as <strong>“Udoo-serial”</strong> for future uses.

<br />

<img class="alignnone size-full wp-image-2510" src="../img/udooserial1win.png" alt="udooserial1win" width="466" height="448" style="margin-left: 30px;"/>

<br />
<br />

* Connect the serial port of UDOO DUAL/QUAD (CN6) to your PC using the micro USB cable.

* Power up UDOO DUAL/QUAD

* Click Open

* You’re in! You’ll be able to see the startup process and access to the remote shell console on UDOO DUAL/QUAD.

<br />

<img class="alignnone size-full wp-image-2511" src="../img/udoowin2.png" alt="udoowin2" width="500" height="314" style="margin-left: 30px;"/>

<br />

</div>
<div role="tabpanel" class="tab-pane" id="linux-example"

## Connecting via Serial from Linux

* Connect the serial port of UDOO DUAL/QUAD (CN6) to your PC using the micro USB cable.

* Type

```bash

 dmesg

 ```

* You should see this line at the end

```bash

 usb 2-2.1: cp21x converter now attached to tty

 ```

<img class="alignnone size-full wp-image-2512" src="../img/Linux1.png" alt="Linux1" width="500" height="355" />

* Install minicom:

```bash

sudo apt-get update
sudo apt-get install minicom

```

* Open Minicom and configure it <strong>(only the first time)</strong> using the following command:

```bash

 sudo minicom -sw

 ```

* Go to <strong>“Serial port setup”</strong> and edit as follow:
Serial Device: /dev/ttyUSB0 (type a key)
Hardware Flow Control: No (type f key)
Software Flow Control: No (type g key)

<img class="alignnone size-full wp-image-2513" src="../img/Linux2.png" alt="Linux2" width="500" height="355" />

* Press exit and <strong>"Save setup as dfl"</strong>

* Exit from Minicom

* Let’s give proper access permissions to serial port with:

```bash

 sudo chmod 666 /dev/ttyUSB0

 ```

* Now we can start listening with:

```bash

 sudo minicom -w

 ```

* Power cycle UDOO DUAL/QUAD to see the boot process and connect it to serial console shell


</div>
<div role="tabpanel" class="tab-pane" id="mac-example">

## Connecting via Serial from Mac

* Download and install the serial adapter Driver. For the official `USB-to-Serial debug module fo UDOO NEO` you can find Driver here:
<a href="http://www.silabs.com/products/mcu/pages/usbtouartbridgevcpdrivers.aspx">http://www.silabs.com/products/mcu/pages/usbtouartbridgevcpdrivers.aspx</a>

* Connect the serial port of UDOO DUAL/QUAD (CN6) to your PC using the micro USB cable.

* Download and install Serial Tools <a href="https://itunes.apple.com/it/app/serialtools/id611021963">https://itunes.apple.com/it/app/serialtools/id611021963</a> or directly from the Apple Store

* Open Serial Tools, and change the following parameters:
Serial Port: <strong>“SLEB_USBtoUART”</strong>
Baud rate <strong>“115200”</strong>

<img class="alignnone size-full wp-image-2514" src="../img/Mac1.png" alt="Mac1" width="500" height="142" />

* Hit connect, and here you go!

<img class="alignnone size-full wp-image-2515" src="../img/Mac2.png" alt="Mac2" width="500" height="207" />

</div>
</div>
</div>
<script>
$('#adc-examples a').click(function (e) {
e.preventDefault()
$(this).tab('show')
})
</script>
