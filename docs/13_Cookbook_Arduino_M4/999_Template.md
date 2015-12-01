# Description



## How it works
[Hall Effect Sensing by Honeywell](http://wikipedia.com)

# Device information
<img style="width:300px;" src="../img/gionji/m4_cookbook/44e938_02.jpg">


## 44E-938

<img style="width:400px;" src="../img/gionji/m4_cookbook/44e938.jpg">

A Hall generator is a solid state sensor which provides an output voltage...

## Signals


# Sketches

## 44e-938

``` bash
int val = 0; // This holds the read value.
void setup(){
  pinMode(2, INPUT);   // Read the input on pin 2
  pinMode(13, OUTPUT); // I used pin 13 since it has an LED on the UNO built-in.
  Serial.begin(9600);  // I also wanted to confirm the value I read.
}

void loop(){
  val = digitalRead( 2 ); // Go read the pin.
  Serial.println(val);    // just to see on the serial monitor what I read.

  if ( val == HIGH )
    digitalWrite ( 13, LOW );  // Turn on the LED when the value is high.
  else
    digitalWrite ( 13, HIGH ); // Turn off the LED when the value is low.
}
```



