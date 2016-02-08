## General Purpose Input/Output (GPIO)
The GPIO general-purpose input/output peripheral provides dedicated general-purpose pins that can be configured as either inputs or outputs.
When configured as an output, it is possible to write to an internal register to control the state driven on the output pin. When configured as an input, it is possible to detect the state of the input by reading the state of an internal register. In addition, the GPIO peripheral can produce CORE interrupts. The GPIO is one of the blocks controlling the IOMUX of the chip.

More detailed information are available on the Chapter 30 of the [iMX 6SoloX Reference Manual](http://cache.freescale.com/files/32bit/doc/ref_manual/IMX6SXRM.pdf?fpsp=1&WT_TYPE=Reference%20Manuals&WT_VENDOR=FREESCALE&WT_FILE_FORMAT=pdf&WT_ASSET=Documentation&fileExt=.pdf).

### How to access GPIOs from Linux
It is possible to read and control digital input/output signals on the compatible Arduino pinout (blue pins). The GPIOs available from the Linux kernel are placed on the external pinout headers (in orange):

<a href="../img/gionji/DOCS_internal_external_rows.JPG" target="_blank"><img style="width:400px; " src="../img/gionji/DOCS_internal_external_rows.JPG"></a>

The internal pinout are assigned to the M4 core, the external one to the A9 core.


### Pinmuxing
Most of the pins are exported by default as GPIO; however the UDOO Neo CPU is able to assign more specialized tasks to the external pins. In the following two images it is reported a list of all the possible behaviours:

<a href="../img/gionji/DOCS_internal_pinout.PNG" target="_blank"><img style="width:800px;" src="../img/gionji/DOCS_internal_pinout.PNG"></a>

<a href="../img/gionji/DOCS_external_pinout.PNG" target="_blank"><img style="width:800px;" src="../img/gionji/DOCS_external_pinout.PNG"></a>

To change this configuration follow this [guide](http://www.udoo.org/docs-neo/Pinmuxing/Introduction_to_pinmuxing.html).

### GPIOs numbers and IDs

#### Export 
Before a GPIO can be used, it must be exported with the following command:

    echo GPIO_NUMBER > /sys/class/gpio/export

Please note `GPIO_NUMBER` is not the number written on the PCB. Instead, it is the number written in the round label close to the PCB number in the previous two images.
For example, if you want to control the pin 24 (PCB name) you should read `GPIO_25`.

`GPIO_NUMBER` can be calculated with the following relation:

    GPIO_NUMBER = ((BANK - 1) * 32 ) + ID

For example, if you want to export the GPIO1_IO_25;

    # GPIO1_IO_25 means BANK=1 and ID=25
    # GPIO_NUMBER = ((1 - 1) * 32 ) + 25 = 25
    echo 25 > /sys/class/gpio/export


#### Set direction
It is possible to switch a pin in *input* or *output* mode with the following commands:

    # set GPIO 25 to input
    echo in > /sys/class/gpio/gpio25/direction

    # set GPIO 25 to output
    echo out > /sys/class/gpio/gpio25/direction

Please note by default, for safety reasons, all pins are exported in input.

To verify the direction just read the same file:

    cat /sys/class/gpio/gpio25/direction


#### Write value
To write a low or high value on a GPIO you need to write `0` or `1` in the *value* file:

    # set GPIO 25 to low value - 0 volts
    echo 0 > /sys/class/gpio/gpio25/value

    # set GPIO 25 to high value - 3.3 volts
    echo 1 > /sys/class/gpio/gpio25/value

In order to set the value, the GPIO must be in the `out` direction.


#### Read value
If the direction is set to `in` it is possible to read the GPIO value reading the same file:

    /sys/class/gpio/gpio25/value

If the direction is set to `out` and you try to read the value, is not guaranteed that the value is coherent with the voltage found on the external pinout.

