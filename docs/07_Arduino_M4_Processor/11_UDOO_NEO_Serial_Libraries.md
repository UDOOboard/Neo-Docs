<h2>C Serial Libraries for UDOO NEO</h2>

The format of the file is .c<br/>

This part describes how to compile and run the C examples contained in this folder.<br/>

* Open a terminal and go to this folder:<br/>

```cd serial_libraries_examples/c/```<br/>

* Compile the C file:<br/>

for c_serial_example.c:

```gcc -o c_serial_example c_serial_example.c```<br/>

for c_serial_example_bidirectional.c:<br/>

```gcc -o c_serial_example_bidirectional c_serial_example_bidirectional.c```

* Run the C program:<br/>

for c_serial_example.c:

```./c_serial_example    ```

for c_serial_example_bidirectional.c:

```./c_serial_example_bidirectional    ```

<h2>JAVA Serial Libraries for UDOO NEO</h2>

* If you are using other UDOO NEO distributions use the standard Vanilla JAVA Libraries.

Install librxtx-java from repositories

```sudo apt-get install librxtx-java```

Copy appropriate libraries and symlink them

```sudo cp /usr/lib/jni/librxtxSerial-2.2pre1.so /usr/lib/jvm/java-7-openjdk-armhf/jre/lib/arm/```

```cd /usr/lib/jvm/java-7-openjdk-armhf/jre/lib/arm/```

```sudo ln -s librxtxSerial-2.2pre1.so librxtxSerial.so```

Now symlink them to allow UDOO NEO’s /dev/ttyMCC serial port binding

```sudo ln -s /dev/ttyMCC /dev/ttyS0```

* Open a terminal and go to this folder:

```cd serial_libraries_examples/java/```

* Compile the Java file:

```javac -cp /usr/share/java/RXTXcomm.jar:. Java_serial_example.java```

* Run the Java program:

```java -Djava.library.path=/usr/lib/jni -cp /usr/share/java/RXTXcomm.jar:. Java_serial_example```

```PHP Serial Libraries for UDOO NEO```

This part describes how to run the PHP examples contained in this folder. To run these PHP examples you need a PHP interpreter and a Web Server. 

The easiest way is to install a preconfigured LAMP environment using tasksel.

It could be possible that the system asks you to change the permission of any file: 

```sudo chmod a+w (folderName or fileName)```

```sudo chmod a+x (folderName or fileName)```

* In a terminal run:

```sudo apt-get update```

```sudo apt-get install tasksel```

* Install LAMP following the instruction:

```sudo tasksel install lamp-server```

* Grant www-data user appropriate permissions for the serial port:

```sudo adduser www-data dialout```

* Go to this folder and copy the php files in the Apache web server folder (/var/www/):

```cd serial_libraries_examples/php/```

```sudo cp php_serial_example.php /var/www/html```

* Open a browser and go to these pages writing in the address bar:

for php_serial_example.php:

```localhost/php_serial_example.php```

for php_serial_example_bidirectional.php:

```localhost/php_serial_example_bidirectional.php```

```Python Serial Libraries for UDOO NEO```

* Install the Python library to manage the serial:

(NB: jump this step if you have this example preinstalled in you UDOObuntu distribution, release 1.1 and above)

```sudo pip install pyserial```

* Open a terminal and go to to this folder:

```cd serial_libraries_examples/python/```

* Run the python program:

for python_serial_example.py:

```python python_serial_example.py```

for python_serial_example_bidirectional.py:

```python python_serial_example_bidirectional.py```
