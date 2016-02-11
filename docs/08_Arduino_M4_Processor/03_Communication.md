## Internal cores communication
To communicate between the two SoloX cores we implemented the dedicated `Serial` object.
It is a virtualized serial that uses the shared memory to exchange datas on chip.

<img style="width:228px; height:218px" src="../img/gionji/DOCS_a9_m4_serial.PNG">

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
The iMX 6SoloX can communicate with external peripherals in different modes.

<a href="../img/gionji/DOCS_arduino_serial.PNG" target="_blank"><img style="width:400px; " src="../img/gionji/DOCS_arduino_serial.PNG"></a>

The `Serial0` object allows to read and write data on pins `0` and `1` of external pinout.

```bash
Serial0.begin(115200);

Serial0.write('hello');
Serial0.print(" ");
Serial0.println("world");
```

<span class="label label-warning">Heads up!</span> This serial is not connected with the A9 core (Linux/Android). It allows only to communicate with an external UART device!

