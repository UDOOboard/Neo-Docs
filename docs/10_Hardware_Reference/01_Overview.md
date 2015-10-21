I.MX 6SoloX embedded on single chip a single core ARM Cortex A9 and a ARM cortex M4 microcontroller. They can use and share lot of hardware implemented features provided by the architecture as:
* gpios
* uarts
* i2c
* spi
* analogs ADCs

These two processors are connected to all interfaces and peripherials thru an high speed AXI bus. It’s up to the programmer or the "system" admin to define witch features are assigned to each processors.

All the hardware features block can be accessed and connected via processors pad with a editable muxing. So the functions are not fixed but can accessed on different pads.
Some of these pads are connected to external pins to allow the users to connect their stuff.

The external pinout is organized as follows and all pins are theoretically divided in two groups:
* Cortex A9
* Cortex M4 (Arduino like) 

Immagineeee

External pins (orange) are by default assigned to A9 in GPIO mode. So these pins can be controlled directly from the file system (Linux, Android).
Internal pins (blue) are assigned and controlled by Cortex M4 with the same dimensions of Arduino UNO pinout. All the arduino shields compatible can be plugged directly on UDOO Neo board

## Pinout Available features

I.MX 6SoloX provides the following functions, part of them are fully available on the pinout. 

## Hardware features
In the following tables are listed all the functional block with relatives signals and pin numbers.
In some cases the same signal are available in more then one pin.

### UART serial ports
| PORT  | Signal Name   | PCB pin number A9 | PCB pin number M4 |                             |
|-------|---------------|-------------------|-------------------|-----------------------------|
| UART1 | UART1_TX_DATA | 47                |                   |                             |
|       | UART1_RX_DATA | 46                |                   |                             |
| UART2 | UART2_TX_DATA |                   | 45                |                             |
|       | UART2_RX_DATA |                   | 44                |                             |
| UART3 | UART3_TX_DATA |                   |                   | RESERVED FOR BLUETOOTH CHIP |
|       | UART3_RX_DATA |                   |                   | RESERVED FOR BLUETOOTH CHIP |
| UART5 | UART5_TX_DATA |                   | 0                 |                             |
|       | UART5_RX_DATA |                   | 1                 |                             |
| UART6 | UART6_RI_B    | 40                |                   |                             |
|       | UART6_DSR_B   | 39                |                   |                             |
|       | UART6_DTR_B   | 38                |                   |                             |
|       | UART6_DCD_B   | 37                |                   |                             |
|       | UART6_RX_DATA | 36                |                   |                             |
|       | UART6_TX_DATA | 35                |                   |                             |
|       | UART6_RTS_B   | 34                |                   |                             |
|       | UART6_CTS_B   | 33                |                   |                             |


### I2C
| PORT  | Signal Name   | PCB pin number A9 | PCB pin number M4 |                             |
|-------|---------------|-------------------|-------------------|-----------------------------|
| I2C1  | I2C1_SCL      | 26                |                   |                             |
|       | I2C1_SDA      | 27                |                   |                             |
| I2C2  | I2C2_SCL      | 36                | 14 - SCL          |                             |
|       | I2C2_SDA      | 37                | 15 - SDA          |                             |
| I2C3  | I2C3_SCL      |                   |                   | RESERVED FOR LCD / HDMI     |
|       | I2C3_SDA      |                   |                   | RESERVED FOR LCD / HDMI     |
| I2C4  | I2C4_SCL      | 32                | 34                |                             |
|       | I2C4_SDA      | 33                | 35                |                             |



