## Top Men debugging
Enabling the MQX debug serial port, it is possible to  to see more detailed information on the running code.

[Top Men](https://www.youtube.com/watch?v=yoy4_h7Pb3M) can use the MQX debug serial available on the pins `44` and `45` of the `J7` connector after enabling the debug port, adding the line

    #define MQX_LOG

at the begin of the Arduino sketch.


## Old school debugging
It is possible to use following old-school debugging techniques.

### Serial port
Use the [internal or the external serial port](../Arduino_M4_Processor/Communication.html) to dump on Linux debug messages.

### Pin 13 LED
This is a very dirty way to debug, but useful for simple sketches since it takes no time to setup.

Just control the digital pin 13 to get information on code running on M4 sketch.
