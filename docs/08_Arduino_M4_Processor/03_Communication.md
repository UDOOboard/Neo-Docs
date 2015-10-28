## Internal communication
To communicate beetwen the two SoloX core we implemented the dedicated object "Serial".
It is a virtualized serial that uses the shared memory to exchange datas on chip.

<img style="width:400px; height:218px" src="../img/gionji/DOCS_a9_m4_serial.PNG">

```bash
Serial.begin(115200);

Serial.write('Hello');
Serial.print(" ");
Serial.println("A9 core!");
```

It' possible to access this serial by A9 side on device:
```bash
/dev/ttyMCC
```

## External pinout communication
On the iMX 6SoloX we can communicate with external pheriperials in different modes.

<img style="width:400px; " src="../img/gionji/DOCS_arduino_serial.PNG">

The Serial0 object allows to read and write data on pins 0 /1 of external pinout. 

```bash
Serial0.begin(115200);

Serial0.write('hello');
Serial0.print(" ");
Serial0.println("world");
```

This signals are available on pins 0 and 1 of the pinout.

CAREFUL: This are not connected with A9 Linux/Android side but allows only to communicate with an external device. 

