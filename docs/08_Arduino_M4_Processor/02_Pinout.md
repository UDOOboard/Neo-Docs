UDOO Neo replicates the same external pinout of Arduino UNO, extended with two parallel pin rows.
Internal pins are mechanically compatible with all the Arduino shields with Arduino UNO design.

All the hardware features can be accessed and connected via processors pad with an editable muxing. So the functions are not fixed but can by accessed on different pads.
Some of these pads are connected to the external pins, allowing the users to connect their own stuff.

The external pinout is organized as follows, all pins are conceptually divided in two groups:
* Cortex A9
* Cortex M4 (Arduino like) 

<a href="../img/gionji/DOCS_internal_external_rows.JPG" target="_blank"><img style="width:400px;" src="../img/gionji/DOCS_internal_external_rows.JPG"></a>

External pins (in orange) are by default assigned to A9 in GPIO mode. So these pins can be controlled directly from the `sysfs` file system in Linux and Android.

Internal pins (in blue) are assigned and controlled by Cortex M4. All the compatible Arduino shields can be plugged directly on the UDOO Neo board.

Pins functions can be dynamically shared at boot time between the A9 and M4 cores. By default we provide *split* configuration.


### Pinout diagram

<a href="../img/gionji/DOCS_internal_pinout.PNG" target="_blank"><img style="width:400px;" src="../img/gionji/DOCS_internal_pinout.PNG"></a>


## Arduino peripherals
UDOO Neo replicates also the same pin functions of Arduino UNO: PWMs (8 instead of 6), SPI, I2C and UARTs.


## Pin logic
Freescale iMX 6soloX is 3.3 Volts compliant. Analog reference voltage is GROUND and AREF is set to 3.3 Volts.
The M4 architecture has more ADC and PWM resolution (compared to Arduino UNO) with more configuration mode.

