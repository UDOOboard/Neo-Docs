# Description 
Knock sensor module and a digital 13 interface, built-in LED build a simple circuit to produce percussion flasher. 
Interface comes with digital LED, will knock sensor connected digital 3 interface, when percussion sensor senses measure to 
percussive signals, LED flashing light.

<img style="width:400px;" src="../img/gionji/m4_cookbook/knock_sensor_01.jpg">

# Sketches
``` bash 
const int knockPin = 3;     // the number of the knock sensor pin
const int ledPin =  13;      // the number of the LED pin

// variables will change:
int buttonState = 0;         // variable for reading the knock sensor status

void setup() {
  // initialize the LED pin as an output:
  pinMode(ledPin, OUTPUT);      
  // initialize the knock sensor pin as an input:
  pinMode(knockPin, INPUT);     
}

void loop(){
  // read the state of the knock sensor value:
  buttonState = digitalRead(knockPin);

  // check if the knock sensor is pressed.
  // if it is, the knock sensor is HIGH:
  if (buttonState == HIGH) {     
    // turn LED on:    
    digitalWrite(ledPin, LOW);  
  } 
  else {
    // turn LED off:
    digitalWrite(ledPin, HIGH); 
  }
}
```
