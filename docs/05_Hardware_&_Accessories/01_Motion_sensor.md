## Onboard 9-axis sensors
UDOO Neo is equipped with 9-axis motion sensor implemented by two Freescale chips.

<img style="width:400px; height:218px" src="../img/gionji/DOCS_i2c_channels.JPG">

### Remember
Only EXENDED and FULL board version are equipped with embedded motion sensors.

## FXOS8700CQ - Accelerometer/Magnetometer
FXOS8700CQ is a small, low-power, 3-axis, linear accelerometer and 3-axis, magnetometer combined into a single package. The device features an I2C with 14-bit accelerometer and 16-bit magnetometer ADC resolution along with smart-embedded functions. FXOS8700CQ has dynamically selectable acceleration full scale ranges of ±2g / ±4g /±8g and a fixed magnetic measurement range of ±1200μT. Output data rates (ODR) from 1.563 Hz to 800 Hz are selectable by the user for each sensor. Interleaved magnetic and acceleration data is available at ODR rates of up to 400 Hz. FXOS8700CQ is guaranteed to operate over the extended temperature range of -40 °C to +85 °C.

* I2C address: 0x1E
* [Download datasheet](http://cache.freescale.com/files/sensors/doc/data_sheet/FXOS8700CQ.pdf)

### Read accelleration and magnetic field data
To enable accelerometer you need to write `1` in file below:

    echo 1 > /sys/class/misc/FreescaleAccelerometer/enable

Accelerometer data is then available from file:

    /sys/class/misc/FreescaleAccelerometer/data


To enable magnetometer you need to write `1` in file below:

    echo 1 > /sys/class/misc/FreescaleMagnetometer/enable

Magnetometer data is then available from file:

    /sys/class/misc/FreescaleMagnetometer/data


#### Accelerometer example
This example prints accelerometer data into the terminal:
``` bash
udooer@udooneo$ echo 1 > /sys/class/misc/FreescaleAccelerometer/enable
udooer@udooneo$ cat /sys/class/misc/FreescaleAccelerometer/data
-6948,344,-14472
udooer@udooneo$ _
```

#### Magnetometer example
This example prints magnetometer data into the terminal:
``` bash
udooer@udooneo$ echo 1 > /sys/class/misc/FreescaleMagnetometer/enable
udooer@udooneo$ cat /sys/class/misc/FreescaleMagnetometer/data
-225,257,1372
udooer@udooneo$ _
```

## FXAS21002 - Gyroscope
3-Axis Digital Angular Rate Gyroscope FXAS21002C is a small, low-power, yaw, pitch, and roll angular rate gyroscope with 16 bit ADC resolution. The full-scale range is adjustable from ±250°/s to ±2000°/s. It features I2C interface. FXAS21002C is capable of measuring angular rates up to ±2000°/s, with output data rates (ODR) from 12.5 to 800 Hz. An integrated Low-Pass Filter (LPF) allows the host application to limit the digital signal bandwidth. The device may be configured to generate an interrupt when a user-programmable angular rate threshold is crossed on any one of the enabled axes.
FXAS21002C is guaranteed to operate over the extended temperature.
range of –40 °C to +85 °C

* I2C address: 0x20
* [Download datasheet](http://cache.freescale.com/files/sensors/doc/data_sheet/FXAS21002.pdf)


### Read angular speed data
To enable gyroscope you need to write `1` in file below:

    echo 1 > /sys/class/misc/FreescaleGyroscope/enable

Gyroscope data is then available from file:

    /sys/class/misc/FreescaleGyroscope/data

## Direct I2C register access
It' also possible to read direcly from I2C register. However, for novice users we suggest to use previous methods.

### Read accelerometer/magnetometer data via I2C

``` bash
#!/bin/sh

# set to active mode
i2cset -f -y 3 0x1e 0x2a 1
# enable both accelerometer and magnetometer
i2cset -f -y 3 0x1e 0x5b 3

while [ 1 ]; do
  # accelerometer vector
  a_x=$(( $( i2cget -f -y 3 0x1e 0x01 ) << 8 | $( i2cget -f -y 3 0x1e 0x02 ) ))
  a_y=$(( $( i2cget -f -y 3 0x1e 0x03 ) << 8 | $( i2cget -f -y 3 0x1e 0x04 ) ))
  a_z=$(( $( i2cget -f -y 3 0x1e 0x05 ) << 8 | $( i2cget -f -y 3 0x1e 0x06 ) ))

  # magnetometer vector
  m_x=$(( $( i2cget -f -y 3 0x1e 0x33 ) << 8 | $( i2cget -f -y 3 0x1e 0x34 ) ))
  m_y=$(( $( i2cget -f -y 3 0x1e 0x35 ) << 8 | $( i2cget -f -y 3 0x1e 0x36 ) ))
  m_z=$(( $( i2cget -f -y 3 0x1e 0x37 ) << 8 | $( i2cget -f -y 3 0x1e 0x38 ) ))
  echo "acc: $a_x/$a_y/$a_z - mag: $m_x/$m_y/$m_z"
done
```

### Read gyroscope via I2C

``` bash
\#!/bin/sh

\# set to active mode
i2cset -f -y 3 0x20 0x13 0x16

while [ 1 ]; do
  # gyro vector
  g_x=$(( $( i2cget -f -y 3 0x20 0x01 ) << 8 | $( i2cget -f -y 3 0x20 0x02 ) ))
  g_y=$(( $( i2cget -f -y 3 0x20 0x03 ) << 8 | $( i2cget -f -y 3 0x20 0x04 ) ))
  g_z=$(( $( i2cget -f -y 3 0x20 0x05 ) << 8 | $( i2cget -f -y 3 0x20 0x06 ) ))

  echo "$g_x/$g_y/$g_z"
done
```
