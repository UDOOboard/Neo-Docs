# LVDS Panels

## 7 inches LVDS panel
First of all, make sure you are powering UDOO NEO with [a 12V power supply](http://shop.udoo.org/eu/accessories/power-adapter-eu.html).

To configure UDOO NEO for use of 7" panels you need to modify a file located in the /boot directory.
You can do it two ways:
* Accessing a console (connected to HDMI, connected in SSH, connected via uart serial)
* Connected with microUSB port

### Boot UDOO NEO connected to HDMI, keyboard
Open a Terminal. In the /boot directory there's a file named uEnv.txt, if not create it.

#### Very very important!!!
To open the file you need to use an editor like [Notepad++](https://notepad-plus-plus.org/download/) beacause the standard Windows Notepad uses wrong new line character and UDOO NEO won't recognize it.

Open the file and you'll find this line:

``` bash
fdt_file=dts/imx6sx-udoo-neo-hdmi-m4.dtb
```

Substitute the word "hdmi" with the word "lvds7" in this way:

``` bash
fdt_file=dts/imx6sx-udoo-neo-lvds7-m4.dtb
```

Restart the board.

Now the video should appaire in the LVDS display. You cannot use the HDMI and the LVDS7 at the same time.


### Boot UDOO NEO connected microUSB to PC
In the /boot partition there's a file named uEnv.txt, if not create it.

#### Very very important!!!
To open the file you need to use an editor like [Notepad++](https://notepad-plus-plus.org/download/) beacause the standard Windows Notepad uses wrong new line character and UDOO NEO won't recognize it.

<img style="width:200px; " src="../img/gionji/DOCS_lvds_via_usb_01.PNG">

<img style="width:300px; " src="../img/gionji/DOCS_lvds_via_usb_02.PNG">

Open the file and you'll find this line:

``` bash
fdt_file=dts/imx6sx-udoo-neo-hdmi-m4.dtb
```

<img style="width:800px; " src="../img/gionji/DOCS_lvds_via_usb_03.PNG">

Substitute the word "hdmi" with the word "lvds7" in this way:

``` bash
fdt_file=dts/imx6sx-udoo-neo-lvds7-m4.dtb
```

<img style="width:800px; " src="../img/gionji/DOCS_lvds_via_usb_04.PNG">

Restart the board.

Now the video should appaire in the LVDS display. You cannot use the HDMI and the LVDS7 at the same time.
