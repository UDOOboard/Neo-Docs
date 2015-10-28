## USB
The board can be connected to a PC with a MicroUSB port. It can be used in OTG mode and in HOST mode. 

<img style="width:400px; height:218px" src="../img/10_usb_otg_sch.png">

## PC Connection Interface
If you connect UDOO Neo to your PC, you can:
* access to a mass storage
* create a network interface between PC and UDOO Neo
* create a serial connection

### g_multi (Multifunction Composite Gadget)
To implements these features we use a kernel module called g_multi.

This module include other usefull sub-modules:
* usb_f_rndis
* usb_f_acm
* usb_f_mass_storage

#### Network interface
UDOO Neo inetwork interface name: usb0
UDOO Neo IPv4 address: 192.168.7.2

#### Serial port
From UDOO Neo you can see your PC as: /dev/ttyGS0 
From your Linux PC you can see UDDO Neo serial connection as: /dev/ttyACM0
If you are using Windows the OS assign a COMxx name

#### Mass storage
The accessible mass storage is a FAT partition called "boot" where is possible to find:
* documentation sources
* uEnv file 
* kernel binary
