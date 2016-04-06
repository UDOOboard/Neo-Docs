To develop sketches for M4 cores we provide the same way to program Arduino Uno.
We can use the internal Arduino IDE or connect the board and use an IDE running on external PC.

## Internal Arduino IDE
After you connected the board and you boot the desktop environment:

1. Start -> Programming -> Arduino IDE
2. File -> Examples -> Basics -> Blink
3. Save the sketch if you want
4. Click on "Upload" button.
5. Wait "Compiling sketch..." until "Upload complete".

Now the sketch will be run on M4 side.


## Precompiled binary
It's possible to upload a precompiled binary firmware on the M4 using this command:

    udooneo-m4uploader.sh <BINARY_PATH>

## External Arduino IDE

### Connect UDOO Neo

To use an External Arduino IDE (eg., on your computer) follow the instructions below:

* Connect UDOO Neo via Micro USB Cable to your PC;
* Installed USB drivers as described [here](../Basic_Setup/Usb_Direct_Connection.html).

### Install and configure the Arduino IDE

<span class="label label-warning">Heads up!</span> You **must** use exactly Arduino IDE 1.6.5. For the moment, other versions are not supported.

* From your computer go to the Arduino website and [downlaod the 1.6.5 version of the IDE](https://www.arduino.cc/en/Main/OldSoftwareReleases#previous)
* Select the OS you have in your computer and download the IDE then install it
* Open the IDE, go to File -> Preferences and add this link to Additional Boards Manager URLs: https://udooboard.github.io/arduino-board-package/package_udoo_index.json , then click Ok.

<img width="550" height="447" src="../img/ext_ard_07.png">

* Go to Tools -> Boards and open the Board Manager.
* Wait few seconds 'till the end of the "index download" then look for UDOO Neo (iMX6 SoloX) and install it.

<img width="550" height="415" src="../img/xt_ard_08.png">

* Now in Tools -> Boards you should see the UDOO Neo (Cortex M4), if so Click on it. Leave the Tools -> Ports unselected.

<img width="550" height="587" src="../img/ext_ard_09.png">

* Done, now you're ready to use your UDOO Neo with the Arduino IDE installed on your Computer.
