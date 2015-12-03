# Description



Infrared emitting diodes: clean, good condition; various parameters during operation must not exceed limit values 
(positive To the current 30 ~ 60 mA, Pulse Forward Current 0.3 ~ 1 A, reverse voltage 5 V, power dissipation 90 mW, 
the working temperature Range -25 ~ +80 ℃, storage temperature range of -40 ~ +100 ℃, soldering temperature of 260℃) in
frared emission tube and then Closed head should be paired with, otherwise it will affect the sensitivity.

# Device


# Sketch

``` bash
#include <IRremote.h>

IRsend irsend;
const int ledPin = 13;

void setup() {
  pinMode(ledPin, OUTPUT);
}

void loop() {
  digitalWrite(ledPin, HIGH);
  irsend.sendNEC(0xFFA25D, 32);
  delay(1000);
  
  digitalWrite(ledPin, LOW);
  delay(1000);
}
```
