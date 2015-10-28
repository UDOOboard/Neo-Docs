UDOO Neo replicates the same external pinout of Arduino Uno, extended with two parallel pin rows.
Internal pins are mechanically compatible with all the Arduino shields with Arduino Udo design.

All the hardware features block can be accessed and connected via processors pad with a editable muxing. So the functions are not fixed but can accessed on different pads.
Some of these pads are connected to external pins to allow the users to connect their stuff.

The external pinout is organized as follows and all pins are theoretically divided in two groups:
* Cortex A9
* Cortex M4 (Arduino like) 

<img style="width:400px; height:218px" src="../img/gionji/DOCS_internal_external_rows.JPG">

External pins (orange) are by default assigned to A9 in GPIO mode. So these pins can be controlled directly from the file system (Linux, Android).

Internal pins (blue) are assigned and controlled by Cortex M4 with the same dimensions of Arduino UNO pinout. All the arduino shields compatible can be plugged directly on UDOO Neo board.

Pins functions can dinamically shared ad boot beetwen A9 and M4 core at boot. By default we provide this kind of configuration.

### Pin Diagram
<img style="width:400px; height:218px" src="../img/gionji/DOCS_internal_pinout.PNG">

## Peripherials
UDOO Neo replicate also the same pin functions as: pwm (8 instead of 6), spi, i2c and uarts.

## Logic
Freescale iMX 6soloX is 3.3 Volts compliant. Analog reference voltage is GROUND and AREF is set to 3.3 Volts.
M4 architecture as more ADC and PWM resolution with more configuration mode.


