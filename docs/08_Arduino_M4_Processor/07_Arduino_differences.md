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

<span class="label label-warning">Heads up!</span> When you have a sketch that sends data to the internal serial device (Serial) it has to be read by the A9 part otherwise it will slow down the execution: it will time out every Serial.println().

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
Refer the page [Arduino String Issue](!Debugging_&_Troubleshooting/Arduino_String_issue) for further information about *Strings* issues.

## I2C/Wire

UDOO Neo M4 Processor has 2 I2C buses wired to the pinout headers and consequentially have 2 **Wire** objects:
- **Wire**: for Brick Connector and SCL/SDA Pins [I2C-2]
- **Wire1**: for Motion Sensors (Accelerometer,Magnetometer,Gyroscope) [I2C-4]

Be careful and double check when calling `Wire.begin()` or `Wire1.begin()` in
sketches or libraries. Also check out to have [I2C-2 disabled on A9][dte] if you use *Wire*, and [I2C-4 disabled on A9][dte] if you use *Wire1*.

[dte]: ../Cookbook_Linux/Device_Tree_Editor.html
