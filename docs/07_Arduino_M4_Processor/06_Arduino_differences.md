The UDOO Neo architecture is quite different from a standard Arduino microcontroller.

In order to make it closer to the Arduino UNO usage we decided to implement some modifications to the libraries. These are the main difference.


## Logic levels
Arduino UNO logic works on 5V.

UDOO Neo instead works at 3.3V. As consequence, the analog reference voltage is GROUND and AREF is set to 3.3V.


## Serial ports
In Arduino UNO the `Serial` object implements an UART serial port available both on the pins `0` and `1` and on the USB port (via an internal USB-to-serial converter). In this way, the same signals are available in two places.

In UDOO Neo there are two different serial ports:

* `Serial0` can read and write data on pins `0` and `1` of the external pinout.
* `Serial` is the internal serial port "connected" to the A9 core, accessible via `/dev/ttyMCC`.


## ADC (analog inputs)
Arduino UNO analogic inputs have a resolution of 10 bit, so `analogRead()` returns values between 0-1023.

UDOO Neo has 12-bit ADC capabilities. This will return values from `analogRead()` between 0 and 4095.


## Arduino sketch storage
On Arduino boards, the sketch is saved in a flash memory.

On UDOO Neo, the sketch is persisted on the SD card. When the board is powered on, the sketch is loaded from the `/var/opt/m4/m4last.fw` file and executed on the M4 core.


<!--

## String object
[coming soon: frafer]

## PWM
[coming soon: frafer]

## ADC
[coming soon: frafer]

-->