var express = require('express');
var app = express();
var http = require('http').Server(app);
var io = require('socket.io')(http);

var socketsIndexArray = [];
var displaysArray = [];
var usersArray = [];
var gameArray = [];

io.on('connection', function(socket){
	console.log('----> user with id ' + socket.id + ' connected!');

	socketsIndexArray.push(socket.id);

	// FETCH USER DATA
	socket.emit('getData');

	socket.on('userData', function(data) {
		this.status = 'disconnected';
		this.isMobile = data.isMobile;
		this.username = data.username;
		this.userid = data.userid;
		this.uniqueCode = data.uniqueCode;
        this.score = 0;

        if (!this.isMobile) {
			console.log('----> Data received from VIEW with userid ' + this.userid + ' & uniqueCode > ' + this.uniqueCode);
            displaysArray.push(this);
        }
        else {
			console.log('----> Data received from CONTROLLER with userid ' + this.userid + ' & uniqueCode > ' + this.uniqueCode);
            usersArray.push(this);

			// MAKE CONNECTION
			var display = objectFindByKey(displaysArray, 'uniqueCode', this.uniqueCode);

			if (display != null && display.status != 'connected') {
				console.log('----> CONTROLLER ' + this.userid + ' paired with VIEW ' + display.userid);

				display.status = 'connected';
				display.player = this;
				this.status = 'connected';
				this.display = display;

				createGame(this, display);
			}
			else {
				console.log('XXXXX incorrect code! XXXXX');

				socket.emit('incorrectCode');
			}
        }
	});

	socket.on('nextBall', function() {
		this.display.emit('nextBall');
	});

	socket.on('timestamp', function(timestamp) {
		this.player.emit('timestamp', timestamp);
	});

	socket.on('sco', function(sco) {
		this.display.emit('sco',sco);
		//console.log('----> Sco called from server ' + sco);
	});

	function createGame(player, display) {
		var gameID = makeid();
		player.gameID = display.gameID = gameID;

		player.status = 'playing';
		display.status = 'playing';

		var game = { gameID:gameID, player:player, display:display };
		gameArray.push(game);

		player.join(gameID);
		display.join(gameID);

		var gameData = {
			gameID: gameID,
			player_userid: player.userid,
            display_userid: display.userid,
			games_being_played: gameArray.length };

		// player.emit('initGame', JSON.stringify(gameData));
        // display.emit('initGame', JSON.stringify(gameData));
		io.to(gameID).emit('initGame', JSON.stringify(gameData));
	}

	/*
	socket.on('disconnect', function() {
		console.log('----> ' + this.username + ' with id ' + this.id + ' at index ' + socketsIndexArray.indexOf(this.id) + ' disconnected!');
		// console.log('gameID: ' + this.gameID);

		// REMOVE GAME
		if (this.gameID != undefined) {
			var game = objectFindByKey(gameArray, 'gameID', this.gameID);

			// IF A GAME WITH THE USER EXISTS
			if (game != null) {
				console.log('Game with disconnected user found...');

				// INFORM OPPONENT OF THE PLAYERS DISCONNECTION
				io.sockets.in(this.gameID).emit('disconnected', 'Opponent quit.');

				// LEAVE GAME ROOM
				game.p1.leave(this.gameID);
				game.p2.leave(this.gameID);

				// RESET GAMEID
				game.p1.gameID = undefined;
				game.p2.gameID = undefined;

				// REMOVE FROM ACTIVE GAMES
				gameArray.splice(gameArray.indexOf(game), 1);

				console.log('----> Games currently being played: ' + gameArray.length + '');
			}
		}
		else {
			// console.log('\n' + this.gameID);
		}

		// REMOVE USER FROM GAME QUEUE
		if (gameQueueArray.indexOf(this) >= 0) {
			gameQueueArray.splice(gameQueueArray.indexOf(this), 1);
		}

		var index = socketsIndexArray.indexOf(this.id);
		socketsIndexArray.splice(index, 1);

        if (!this.isMobile) {
            displaysArray.splice(displaysArray.indexOf(this), 1);
        }
        else {
            usersArray.splice(usersArray.indexOf(this), 1);
        }

		io.emit('playersOnline', usersArray.length + '|');

		console.log('----> ' + socketsIndexArray.length + ' users online.');
	});
	*/
});

var port = process.env.PORT || 8000;
http.listen(port, function(){
	console.log('server listening on port:' + port);
});

function makeid() {
	var text = "";
	var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	var i;

	for (i = 0; i < 8; i++) {
		text += possible.charAt(Math.floor(Math.random() * possible.length));
	}

	return text;
}

function objectFindByKey(array, key, value) {
    for (var i = 0; i < array.length; i++) {
        if (array[i][key] === value) {
            return array[i];
        }
    }

    return null;
}

