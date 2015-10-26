## External pinout communication
On the iMX 6SoloX we can communicate with external pheriperials in different modes.

<img style="width:400px; height:218px" src="../img/08_arduino_serial.png">

The most common is the Serial object. 

```bash
Serial.begin(115200);

Serial.write('hello');
Serial.print(" ");
Serial.println("world");
```

This signals are available on pins 0 and 1 of the pinout.

CAREFUL: This are not connected with A9 Linux/Android side but allows only to communicate with an external device. 

## Internal communication
To communicate beetwen the two SoloX core we implemented another dedicated object "SerialDebug".
It is a virtualized serial that uses the shared memory to exchange datas on chip.


<img style="width:400px; height:218px" src="../img/08_a9_m4_serial.png">

```bash
SerialDebug.begin(115200);

SerialDebug.write('Hello');
SerialDebug.print(" ");
SerialDebug.println("A9 core!");
```

It' possible to access this serial by A9 side on device:
```bash
/dev/ttyMCC
```

