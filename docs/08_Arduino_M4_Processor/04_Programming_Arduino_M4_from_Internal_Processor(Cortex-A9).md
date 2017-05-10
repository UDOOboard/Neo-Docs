# Arduino IDE
<span class="label label-warning">Heads up!</span> The compatible Arduino IDE to program the Arduino side of UDOO NEO from the internal Cortex A9 processor is Arduino IDE 1.6.5 r3. If you need to use the latest Arduino IDE go to ["Arduino M4 Processor: Programming Arduino from External PC"](https://www.udoo.org/docs-neo/Arduino_M4_Processor/Programming_Arduino_M4_from_External_PC.html).  
To develop sketches for M4 cores we provide the same way to program Arduino Uno.
You can use the internal Arduino IDE or connect the board and use an IDE running on external PC.

## Internal Arduino IDE
After you connected the board and you boot the desktop environment:

1. Start -> Programming -> Arduino IDE
2. File -> Examples -> Basics -> Blink
3. Click on "Upload" button.
4. Wait "Compiling sketch..." until "Upload is complete".

Now the sketch will be run on M4 side.

## Precompiled binary
It's possible to upload a precompiled binary firmware on the M4 using this command:

```bash
udooneo-m4uploader.sh <BINARY_PATH>
```
