A [Controller Area Network](https://en.wikipedia.org/wiki/CAN_bus) (CAN bus) is a vehicle bus standard designed to allow microcontrollers and devices to communicate with each other in applications without a host computer. It is a message-based protocol, designed originally for multiplex electrical wiring within automobiles, but is also used in many other contexts.

### External pinout
UDOO Neo exposes two ports on the external pinout:

|       | TX | RX |
|-------|----|----|
| CAN_1 | 41 | 40 |
| CAN_2 | 43 | 42 |

By default these pins are assigned to the A9 core, configured as GPIO. In order to use the pins for a CAN bus, they must be explicitly [configured](http://www.udoo.org/docs-neo/Cookbook_Linux/Device_Tree_Editor.html).
