<h2>When it happens</h2> 
At date we have some problems on managing the serial between the two processors.
A too intensive* use may cause malfunctioning.

<h3>Case 1</h3>
It happens each time the 
<code>Serial.print</code> 
method is called. When a <code>Serial.print</code> method is called a new buffer is used each time, up to a maximum of 10 buffers.
If there is no consumer process that empties each buffer A9-side, when 10 buffers get used, it hangs with various consequences.

Be sure that the Arduino sketch will only send data when the A9 consumer process (Python, PHP, C++ program) is ready to consume. Normally after a reboot the Arduino sketch is already running while the A9 side is still starting up. Please make sure your Arduino sketch waits with sending data until the A9 side consuming process confirms to the arduino sketch that it is ready to receive data. Else the 10 buffers will be filled and the Neo will hang.
See for an example Arduino code with this feature: <a href="https://github.com/UDOOboard/serial_libraries_examples/tree/master/Arduino/arduino_serial_example_bidirectional" target="_blank">https://github.com/UDOOboard/serial_libraries_examples/tree/master/Arduino/arduino_serial_example_bidirectional</a>

The example in Case 2 will not prevent this issue after a reboot. Please use your example arduino_serial_example_bidirectional.ino

<h3>Case 2</h3>
If you instead got this problem

    void setup(){
        Serial.begin(115200);
        pinMode(13, OUTPUT);
    }
    void loop(){
        while(Serial.available() > 0){
            [ ... ]
        }
    }
    
then try if it's possible to add little delays after a Serial call.
E.g.

    void setup(){
        Serial.begin(115200);
        pinMode(13, OUTPUT);
        delay(100);
    }
    void loop(){
        while(Serial.available() > 0){
            [ ... ]
        }
        delay(100);
    }
    
<h2>Solution</h2>
To solve this problem, [connect via Mini USB](../Basic_Setup/Remote_Desktop_(VNC).html). Once connected open the terminal and remove this file:

    rm /var/opt/m4/m4last.fw
    sudo reboot

Then reboot.

