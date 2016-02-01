# M4 Arduino PWM Issue
There is a little change to use PWM on M4 sketches.

## Don't need to declare pinMode() for PWM

In an Arduino Uno this sketch produces a correct output.

``` bash
void setup(){
 pinMode(9, OUTPUT);
 pinMode(10,OUTPUT);
 pinMode(11,OUTPUT);
 pinMode(12,OUTPUT);
 pinMode(13,OUTPUT);
}

void loop(){
 analogWrite( 9,   128);
 analogWrite( 10,  128);
 analogWrite( 11,  128);
 digitalWrite(12, HIGH);
 digitalWrite(13, HIGH);

 delay(1000);
 
 analogWrite(  9,   0 );
 analogWrite( 10,   0 );
 analogWrite( 11,   0 );
 digitalWrite(12, LOW );
 digitalWrite(13, LOW );

 delay(1000);
}
```

On UDOO NEO sketch, if you want to use a PWM you must not declare with pinMode().
For the moment pinMode() is only related to GPIO mode and allows to use digitalWrite() or digitalRead() methods.

So the correct sketch is:

``` bash
void setup(){
 pinMode(12,OUTPUT);
 pinMode(13,OUTPUT);
}

void loop(){
 analogWrite( 9,   128);
 analogWrite( 10,  128);
 analogWrite( 11,  128);
 digitalWrite(12, HIGH);
 digitalWrite(13, HIGH);
 delay(1000);
 
 analogWrite(  9,   0 );
 analogWrite( 10,   0 );
 analogWrite( 11,   0 );
 digitalWrite(12, LOW );
 digitalWrite(13, LOW );
 delay(1000);
}
```
