const WebSocket = require('ws');
const stream = require('stream');

const wss = new WebSocket.Server({ port: 10080 });

var child = require('child_process');
var c = child.spawn('bash');

wss.on('connection', function connection(ws) {

    c.stdout.on('data', function (data) {
        ws.send(data.toString());
    });
    c.stderr.on('data', function (data) {
        ws.send(data.toString());
    });

    ws.on('message', function incoming(message) {

        c.stdin.write(message + "\n");

    });
});