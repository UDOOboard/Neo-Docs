The I2C (Inter-IC) bus is a bi-directional, two-wire serial bus that provides a communication link between integrated circuits (ICs). Phillips introduced the I2C bus 20 years ago for mass-produced items such as televisions, VCRs, and audio equipment. Today, I2C is the de-facto solution for embedded applications.

## UDOO Neo I2C channels
Freescale iMX 6SoloX has 4 I2C channels. In UDOO Neo all four channels are used with different functions available for the user.

In the pictures below these functions are listed:

<a href="../img/gionji/DOCS_i2c_channels.JPG" target="_blank"><img style="width:400px; height:218px" src="../img/gionji/DOCS_i2c_channels.JPG"></a>

<a href="../img/gionji/DOCS_i2c_pads.PNG" target="_blank"><img style="width:400px; height:218px" src="../img/gionji/DOCS_i2c_pads.PNG"></a>

### I2C 1
The PMIC, JTAG and LVDS screen touch are connected to the first I2C bus.

#### PMIC
The PF3000 is a Power Management Integrated Circuit (PMIC) designed specifically for use with the Freescale i.MX 7 and i.MX 6SL/SX/UL application processors. With up to four buck converters, six linear regulators, RTC supply, and coin-cell charger, the PF3000 can provide power for a complete system, including applications processors, memory, and system peripherals. This device is powered by SMARTMOS technology.

#### JTAG
The pads to connect a JTAG debugger are embedded on board, placed on the bottom of the board. The connector is not present to reduce the used space and the costs. The JTAG connector uses this bus to exchange data.

#### LVDS touch panel
Most of the touch panels use the I2C standard to communicate touch coordinates. For example, the official 7 inches touch panel uses this protocol for the connection.

#### External pins
The I2C 1 bus is available also on the user-accessible pinout:

| HEADER | SDA | SDL |
|--------|-----|-----|
| J6     | 27  | 26  |
| J11    | 10  | 9   |


### I2C 2
Channel 2 is by default assigned to A9. It's possible to change this assignment following this [guide](http://www.udoo.org/docs-neo/Cookbook_Linux/Device_Tree_Editor.html).

#### Snan-ip Brisks connector
On the J10 connector it is possible to connect UDOO Bricks sensors to the I2C 2 bus.

#### External pins
The I2C 2 bus is available also on the user-accessible pinout:

| HEADER | SDA  | SDL  |
|--------|------|------|
| J6     | 15   | 14   |
| J5     | 37   | 36   |
| J10    | 3\*  | 4\*  |

\* These are not the PCB numbers but header numbers 


### I2C 3
This channel is used to control the LCD to HDMI converter. It cannot be accessed from the user because it logic runs at 1.8 Volts.
The I2C channel 3 is assigned to the A9 core only.

#### LCD to HDMI converter
iMX 6SoloX don't have the HDMI controller embedded on the SoC. So we need to use extra hardware to provide the HDMI video output.
The TDA19988 chip is connected to the I2C 3.


### I2C 4
This channel is used to connect the 9-axis motion sensors. By default is connected to A9 core.

#### Motion sensors
The FXOS8700 (acc/mag) and FXAS2100 (gyro) are connected to this channel.

| DEVICE   | FUNCTIONS                    | I2C ADDRESS |
|----------|------------------------------|-------------|
| FXOS8700 | Accelerometer / Magnetometer | 0x1E        |
| FXAS2100 | Gyroscope                    | 0x20        |

Other devices can be connected on the external pins of this bus, paying attention to not make conflicts in the addresses.


#### External pins
The I2C signals are available on the external pinout:

| HEADER | SDA | SDL |
|--------|-----|-----|
| J6     | 33  | 32  |
| J5     | 35  | 34  |
