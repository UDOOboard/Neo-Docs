## PWM Rgb Output

``` bash
void setup() {
  for(int i=2; i<6; i++){
    pinMode(i, OUTPUT);
    digitalWrite(i, HIGH);
  }
}

void loop() {

  for(int i=0; i<255; i++){
    analogWrite(2, i);
    delay(10);
  }
  
}
```

## Ultrasound distance - SFR05


## Analog Input Sensors

### Adafruit gas sensor v2

### Infra-Red distance SHARP
