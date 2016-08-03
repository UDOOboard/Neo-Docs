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


### MCC

MCC (*Multi-Core Communication*) is a protocol that emulate a serial port between the two cores. The driver uses a shared memory in DDR that it's used for mutual communication. It's implementation has some limitation:

* When launching a sketch that uses "`Serial.print()`" it's important to keep open the `/dev/ttyMCC` device, otherwise the M4 side will timeout at each call, slowing the sketch.
* Don't use "`Serial.write()`", just `print` and `println` methods.


## PWM
There is a little difference for PWM pins declaration. If you use a PWM pins you don't need to declare with `pinMode(XX, OUTPUT)`.


## ADC (analog inputs)
Arduino UNO analogic inputs have a resolution of 10 bit, so `analogRead()` returns values between 0-1023.

UDOO Neo has 12-bit ADC capabilities. `analogRead()` will return values between 0 and 4095.


## Arduino sketch storage
On Arduino boards, the sketch is saved in a flash memory.

On UDOO Neo, the sketch is persisted on the SD card. When the board is powered on, the sketch is loaded from the `/var/opt/m4/m4last.fw` file and executed on the M4 core.

## Interrupts
UDOO NEO has interrupt capability on all digital pins, like Arduino Due.

For now, UDOO NEO does **NOT** manage:
 - **Interrupts()** / **NoInterrupts()**: functions for disabling/reenabling interrupts at the same time. Alternatively you can use *attachInterrupt()*/*detachInterrupt()* on all the pins one by one.

## Strings
Refer the page [Arduino String Issue](../Debugging_&_Troubleshooting/Arduino_String_issue.html) for further information about *Strings* issues.

<!--

## String object
[coming soon: frafer]

## PWM
[coming soon: frafer]

## ADC
[coming soon: frafer]

-->
