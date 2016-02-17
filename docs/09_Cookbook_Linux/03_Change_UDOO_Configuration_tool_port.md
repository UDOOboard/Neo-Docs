To avoid port conflicts with the Web Control Panel you should change its port.
You should edit this file:

    /opt/udoo-web-conf/bin/www

Open the file and change
    udooer@udooneo:$ vim /opt/udoo-web-conf/bin/www
 
     #!/usr/bin/env node
    var app = require('../app');
    var debug = require('debug')('udoo-cfg:server');
    var http = require('http');
    var server = http.createServer(app);
    // Utilities
    var ifconfig = require('wireless-tools/ifconfig');
    var exec = require('child_process').exec;
    var fs = require('fs');
    var port = normalizePort(process.env.PORT || '80');
    var isOnline = require('is-online');
    var fs = require('fs');
    app.set('port', port);

Change this line

    var port = normalizePort(process.env.PORT || '80');

to

    var port = normalizePort(process.env.PORT || '<NEW_PORT>');

for example 3001

    var port = normalizePort(process.env.PORT || '3001');

save, exit and type this command:

    killall node

to reboot the node service.

Now if you want to open the Web Control Panel you should go to:

    192.168.7.2:3001
