There are rules to obey.

1) strings that are declared as global - that is, not inside a function - have to be mentioned with <code>nameVariableString.reserve(n)</code>, where n is the size of the String.

2) Strings that are declared inside a function are allocated automatically at a fixed size. This size is maanged through the STRING_STACK_SIZE define in the Wstring.cpp file, that is by default settings equal to 255.

3) while 
<code>\<if (inChar == '\n')></code>
is a non-working syntax, <code>(inChar == '0x0D')</code> works fine. This is found in several examples that retrieve a String from a serial.
