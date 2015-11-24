UDOO Neo is equipped with 9-axis motion sensors: accelerometer, magnetometer and gyroscope.
Accelerometer and magnetometer are embedded on the same Freescale chip, that is FXOS8700CQ, the gyroscope is a single FXAS21002C chip.
They communicate with i.MX 6SoloX over I2C bus number 4.
They can be accessed by M4 core and also by A9 core. They can be used in ping mode, to ask the values readed by the sensors and in interrupt mode.

<img style="width:400px; height:218px" src="../img/gionji/DOCS_acc_mag_chip.PNG">

### Usage
See the [Motion Sensor Section](../Hardware_&_Accessories/Motion_sensor.html).

