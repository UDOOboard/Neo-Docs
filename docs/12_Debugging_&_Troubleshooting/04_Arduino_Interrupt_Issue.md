UDOO NEO has interrupt capability on all digital pins, like Arduino Due.

For now, UDOO NEO does **NOT** manage:
 - **Interrupts()** / **NoInterrupts()**: functions for disabling/reenabling interrupts

 - **CHANGE** mode: *CHANGE* mode is not supported by the core Arduino&trade; Cortex-M4 of UDOO NEO. A workaround can be made triggering an interrupt on both *RISING* and *FALLING* edges. Here you can find a sketch example:

```cpp
/*
* UDOO Neo Interrupt Mode CHANGE Workaround
* Ek5 @ 2016.07
*
* Due to the unavailability of the CHANGE mode for
* interrupts in IMX6SX, this is a working alternative.
*
* PIN 8  - Interrupt
* PIN 10 - Status (pulsing)
* PIN 13 - Output
*
*/

#define IN  8
#define LED  13
#define STAT  10

volatile bool state=0;
volatile int cont=0;

volatile uint32_t modes[2] = { RISING, FALLING } ;
volatile int point= 0;

void setup() {
// init output pin
pinMode(LED, OUTPUT);
digitalWrite(LED,state);

// init interrupt pin
pinMode(IN, INPUT_PULLUP);
attachInterrupt(digitalPinToInterrupt(IN), changestate, modes[point]);

}

void loop() {
//always pulse status led
cont=++cont%256;
analogWrite(STAT,cont);
delay(1);
}

void changestate()
{
// alternate state
state=!state ;
digitalWrite(LED,state);

// detach old mode
detachInterrupt(IN);

// alternate mode
point=++point%2;
attachInterrupt(digitalPinToInterrupt(IN), changestate, modes[point]);

}

```
