Some libraries don't work out-of-the-box on UDOO Neo. This is due to different architectures and the consequent 
use of forbidden calls.

## Hardware setup in constructor
On UDOO Neo, hardware setup and declaration outside `setup()` and `loop()` are forbidden.  
So things like:
``` C++
TM1637Display::TM1637Display(uint8_t pinClk, uint8_t pinDIO)
{
	// Copy the pin numbers
	m_pinClk = pinClk;
	m_pinDIO = pinDIO;
	
	// Set colon off by default? Or change the constructor?
	m_colon = false;
	
	// Set the pin direction and default value.
	// Both pins are set as inputs, allowing the pull-up resistors to pull them up
    pinMode(m_pinClk, INPUT);
    pinMode(m_pinDIO,INPUT);
	digitalWrite(m_pinClk, LOW);
	digitalWrite(m_pinDIO, LOW);
}
```
aren't correct.  
This issue can be fixed by moving the `digitalWrite` and the `pinMode` statements into a `begin()` method 
that it'll be called from the `setup()` function.

## PROGMEM structures
Typically Arduino boards don't have lots of RAM, so some sketch/library use `PROGMEM` structs to 
store data in flash memory and `pgm_read_word` functions to retrieve them. 
```C++
const PROGMEM uint16_t DACLookup_FullSine_5Bit[32] =
{
  2048, 2447, 2831, 3185, 3495, 3750, 3939, 4056,
  4095, 4056, 3939, 3750, 3495, 3185, 2831, 2447,
  2048, 1648, 1264,  910,  600,  345,  156,   39,
     0,   39,  156,  345,  600,  910, 1264, 1648
};
```

UDOO Neo M4 processor don't have flash memory, but it can access lots of DDR RAM, so just get rid of those statements.

## PWM
There is a little difference for [PWM pins declaration](../Debugging_&_Troubleshooting/Arduino_PWM_Issue.html). 
If you use a PWM pin don't declare it with `pinMode(XX, OUTPUT)`.

