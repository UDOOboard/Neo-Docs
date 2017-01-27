The board is equipped with the Freescale MMPF3000.
The PF3000 is a Power Management Integrated Circuit (PMIC) designed specifically for use with the Freescale i.MX 7 and i.MX 6SL/SX/UL application processors. With up to four buck converters, six linear regulators, RTC supply, and coin-cell charger, the PF3000 can provide power for a complete system, including applications processors, memory, and system peripherals. This device is powered by SMARTMOS technology.

To be fully functional, the board needs a 5V clean power (VCC_SW). If an LVDS panel is connected, the board **must** be powered at 12V. We can power the board with an external power supply or with a microUSB cable connected to a 5V source.

### Power supply stages
<a href="../img/gionji/DOCS_power_chain.PNG" target="_blank"><img style="width:400px;" src="../img/gionji/DOCS_power_chain.PNG"></a>

* The (E) block allows to only one wire to arrive at VCC_SW node. this block is controlled by to signals: 5V_PWRG and the output of (D) block. 
* 5V_PWRG is a signal that notify the voltage coming from the (A) block has the right value and eventually the VCC_SW_IN can be used to power the board.
* The (A) block is a DC/DC converter to a 5V voltage.
* The (B) block is the uUSB port.
* The (D) block detect witch power supply is connected and eventually send signals to switch the source for VCC_SW
* The (F) block is another DC/DC converter from 5V to 3.3V.

<a href="../img/gionji/DOCS_pmic_imx6.PNG" target="_blank"><img style="width:400px;" src="../img/gionji/DOCS_pmic_imx6.PNG"></a> <a href="../img/gionji/DOCS_pmic_pf3000.PNG" target="_blank"><img style="width:400px;" src="../img/gionji/DOCS_pmic_pf3000.PNG"></a>

### Power sources
You can power up the board in 3 ways

* DC-jack with a standard 5.5mm/2.1mm barrel jack: internal positive, Voltage 6 to 15.
* microUsb: 5 Volts up to 2 Ampere
* Vin / GND pin on internal pinout

Providing higher voltages could damage the board!
