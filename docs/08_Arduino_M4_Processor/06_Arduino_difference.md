UDOO Neo is based on iMX 6SoloX core. Its architecture is quite different from a standard Arduino micro a little bit complex.
To let it closer to Arduino Uno usage we decided to implements some modification to the libraries.
These are the main difference.

## Serials
In Arduino Uno the Serial object implements an UART serial port available on external pins 0 / 1 and on the USB port by an usb to serial converter. So the same signals are available in two places.

In UDOO Neo there are two different object for one of each places.

* Serial0 can read and write data on pins 0 / 1 of the external pinout.
* Serial can read and write data directly to A9 core

On the A9 core is possible to access this serial on device /dev/ttyMCC .

## String object
[coming soon: frafer]

## PWM
[coming soon: frafer]

## ADC
[coming soon: frafer]
