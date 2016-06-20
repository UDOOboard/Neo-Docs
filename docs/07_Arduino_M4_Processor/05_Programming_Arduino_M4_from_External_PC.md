# External Arduino IDE

<span class="label label-warning">Heads up!</span>A microSD with a with UDOOBuntu2 have to be up and running to program the Arduino&trade; M4 from an external PC. Expecially the USB direct Connection(USB OTG Gadget) and the UDOO FOTA server are the software needed.

<span class="label label-warning">Heads up!</span>For external programming the serial monitor doesn’t work yet.

## Connect UDOO NEO

To use the External Arduino IDE follow the instructions below:

* Connect UDOO NEO via Micro USB Cable to your PC

* In order to use UDOO NEO'S USB Connection on Mac and Windows, you must install few drivers first as described in the [USB Direct Connection](../Basic_Setup/Usb_Direct_Connection.html).

## Install UDOO FOTA

<span class="label label-warning">Heads up!</span>NOTE: If you use UDOOBuntu2 BETA 5 or previous versions you need to install the UDOO FOTA (Firmware over the Air) Server Package while if you use UDOOBuntu2 BETA 6 or later versions skip this step.

* To Install the UDOO FOTA you need to connect the board to internet using it either as a Computer or a Headless Device:

1. [Use as a Headless Device](../Getting_Started/Use_as_a_headless_IoT_Device.html)

2. [Use as a Computer](../Getting_Started/Use_as_a_Computer.html)

* Once you board is connected to internet open a terminal and type:

```bash

sudo apt-get update
sudo apt-get install udoofota-server

```

### Install and configure the Arduino IDE

* From your computer go to the Arduino website and downlaod the last Arduino IDE version (currently 1.6.9): [Arduino IDE 1.6.9](https://www.arduino.cc/en/Main/Software)

* Select the OS you have in your computer and download the IDE then install it

* Open the IDE, go to `File -> Preferences` and add this link to `Additional Boards Manager URLs` and then click `OK`:  

      https://udooboard.github.io/arduino-board-package/package_udoo_index.json

<img width="550" height="447" src="../img/ext_ard_07.png">

<br />
<br />

* Go to `Tools -> Boards` and open the `Board Manager`.

* Wait few seconds 'till the end of the "index download" then look for `UDOO NEO (iMX6 SoloX) by UDOO Team` and install it.

<img width="550" height="415" src="../img/xt_ard_08.png">

<br />
<br />

* Now in `Tools -> Boards` you should see the `UDOO NEO (Cortex M4)`, if so Click on it. Leave the `Tools -> Ports` unselected.

<img width="550" height="587" src="../img/ext_ard_09.png">

* Done, now you're ready to use your UDOO NEO with the Arduino IDE installed on your Computer as you usually do with a standard Arduino. Press the button `Upload` to load a sketch.

**N.B:** in order to get it working on `Linux 64bit` you need compatibility packages:  

      $ sudo apt-get -y install lib32z1 lib32ncurses5 lib32bz2-1.0

## Upload a sketch over Network

You could also upload sketch Over Network from an external PC using the functionalities of the [UDOO FOTA (Firmware over the Air) Server](https://github.com/UDOOboard/udoofota) Package installed on the UDOObuntu 2 distro. You just need to know the IP Address of UDOO NEO and be in its same network. The Arduino Board Manager of UDOO NEO installs the `udooclient` in you external PC, this little tool interacts with the FOTA server running on the UDOO NEO.  

You need to modify a file in your Arduino package that is named `platform.txt`. For example, in Arduino IDE 1.6.9 the file is located here:

<div>
 <ul id="adc-examples" class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active"><a href="#windows-example" aria-controls="windows" role="tab" data-toggle="tab">Windows</a></li>
  <li role="presentation"><a href="#mac-example" aria-controls="mac" role="tab" data-toggle="tab">OS X</a></li>
  <li role="presentation"><a href="#linux-example" aria-controls="linux" role="tab" data-toggle="tab">Linux</a></li>
 </ul>

 <div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="windows-example">

    C:\Users\<user_name>\AppData\Local\Arduino15\packages\UDOO\hardware\solox\<version_number>\platform.txt

  </div>
  <div role="tabpanel" class="tab-pane" id="mac-example">

    /Users/<user_name>/Library/Arduino15/packages/UDOO/hardware/solox/<version_number>/platform.txt

  </div>
  <div role="tabpanel" class="tab-pane" id="linux-example">

    /home/<user_name>/.arduino15/packages/UDOO/hardware/solox/<version_number>/platform.txt

  </div>
 </div>
</div>
<script>
$('#adc-examples a').click(function (e) {
e.preventDefault()
$(this).tab('show')
})
</script>

`<user_name>` is your User Name. `<version_number>` is the board manager package number version, can change according to changes in our repositories.

At the end of `platform.txt` you'll find this row:

    tools.udooclient.upload.pattern="{path}/{cmd}" "192.168.7.2:5152" "{build.path}/{build.project_name}.bin"

`192.168.7.2` is the default Ip Address of the UDOO NEO when it is connected with the USB Direct Connection. To upload the sketch wirelessly you need to substitute the IP address in the string.

Substitute `192.168.7.2:5152` with `[UDOO NEO's network IP address]:5152`

Save the file, now you can upload a sketch without any cable clicking the `Upload` button of the Arduino IDE.
If you want you can also directly use the UDOO client to upload the binary without using the Arduino IDE.
