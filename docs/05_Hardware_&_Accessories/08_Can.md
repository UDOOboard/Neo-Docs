## CAN bus
A controller area network (CAN bus) is a vehicle bus standard designed to allow microcontrollers and devices to communicate with each other in applications without a host computer. It is a message-based protocol, designed originally for multiplex electrical wiring within automobiles, but is also used in many other contexts. ( https://en.wikipedia.org/wiki/CAN_bus )

### External pinout
|       | TX | RX |
|-------|----|----|
| CAN_1 | 41 | 40 |
| CAN_2 | 43 | 42 |

### Default at boot
By default these pins are assigned to A9 core configured as GPIO .
