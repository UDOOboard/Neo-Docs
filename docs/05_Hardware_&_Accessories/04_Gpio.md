## General Purpose Input/Output (GPIO)
The GPIO general-purpose input/output peripheral provides dedicated general-purpose pins that can be configured as either inputs or outputs.
When configured as an output, it is possible to write to an internal register to control the state driven on the output pin. When configured as an input, it is possible to detect the state of the input by reading the state of an internal register. In addition, the GPIO peripheral can produce CORE interrupts. The GPIO is one of the blocks controlling the IOMUX of the chip.

To see more detailed information look at iMX 6SoloX Reference Manual Chapter 30.

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
where <GPIO_NUMBER> = ((<BANK> - 1) * 32 ) + <ID>


Example:
If you want to export the GPIO1_IO_25;
<GPIO_NUMBER> = ((1 - 1) * 32) + 25 = 25

``` bash
echo 25 > /sys/class/gpio/export
```

#### Set direction
It's possible to choose INPUT or OUTPUT mode writing a string into a file.

INPUT:
``` bash
echo in > /sys/class/gpio/gpio25/direction
```

OUTPUT:
``` bash
echo out > /sys/class/gpio/gpio25/direction
```

To verify the direction just read the same file:
``` bash
cat /sys/class/gpio/gpio25/direction
```
#### Read value

#### Write value

### Examples

