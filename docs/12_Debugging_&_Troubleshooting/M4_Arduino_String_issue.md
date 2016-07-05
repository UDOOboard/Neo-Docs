There are rules to obey due to the different implementation from Arduino.

## Global Variables
Strings that are declared as global - that is, not inside a function - have to be mentioned with `nameVariableString.reserve(n)`, where n is the size of the String, or not initialized with a value.  
E.g.:
``` cpp
String hello = hello;       // ERROR
String hi;                  // OK

void setup(){
    hi = hello;             // OK
}

void loop(){
    // ...
}

void dummy() {
    String bigHello = "HELLO"; // OK
}
```

## Fixed size allocation
Strings that are declared inside a function are allocated automatically at a fixed size. This size is managed through the `STRING_STACK_SIZE` define in the `Wstring.cpp` file, that is by default settings equal to *255*.

## Newline
While `if (inChar == '\n')` is a non-working syntax, `if (inChar == '0x0D')` works fine. This is found in several examples that retrieve a *String* from a serial.
