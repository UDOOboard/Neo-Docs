<h2>WARNING</h2>
Download [**Arduino IDE 1.6.5**](https://www.arduino.cc/en/Main/OldSoftwareReleases#previous) from Arduino.cc

All the UDOO Neo board versions are equipped with a Freescale iMX 6SoloX processor, which embeds on single chip an ARM Cortex A9 and an ARM Cortex M4 microcontroller. They can use and share lot of hardware implemented features provided by the architecture as:
* GPIOs
* analog inputs
* PWMs
* UARTs
* I2C
* SPI

For comparison, Arduino Due uses an Atmel SAM3X M3 chip, the iMX 6soloX is the next family of microcontrollers. This means more performance, an higher clock frequency but also a high compatibility level.

Having a single chip with two cores means lower power consumption, lower costs and high speed communication.
In fact there isn't a shared serial port or a bus between the two cores, but an high speed shared memory. This guarantees better performance, stability and robustness.

High Performances are provided by the real time operativing system developed by Freescale, MQX. The high level Arduino headers are "linked" with low level MQX calls.

These two cores are connected to all interfaces and peripherals through an high speed AXI bus. It’s up to the programmer to define witch features are assigned to each processors.

All the hardware features can be accessed and connected via processors pad with an editable muxing. So the functions are not fixed but can accessed on different pads.
Some of these pads are connected to external pins to allow the users to connect their stuff.


### Vision
Developing a project with UDOO Neo is like connecting an Arduino with an external PC as in UDOO Dual/Quad. However, now all the computational power is on the same chip.


### M4 boot process
Every time the processor is resetted, the M4 firmware (Arduino sketch) would be lost, so it needs to be reloaded by the boot-loader from the SD card. In this way the user can find its sketch on the board running at every boot.

Moreover, during the boot the M4 requires the resources described in a configuration file. This configuration must agree with the A9 kernel configuration to avoid conflicts. We provide a default "safe" configuration.


### Last Arduino Sketch
When the system boot, it checks if a sketch compiled with the Arduino IDE is saved in the default location, which is `/var/opt/m4/m4last.fw`.

If the sketch exists, it is loaded and executed on the M4 core; otherwise a default sketch is loaded from `/boot/m4startup.fw` as a workaround in order to prevent possible hangs on the M4.

