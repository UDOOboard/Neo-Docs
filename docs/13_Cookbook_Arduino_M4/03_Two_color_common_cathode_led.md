# Description

## How it works
A light-emitting diode (LED) is a two-lead semiconductor light source. It is a p–n junction diode, which emits light when activated. When a suitable voltage is applied to the leads, electrons are able to recombine with electron holes within the device, releasing energy in the form of photons. This effect is called electroluminescence, and the color of the light (corresponding to the energy of the photon) is determined by the energy band gap of the semiconductor.
[Light-emitting diode from Wikipedia](https://en.wikipedia.org/wiki/Light-emitting_diode)

# Device information

Connect the left pin ( G or Minus ) to Ground and the other two pins to a digital PWM output.

# Sketches

``` bash
int redPin = 11;    // select the pin for the red LED
int greenPin = 10;    // select the pin for the greenLED
int val = 0;

void setup() {
  pinMode(redPin, OUTPUT);
  pinMode(greenPin, OUTPUT);
  Serial.begin(9600);
}

void loop() {
  for(val=255; val>0; val--)  {
    analogWrite(redPin, val);
    analogWrite(greenPin, 255-val);
    Serial.println(val, DEC);
    delay(15); 
  }
 for(val=0; val<255; val++)  {
    analogWrite(redPin, val);
    analogWrite(greenPin, 255-val);
    Serial.println(val, DEC);
    delay(15); 
  }
}
```
