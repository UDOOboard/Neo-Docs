## Arduino IDE
To develop sketches for M4 cores we provide the same way to program Arduino Uno.
We can use the internal Arduino IDE or connect the board and use an IDE running on external PC.

### Internal Arduino IDE
After you connected the board and you boot the desktop environment:

1. Start -> Programming -> Arduino IDE
2. File -> Examples -> Basics -> Blink
3. Click on "Upload" button.
4. Save the sketch if you want
5. Wait "Compiling sketch..." until "Uploadin complete".

Now the sketch will be run on M4 side.


## Precompiled binary
It's possible to upload a precompiled binary firmware on the M4 using this command:

```bash
udooneo-m4uploader.sh <BINARY_PATH>
```

### External Arduino IDE
External programming mode will be available on half November 2015.
