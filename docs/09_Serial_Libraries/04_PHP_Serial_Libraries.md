PHP Serial Libraries for UDOO NEO
--------

This file describes how to run the PHP examples contained in this folder.

To run these PHP examples, we will use the PHP interpreter and its embedded Web Server. The same examples can be executed over Apache or nginx too.

1 - Flash the Arduino&trade; Sketch using the Arduino IDE

2 - Create the needed serial link with these commands:

  sudo ln -s /dev/ttyMCC /dev/ttyS0

3 - Navigate in this folder:

  cd serial_libraries_examples/php/

4 - Start the embedded web server:

  php -S 0.0.0.0:8080

5 - Open a browser (on your UDOO or on your computer) and run the examples writing in the address bar:

For the basic serial example:

  http://127.0.0.1:8080/index.php

For the bidirectional serial example:

  http://127.0.0.1:8080/index_bidirectional.php

Please note, use 127.0.0.1 if you open the browser directly on the UDOO; otherwise use `192.168.7.2` if you are using the USB Direct connection on UDOO NEO. If you want to connect from external WiFi/Ethernet IP address are supported too.
