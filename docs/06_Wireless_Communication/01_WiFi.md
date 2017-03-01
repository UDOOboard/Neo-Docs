## Texas Instruments WL1831
UDOO Neo uses the Texas Instruments WL1831 to provide the Wi-Fi and Bluetooth connectivity. TI’s WiLink 8 modules are pre-certified and offer high throughput and extended range along with Wi-Fi and Bluetooth coexistence in a power-optimized design.

WiLink8 General Features:

* WLAN With Integrated RF Front-End Module(FEM), Power Amplifier (PA), Crystal, Switches, Filters, Passives, and Power Management on a Single Module
* Efficient Direct Connection to Battery by Employing Several Integrated Switched Mode Power Supplies (DC-DC)
* Dual-Mode Bluetooth and Bluetooth Low Energy
* FCC, IC, and CE Certified With Chip Antenna
* Hardware Design Files and Design Guide available from TI 
* HCI Transport for Bluetooth over UART and SDIO for WLAN
* Temperature Compensation Mechanism to Ensure Minimal Variation in RF Performance Over the Entire Temperature Range
* Commercial Modules Operating Temperature: –20°C to 70°C
* Small Form Factor: 13.4 × 13.3 × 2 mm

More information are available on [TI Wiki](http://processors.wiki.ti.com/index.php/WL18xx).

## Connecting to Wi-Fi networks

You can connect to wireless networks by:
 * using the [Web Control Panel](!Basic_Setup/Web_Control_Panel), in *Configuration*/*Network settings*;
 * using the network utility in the UDOObuntu desktop environment (in the bottom-right corner).

## Known issues

### iwconfig command not work
Texas Instruments WL1831 driver doesn't support `iwconfig` command.  Just use the `iw` command instead.
This is the [Official Ubuntu Reference](http://manpages.ubuntu.com/manpages/vivid/man8/iw.8.html)

