By default, UDOO Neo displays the graphical user interface on the micro-HDMI port. 
LVDS screens can be connected to the `CN3` port. Before the screen can be used, it must be enabled as it follows. You cannot use the HDMI and the LVDS7 video outputs simultaneously.

<div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Warning!</span>
  Make sure you are powering your UDOO Neo with a <a href="http://shop.udoo.org/eu/accessories/power-adapter-eu.html">12V power supply</a> when using LVDS screens.
</div>


## 7-inches LVDS panel
The [7-inches UDOO LVDS screen](http://shop.udoo.org/video-kit-7-touch-for-neo.html) is compatible with UDOO Neo. If you previously bought one for the UDOO Quad/Dual, you just need to buy a new (smaller) cable and keep the same screen.


## Switch video output from HDMI to LVDS
After you connect your LVDS screen to the `CN3` connector, you must tell UDOO Neo to use the LVDS panel to draw the GUI. This can be done in several ways:


#### Option 1: you have an HDMI monitor and mouse/keyboard
If you have an HDMI screen connected to UDOO Neo, open a terminal with the link on the desktop. Then you can switch the main video output from HDMI to LVDS7 by typing:

    sudo udooscreenctl set lvds7

(default password, if you did not change it, is *udooer*)

You can revert this change by typing:

    sudo udooscreenctl set hdmi


#### Option 2: you can connect via VNC or SSH
If you can [connect to your board via VNC](../docs-neo/Basic_Setup/Remote_Desktop_(VNC).html) or via SSH (using the USB, WiFi or Ethernet connection), you can follow the steps explained in the previous section.


#### Option 3: you have neither HDMI nor network
If you cannot connect to your board via the network (VNC or SSH) and you have no HDMI screen, you can enable the LVDS display port editing a file in the UDOO Neo SD card. Put the flashed SD card in your computer. If your computer has no SD card reader, you can connect the UDOO Neo to your computer via the micro-USB port.

A small FAT partition labelled *boot* will appear:

<img style="width:200px; " src="../img/gionji/DOCS_lvds_via_usb_01.PNG">

<img style="width:300px; " src="../img/gionji/DOCS_lvds_via_usb_02.PNG">

Open the file named `uEnv.txt` contained in the partition.

<span class="label label-warning">Heads up!</span> The file must be saved with Unix-like line endings:

 * Windows users can use the free [Notepad++](https://notepad-plus-plus.org/download/) text editor to safely edit the file.
 * Mac OS X users can use the free [TextWrangler](http://www.barebones.com/products/textwrangler/) text editor to safely edit the file.
 * Linux users can use their favourite text editor (gedit, vim, nano) without concerns.

Open the file and you will find this line:

    video_output=hdmi

<img style="width:800px; " src="../img/gionji/DOCS_lvds_via_usb_03.PNG">

Substitute the word `hdmi` with `lvds7`:

    video_output=lvds7

<img style="width:800px; " src="../img/gionji/DOCS_lvds_via_usb_04.PNG">

Save the file, eject the boot partition and restart the board.

