
## Uart Serials
Universal Asynchronous Receiver/Transmitter (UART) provides serial communication capability with external devices through a level converter and an RS-232 cable or through use of external circuitry that converts infrared signals to electrical signals (for reception) or transforms electrical signals to signals that drive an infrared LED (for transmission) toprovide low speed IrDA compatibility.

To see more detailed information look at iMX 6SoloX Reference Manual Chapter 65.

http://cache.freescale.com/files/32bit/doc/ref_manual/IMX6SXRM.pdf?fpsp=1&WT_TYPE=Reference%20Manuals&WT_VENDOR=FREESCALE&WT_FILE_FORMAT=pdf&WT_ASSET=Documentation&fileExt=.pdf

### UDOO Neo Uart Functions

Table below gives a short UARTS description

|        | Function                | Description                                                        |
|--------|-------------------------|--------------------------------------------------------------------|
| UART_1 | Cortex A9 serial debug  | On this serial it's possible to have access to a Linux console     |
| UART_2 | Cortex M4 MQX debug     | Freescale MQX real-time OS library uses this serial for debug info |
| UART_3 | WL1835 Bluetooth chip   | Used to communicate with Bluetooth chip mounted on the board       |
| UART_4 | n.c.                    | n.a.                                                               |
| UART_5 | Arduino pin 0 /1 serial | It can be used by M4 microcontroller through the Serial0 object    |
| UART_6 | Cortex A9 user serial   | Not enabled by default. It can be enabled on external A9 pinout    |


## Detailed description

### UART 1

### UART 2

### UART 3

### UART 5

### UART 6
