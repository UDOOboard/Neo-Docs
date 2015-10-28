## General Purpose Input/Output (GPIO)
The GPIO general-purpose input/output peripheral provides dedicated general-purpose pins that can be configured as either inputs or outputs.
When configured as an output, it is possible to write to an internal register to control the state driven on the output pin. When configured as an input, it is possible to detect the state of the input by reading the state of an internal register. In addition, the GPIO peripheral can produce CORE interrupts. The GPIO is one of the blocks controlling the IOMUX of the chip.

To see more detailed information look at iMX 6SoloX Reference Manual Chapter 30.
http://cache.freescale.com/files/32bit/doc/ref_manual/IMX6SXRM.pdf?fpsp=1&WT_TYPE=Reference%20Manuals&WT_VENDOR=FREESCALE&WT_FILE_FORMAT=pdf&WT_ASSET=Documentation&fileExt=.pdf

### How to access GPIO from Linux
It's possible to read and control digital input/output signals on the compatible Arduino pinout.
By default the GPIO available from linux kernel ar placed on the external columns. See the picture below.

<img style="width:400px; height:218px" src="../img/08_internal_external_rows.jpeg">

The internal columns pins are assigned to M4 core.

We will publish how to change this configuration soon.

### Gpio numbers and IDs

#### Export 
First of all you need to export the selected gpio. 

``` bash
echo <GPIO_NUMBER> > /sys/class/gpio/export
```
where \<GPIO_NUMBER\> = ((\<BANK\> - 1) \* 32 ) + \<ID\>


Example:
If you want to export the GPIO1_IO_25;
\<GPIO_NUMBER\> = ((1 - 1) \* 32) + 25 = 25

``` bash
echo 25 > /sys/class/gpio/export
```

#### Set direction
It's possible to choose INPUT or OUTPUT mode writing a string into a file.

Input:
``` bash
echo in > /sys/class/gpio/gpio25/direction
```

Output:
``` bash
echo out > /sys/class/gpio/gpio25/direction
```

To verify the direction just read the same file:
``` bash
cat /sys/class/gpio/gpio25/direction
```

#### Write value
To write a LOW or HIGH value on a gpio you need to write 0 or 1 in this file.

Low value - 0 Volts
``` bash
echo 0 > /sys/class/gpio/gpio25/value
```
HIgh value - 3.3 Volts
``` bash
echo 1 > /sys/class/gpio/gpio25/value
```
#### Read value
If the direction is set to in it's possible to read gpio value reading the same file.
``` bash
cat /sys/class/gpio/gpio25/value
```

If the direction i set to out and you try to read the value is not guarranted that the kernel value is coherent with the voltage found on the external pinout.

### Examples
coming soon

