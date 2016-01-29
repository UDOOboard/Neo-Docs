For reference, check <a href="http://elinux.org/Device_Tree" target="_blank">http://elinux.org/Device_Tree</a>

If you are a beginner you may want to read this introduction for beginners: <a href="https://saurabhsengarblog.wordpress.com/2015/11/28/device-tree-tutorial-arm/" target="_blank">https://saurabhsengarblog.wordpress.com/2015/11/28/device-tree-tutorial-arm/</a>

The i.MX contains a limited number of pins, most of which have multiple signal options.
These signal-to-pin and pin-to-signal options are selected by the input-output multiplexer
called IOMUX. The IOMUX is also used to configure other pin characteristics, such as
voltage level, drive strength and hysteresis.

i.MX 6SoloX implements many features and can export their signals on external pad. Each pad has no fixed signal but can be changed at boot depending on the needs of the manufacturer.

[IMAGE]

Every feature has one or more signals to implements its function and not all the feature can be exported at the same time on chip pads.
Some of these pads are connected to external pins available to the user for connecting extra hardware or connections.

On the table below are reported the available features on the UDOO NEO board and then the default pin configuration.

[...]

On UDOO NEO these pins can be connected to the Cortex-A9 core (the one that runs the Operative System) or to the Cortex-M4 core (the one that implements the Arduino microcontroller).

The picture reports the default core assignment.

[...]

UDOO Neo provides a graphical tool to change this configuration called Device Tree editor


START menu --> Preferences --> Device Tree editor

[IMAGE]

This way you’ll open a browser with a graphical tool. From the left panel you can assign the function dragging it on the related pins. If the pins are dark orange it means that the function is enabled, otherwise they are GPIOs.

[IMAGE]

To remove the feature you need to right-click on a dark orange pin in the right panel.

After the functions are selected you can save by clicking on the top button, and then reboot the board.

[IMAGE]

<h2>I2C-2: SNAP-IN Brick connector</h2>
By default the snap-in connector is assigned to the A9 and it’s possible to control it by Linux driver. The I2C signal are also available on SDA - SCL pins and on pins 36/37.
If you need to use these by the M4 Arduino core you need to remove it from the A9 core, right-clicking on the corresponding pins and removing it.
After reboot it will be possible to connect an external I2C device to the SDA SCL pins and control it from the Arduino M4 core.

<h2>I2C-4 Motion Sensor Connector</h2>
By default the internal 9-axis motions sensors are assigned to the A9 and it’s possible to control them by Linux driver. The I2C signals are also available on pins 34/35.
If you need to use them by the M4 Arduino core you need to remove it from the A9 core, right-clicking on Snap-in connector and remove it.
After reboot it will be possible to connect an external I2C device to I2C-4 pins and controll it from the Arduino M4 core.
