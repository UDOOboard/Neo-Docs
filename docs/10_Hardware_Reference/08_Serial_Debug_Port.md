The serial debug port is available on the external pinout, one serial debug port for each core: Cortex-A9 and Cortex-M4.
Signals can be accessed with a USB to TTL adapter on pins:

|           | iMX 6 UART name | Rx PCB name | Tx PCB name |
|-----------|-----------------|-------------|-------------|
| Cortex A9 | UART1           | 46          | 47          |
| Cortex M4 | UART2           | 44          | 45          |


<img style="width:400px; height:218px" src="../img/10_debug_serials.png">

## Access serial from microUSB
Connecting UDOO NEO to a PC (microUSB port) it's possible to access a virtual serial provided by g_multi kernel module.


