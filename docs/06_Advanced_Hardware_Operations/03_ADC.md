## Preliminary operations
[Setup the kernel development](http://www.udoo.org/docs-neo/Kernel_Hacking/Setup_kernel_dev_environment.html)
 
Get the [sources](http://www.udoo.org/docs-neo/Kernel_Hacking/Get_the_sources.html)

## Edit files

### Turn off M4 core
Follow this [guide](http://www.udoo.org/docs-neo/Advanced_Hardware_Operations/Turn_off_M4_Arduino_core.html) how to turn off M4 startup at boot.


### Enable ADC on A9 side
Open the file 

    <KERNEL_ROOT>/arch/arm/boot/dts/imx6sx-udoo-neo.dtsi
    
and make this changes.

``` bash
&adc1 {
    vref-supply = <&reg_vref_3v3>;
    status = "okay";
};

&adc2 {
    vref-supply = <&reg_vref_3v3>;
    status = "okay";
};
```

This make ADCs accessible via A9 core.

## Recompile Device Tree dts files
Follow this (guide)[http://www.udoo.org/docs-neo/Kernel_Hacking/Compile_the_kernel.html] to recompile the dts.


# Read ADC Data
We can read single adc value from two files there 

    /sys/bus/iio/devices/


There are two ADC banks corresponding (adc1 e adc2):

    adc1 -> /sys/bus/iio/devices/iio\:device0/
    adc2 -> /sys/bus/iio/devices/iio\:device1/

quindi i corrispondenti valori dei pin sono:

``` bash
A0 ->  /sys/bus/iio/devices/iio\:device0/in_voltage0_raw
A1 ->  /sys/bus/iio/devices/iio\:device0/in_voltage1_raw
A2 ->  /sys/bus/iio/devices/iio\:device0/in_voltage2_raw
A3 ->  /sys/bus/iio/devices/iio\:device0/in_voltage3_raw
A4 ->  /sys/bus/iio/devices/iio\:device1/in_voltage0_raw
A5 ->  /sys/bus/iio/devices/iio\:device1/in_voltage1_raw
```

## Precision 
Analogs has a 12 bit precision (from 0 to 4095)

## Get voltage
To get milliVolts value you can multiply the \_raw file with the in\_voltage\_scale file.

eg. 4095 * 0.805664062 = 3,299 mV
