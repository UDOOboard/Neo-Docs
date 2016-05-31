C Serial Libraries for UDOO DUAL/QUAD
---------

This file describes how to compile and run the C examples contained in this folder.

1 - Create the needed serial link with these commands:

    sudo ln -s /dev/ttyMCC /dev/ttyS0

2 - Open a terminal and navigate to this folder:

    cd serial_libraries_examples/c/

3 - Compile the C file:

for c_serial_example.c:

    gcc -o c_serial_example c_serial_example.c

for c_serial_example_bidirectional.c:

    gcc -o c_serial_example_bidirectional c_serial_example_bidirectional.c

4 - Run the C program:

for c_serial_example.c:

    ./c_serial_example

for c_serial_example_bidirectional.c:

    ./c_serial_example_bidirectional
