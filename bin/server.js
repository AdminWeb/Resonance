var config = require('./config.json');
var io = require('socket.io')(config.server_port)
var redis = require('redis')

var sub = redis.createClient();

var chans = config.channels.map(function(chan){
    var chan = io.of('/'+chan)
    return chan
})

sub.on("message",function(channel, data){
    var message = JSON.parse(data)
    chans.map(function(chan){
        if(chan.name == '/'+channel){
            chan.emit(message.event, message.music)
        }
    })
});
config.channels.map(function(chan){
    sub.subscribe(chan)
})

