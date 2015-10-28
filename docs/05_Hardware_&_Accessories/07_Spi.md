## SPI
The Serial Peripheral Interface (SPI) bus is a synchronous serial communication interface specification used for short distance communication, primarily in embedded systems. The interface was developed by Motorola and has become a de facto standard. Typical applications include sensors, Secure Digital cards, and liquid crystal displays.

SPI devices communicate in full duplex mode using a master-slave architecture with a single master. The master device originates the frame for reading and writing. Multiple slave devices are supported through selection with individual slave select (SS) lines.
( https://en.wikipedia.org/wiki/Serial_Peripheral_Interface_Bus )

### ECSPI
The Enhanced Configurable Serial Peripheral Interface (ECSPI) is a full-duplex, synchronous, four-wire serial communication block.
The ECSPI contains a 64 x 32 receive buffer (RXFIFO) and a 64 x 32 transmit buffer (TXFIFO). With data FIFOs, the ECSPI allows rapid data communication with fewer software interrupts. The figure below shows a block diagram of the ECSPI.

Key features of the ECSPI include:
* Full-duplex synchronous serial interface
* Master/Slave configurable
* Four Chip Select (SS) signals to support multiple peripherals
* Transfer continuation function allows unlimited length data transfers
* 32-bit wide by 64-entry FIFO for both transmit and receive data
* Polarity and phase of the Chip Select (SS) and SPI Clock (SCLK) are configurable
* Direct Memory Access (DMA) support
* Max operation frequency up to the reference clock frequency.

The ECSPI supports the modes described in the indicated sections:
* Master Mode
* Slave Mode
* Low Power Modes

### UDOO Neo SPI channels
UDOO Neo exposes 3 ECSPI channels. 

|         | MISO       | MOSI    | CLOCK   | SS0        | SS1 | SS2 | SS3 | Default core at boot |
|---------|------------|---------|---------|------------|-----|-----|-----|----------------------|
| ECSPI_2 | 20         | 21      | 38      | 39         | -   | -   | -   | A9 (gpio mode)       |
| ECSPI_3 | 18 / A1 \* | A0 \*   | A4 \*   | 19 / A5 \* | 21  | 20  | -   | A9 (gpio mode)       |
| ECSPI_5 | 12 / 40    | 11 / 43 | 13 / 42 | 10 / 41    | -   | -   | -   | M4 (digital io mode) |

\* Analogs pin can also be connected to A9 core using phisical signal mux 74VHC4053AFT (U12, U13). Configure guide coming soon.

To see more detailed information look at iMX 6SoloX Reference Manual Chapter 22.
http://cache.freescale.com/files/32bit/doc/ref_manual/IMX6SXRM.pdf?fpsp=1&WT_TYPE=Reference%20Manuals&WT_VENDOR=FREESCALE&WT_FILE_FORMAT=pdf&WT_ASSET=Documentation&fileExt=.pdf

#### ECSPI 2
ECSPI 2 has only for signals (MISO, MOSI, SCLK and SS0); By default these pins are assigned to A9 but in GPIO mode.

#### ECSPI 3
ECSPI 3 is a full signal SPI including all Select Signal (SS0, SS1, SS2, SS3). By default all pins of this SPI are assigned to A9 in GPIO mode.

#### ECSPI 5
ECSPI 5 has the same pin order, function, and position as Arduino Uno. By default is assigned to M4 core but configured as Digital Output (GPIO).


