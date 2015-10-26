## Fisrt Neo Sketch
Connect to the board in one of these mode:
* HDMI monitor, keyboard, mouse
* VNC client

1. Open the Arduino IDE from the Start menu.
Start -> Programming -> Arduino IDE

2. Copy this code into the IDE

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
3. Click on "Upload" button.
4. Save the sketch if you want
5. Wait "Compiling sketch..." until "Done uploading." appears.
6. Open on a terminal console 

``` bash
minicom -D /dev/ttyMCC
```
You will see "Hello A9!"

If you connect to pin 0 and 1 a Serial Adapter you can read "Hello world!"

