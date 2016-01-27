<h2>WARNING</h2>
Download <strong>Arduino IDE 1.6.5.</strong>, from this website or from Arduino.cc
Other versions don't work for the moment.

All the versions of the UDOO Neo board are equipped with a Freescale iMX 6SoloX processor. 
I.MX 6SoloX embedded on single chip a single core ARM Cortex A9 and a ARM cortex M4 microcontroller. They can use and share lot of hardware implemented features provided by the architecture as:
* gpios
* PWMs
* uarts
* i2c
* spi
* analogs ADCs

Arduino Due uses a Atmel SAM3X M3 chip, so iMX 6soloX is the next family of microcontrollers. It means more performance, an higher clock frequency but also a high compatibility level.

So there are no two separate chip with two core, but only one chip. It means low power consumption, lower cost and high speed communication.
Infact there isn't a shared serial uart or a bus beetwen the two cores, but an high speed shared memory. It guarantees better performance, stability and robustness.

High Performaces are provided by low leve libraries developed by Freescale called MQX. There are low level libraries written ad-hoc on iMX6 M4 core implementing a real-time OS. 
The high level Arduino headers are "linked" with low level MQX calls.

These two processors are connected to all interfaces and peripherials thru an high speed AXI bus. It’s up to the programmer or the “system admin” to define witch features are assigned to each processors.

All the hardware features block can be accessed and connected via processors pad with a editable muxing. So the functions are not fixed but can accessed on different pads.
Some of these pads are connected to external pins to allow the users to connect their stuff.

### Vision
Develop a project with UDOO Neo is like to connect an Arduino with an external PC as in UDOO Dual/Quad but now all the computational power is on the same chip.


## M4 boot process
Everytime we reset the processor the M4 firmware ( sketch ) were lost, so it will be reloaded by the uboot from the binary present on the "boot" FAT partition. In this way the user can find its sketch on the board running at every boot.

Also at boot M4 requires the resources descripted in a configuration file. This configuration must agree with the A9 kernel configuration to avoid conflits. We provide default "safe" configuration. 

### Last Sketch used
When the system boot check if it's present an old sketch compiled in:

``` bash
/var/opt/m4/m4last.fw
```

then it loads the sketch on M4 core and start its execution.

Otherwise it loads the sketch located in:

``` bash
/boot/m4startup.fw
```
