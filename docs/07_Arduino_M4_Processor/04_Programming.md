# Arduino IDE
To develop sketches for M4 cores we provide the same way to program Arduino Uno.
We can use the internal Arduino IDE or connect the board and use an IDE running on external PC.

<div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Warning!</span>
  Udoo Neo works ONLY with Arduino IDE version 1.6.5. Down load it from <a href="https://www.arduino.cc/en/Main/OldSoftwareReleases#previous">here!</a>
</div>

## Internal Arduino IDE
After you connected the board and you boot the desktop environment:

1. Start -> Programming -> Arduino IDE
2. File -> Examples -> Basics -> Blink
3. Click on "Upload" button.
4. Save the sketch if you wantpro
5. Wait "Compiling sketch..." until "Uploadin complete".

Now the sketch will be run on M4 side.

## Precompiled binary
It's possible to upload a precompiled binary firmware on the M4 using this command:

```bash
udooneo-m4uploader.sh <BINARY_PATH>
```

# External Arduino IDE

<span class="label label-warning">Heads up!</span>For external programming the serial monitor doesn’t work yet.

### Connect UDOO NEO

To use the External Arduino IDE follow the instructions below:

* Connect UDOO NEO via Micro USB Cable to your PC

* In order to use UDOO NEO'S USB Connection on Mac and Windows, you must install few drivers first as described [here](../Basic_Setup/Usb_Direct_Connection.html).

### Install UDOO FOTA

NOTE: If you use UDOOBuntu2 BETA 5 or previous versions you need to install the UDOO FOTA (Firmware over the Air) Server Package while if you use UDOOBuntu2 BETA 6 or later versions skip this step.

* To Install the UDOO FOTA you need to connect the board to internet using it either as a Computer or a Headless Device:

1. [Use as a Headless Device](../Getting_Started/Use_as_a_headless_IoT_Device.html)

2. [Use as a Computer](../Getting_Started/Use_as_a_Computer.html)

* Once you board is connected to internet open a terminal and type:

```bash

sudo apt-get update
sudo apt-get install udoofota-server

```

### Install and configure the Arduino IDE

<div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Warning!</span>
  Udoo Neo works ONLY with Arduino IDE version 1.6.5. Down load it from <a href="https://www.arduino.cc/en/Main/OldSoftwareReleases#previous">here!</a>
</div>

* From your computer go to the Arduino website and downlaod the 1.6.5 version of the IDE: https://www.arduino.cc/en/Main/OldSoftwareReleases#previous

* Select the OS you have in your computer and download the IDE then install it

* Open the IDE, go to File -> Preferences and add this link to Additional Boards Manager URLs: https://udooboard.github.io/arduino-board-package/package_udoo_index.json , then click Ok.

<img width="550" height="447" src="../img/ext_ard_07.png">


* Go to Tools -> Boards and open the Board Manager.

* Wait few seconds 'till the end of the "index download" then look for UDOO NEO (iMX6 SoloX) and install it.

<img width="550" height="415" src="../img/xt_ard_08.png">


* Now in Tools -> Boards you should see the UDOO NEO (Cortex M4), if so Click on it. Leave the Tools -> Ports unselected.

<img width="550" height="587" src="../img/ext_ard_09.png">

* Done, now you're ready to use your UDOO NEO with the Arduino IDE installed on your Computer.
* 
**N.B:** in order to get it working on Linux 64 bit you need compatibility packages:
$ sudo apt-get -y install lib32z1 lib32ncurses5 lib32bz2-1.0



