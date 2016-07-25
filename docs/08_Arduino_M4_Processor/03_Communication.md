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

## Example

Access the Arduino capabilities of the board in one of the following ways:
 * via an HDMI/LVDS screen or VNC viewer, using *Arduino IDE*
  * access the UDOO Neo desktop;
  * click on Start -> Programming -> Arduino IDE.
 * use the web control panel
  * connect to the board (eg. [192.168.7.2](http://192.167.7.2/) if you are using the USB port);
  * click on *Arduino Editor* on the left
 * use the Arduino IDE installed [on your computer](../Arduino_M4_Processor/Programming.html)


Then, copy and paste the following sketch in the IDE:

``` bash
void setup(){
    Serial.begin(115200);
    Serial0.begin(115200);
    
    pinMode(13, OUTPUT);
}

void loop(){
    Serial.print("Hello");
    Serial.print(" ");
    Serial.println("A9!");
   
    digitalWrite(13, HIGH);
    delay(1000);
    
    Serial0.print("Hello");
    Serial0.print(" ");
    Serial0.println("world!");
    
    digitalWrite(13, LOW);
    delay(1000);
}
```

Click the *Upload* button and wait untile the message *Done uploading* appears on the status bar.

Now, connect to the serial ports, to get the strings.

### Read the internal serial port
Open a terminal in UDOO Neo (using the Teminal application on the Desktop, or a [SSH connection](../Basic_Setup/Remote_Terminal_(SSH).html))

    minicom -D /dev/ttyMCC

You will see `Hello A9!`


### Read the external serial port
Connect a Serial Adapter to the `0` and `1` Arduino pins and to your computer. Then open the serial port, for example using minicom:

    minicom -D /dev/ttyUSB0

You will read `Hello world!`

