## I2C Snap-in connector


<img style="width:400px; height:218px" src="../img/gionji/DOCS_i2c_channels.JPG">

## Bricks


### MPL3115A2 - Barometer

#### Usage
In this file you can find temperature scale
/sys/class/i2c-dev/i2c-1/device/1-0060/iio\:device0/in_temp_scale

In this file you can find temperature raw value
/sys/class/i2c-dev/i2c-1/device/1-0060/iio\:device0/in_temp_raw


#### Example
``` bash
#!/bin/bash

while [ 1 ]; do
    echo -n 'temp: '
    TEMP_RAW=`cat /sys/class/i2c-dev/i2c-1/device/1-0060/iio\:device0/in_temp_raw` 
    TEMP_SCALE=`cat /sys/class/i2c-dev/i2c-1/device/1-0060/iio\:device0/in_temp_scale`
    python << EOF
print( $TEMP_RAW * $TEMP_SCALE )
EOF
     
    echo -n 'pressure: '
    PRES_RAW=`cat /sys/class/i2c-dev/i2c-1/device/1-0060/iio\:device0/in_pressure_raw`
    PRES_SCALE=`cat /sys/class/i2c-dev/i2c-1/device/1-0060/iio\:device0/in_pressure_scale`
    python << EOF
print( $PRES_RAW * $PRES_SCALE )
EOF
done
```

#### menuconfig
``` bash
Device Driver ->
    -> Industrial I/O support
            -> Pressure Sensors
                ->  Freescale MPL3115A2 pressure sensor Driver    
```

#### dts
``` bash
&i2c2 {
    clock-frequency = <100000>;
    pinctrl-names = "default";
    pinctrl-0 = <&pinctrl_i2c2_1>;
    status = "okay";
    
    barometer: mpl3115@60 {
        compatible = "fsl,mpl3115";
        reg = <0x60>;
    };
};
```

#### Connection at boot
If the sensor is already connected at boot the kernel automatically recognizes the sensor, otherwise you need to restart the module:
``` bash
sudo rmmod mpl3115
sudo modprobe mpl3115
```


### TMP75b - Temperature

#### Usage
Enable the sensor:
``` bash
sudo sh -c 'echo lm75 0x48 >/sys/class/i2c-dev/i2c-1/device/new_device'
```
(sudo sh -c is required to execute a command as root user)

In this file there is the temp value in milli-degree Celsius
``` bash
/sys/class/i2c-dev/i2c-1/device/1-0048/temp1_input 
```

#### Example
``` bash
#!/bin/bash

while [ 1 ]; do
    cat /sys/class/i2c-dev/i2c-1/device/1-0048/temp1_input 
done
```


#### menuconfig
``` bash
Device Drivers  ---> 
Hardware Monitoring support  --->
        <M>   National Semiconductor LM75 and compatibles
```

#### Connection at boot
If the sensor is already connected at boot the kernel automatically recognizes the sensor, otherwise you need to restart the module:
``` bash
sudo rmmod lm75
sudo modprobe lm75
```

