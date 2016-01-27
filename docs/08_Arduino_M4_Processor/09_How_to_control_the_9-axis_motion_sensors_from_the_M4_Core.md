<h2>How to control the 9-axis motion sensors from the M4 Core</h2>
Before this section, you may want to take a look at (Introduction to Pinmuxing)[].
I2C-4 Motion Sensor Connector
By default the internal 9-axis motions sensors are assigned to A9 and it’s possible to control them by Linux driver. The I2C signals are also available on pins 32/33 and 34/35.
If you need to use them by the M4 Arduino core you need to remove them from the A9 core, right-clicking on the Snap-in connector on the right panel and removing it.
After reboot it will be possible to connect to I2C-4 pins an external I2C device and controll it from Arduino M4 core.

<h2>Step by step</h2>
[screenshot is coming soon]

Load the example
Update the system
sudo apt-get update

Load the example:

#include <Wire.h>
#include <FXOS8700CQ.h>
#include <FXAS21002C.h>

FXAS21002C gyroSensor   = FXAS21002C(0x20); 
FXOS8700CQ accMagSensor = FXOS8700CQ(0x1E);
bool stopLoop = false;

void setup() {
  Serial.begin(9600);
  Wire1.begin();

  // Initialize the FXOS8700CQ
  accMagSensor.init();
  // Initialize the FXAS21002C
  gyroSensor.init();
}

void loop() {
  // Query the sensor
  if (!stopLoop) {
    accMagSensor.readAccelData();
    accMagSensor.readMagData();

    gyroSensor.getGres();
     // Query the sensor
    gyroSensor.readGyroData();

    // Print out the data
    // Accelerometer
    Serial.print("Accel ");
    Serial.print("  ");
    Serial.print((int)accMagSensor.accelData.x);
    Serial.print("  ");
    Serial.print((int)accMagSensor.accelData.y);
    Serial.print("  ");
    Serial.println((int)accMagSensor.accelData.z);

    // Magnometer
    Serial.print("    Mag ");
    Serial.print(" ");
    Serial.print((int)accMagSensor.magData.x);
    Serial.print(" ");
    Serial.print((int)accMagSensor.magData.y);
    Serial.print(" ");
    Serial.println((int)accMagSensor.magData.z);

      // Gyroscope
    Serial.print("    Gyro ");
    Serial.print(" ");
    Serial.print((int)gyroSensor.gyroData.x);
    Serial.print(" ");
    Serial.print((int)gyroSensor.gyroData.y);
    Serial.print(" ");
    Serial.println((int)gyroSensor.gyroData.z);

    delay(100);
  }
}


