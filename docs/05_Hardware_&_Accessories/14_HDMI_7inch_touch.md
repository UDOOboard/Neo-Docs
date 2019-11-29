The [7inch HDMI/USB Display/Touch](https://shop.udoo.org/catalog/product/view/id/93/s/7inch-hdmi-usb-display-touch/category/3/) is now compatible also with **UDOO NEO**.

By default, UDOO Neo displays the graphical user interface on the micro-HDMI port, but since the micro-HDMI is configured to work with quite all the monitor/TV HDMI, to make this accessories work you need to substitute same files in your UDOObuntu distro.

The **7inch HDMI/USB Display/Touch** use:
* **HDMI** for the Display
* **USB-to-microUSB** to power up the Display and use the Touch input.

<span class="label label-warning">Heads up!</span> You need a `micro-HDMI to HDMI` cable or adapter to use the 7inch HDMI display.

## Preparation (optional)

To support the *7inch HDMI/USB Display/Touch* you need to use a file that set the proper resolution, timing and other parameters for this display.
This new file will disable the original UDOObuntu file that supports default TV/monitor displays.
We suggest making a backup of all the `hdmi` related files in the `/boot/dts` directory.

    for f in /boot/dts/imx6sx-udoo-neo-*hdmi*.dtb; do cp -- "$f" "$f".bak; done

If you want to come back work with a standard TV/monitor you need to revert these files.

## Instructions

Download the package from here:   [udoo-neo_7HDMItouch_dtbs.tar.gz](https://udoo.org/download/files/UDOO_NEO/tools/udoo-neo_7HDMItouch_dtbs.tar.gz​​)  
sha1 checksum: `cde95a301d58b86aa086743170fe0d7f8adcd7d2`

Extract the *udoo-neo_7HDMItouch_dtbs.tar.gz* package inside the `/boot/dts/` folder of the UDOObuntu microSD, substituting the files inside. You can use this command:

    tar xzvf udoo-neo_7HDMItouch_dtbs.tar.gz -C /boot/dts/

Check the value of the `video_output` variable in the file `/boot/uEnv.txt`. Need to be set as `video_output=hdmi` to work with the 7 inch HDMI Display.

Connect the micro-HDMI to HDMI cable, the USB cable and turn on the backlight switch behind the display.

Reboot the UDOO NEO now to work with the 7 inch HDMI Display.
