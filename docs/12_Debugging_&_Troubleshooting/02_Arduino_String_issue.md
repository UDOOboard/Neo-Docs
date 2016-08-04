There are rules to obey due to the different implementation from Arduino.

## Fixed size allocation
Strings that are declared inside a function are allocated automatically at a fixed size. This size is managed through the `STRING_STACK_SIZE` define in the `Wstring.cpp` file, that is by default settings equal to *255*.

## Newline
While `if (inChar == '\n')` is a non-working syntax, `if (inChar == '0x0D')` works fine. This is found in several examples that retrieve a *String* from a serial.
