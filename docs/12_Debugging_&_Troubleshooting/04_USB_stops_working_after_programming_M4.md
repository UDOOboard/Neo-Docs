<h2>When it happens</h2> 
At date we have some problems on managing the serial between the two processors.
A too intensive* use may cause malfunctioning.

<h3>Case 1</h3>
It happens each time the 
<code>Serial.print</code> 
method is called, a new buffer is used each time, up to a maximum of 10 buffers.
If there is no consumer process that empties each buffer A9-side, when 10 buffers get used, it hangs with various consequences.

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
To solve this problem, [connect via Mini USB](http://www.udoo.org/docs-neo/Basic_Setup/Remote_Desktop_(VNC).html). Once connected open the terminal and remove this file:

    rm /var/opt/m4/m4last.fw
    sudo reboot

Then reboot.

