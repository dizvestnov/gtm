let TYPE_HELLO_MESSAGE = 1;
let TYPE_CHAT_MESSAGE = 2;
let TYPE_SHOW_HISTORY_MESSAGE = 3;

let username = $('meta[name="chat-widget-username"]').attr('content');
let user_id = $('meta[name="chat-widget-user-id"]').attr('content');
let project_id = $('meta[name="chat-widget-project-id"]').attr('content');
let task_id = $('meta[name="chat-widget-task-id"]').attr('content');

let chat = new WebSocket('ws://gtm.local:8080');

chat.onmessage = function (e) {
	$('#response').text('');
	console.log(e);
	let response = JSON.parse(e.data);
	$('.js-messages-content').append('<div>' + response.created_datetime + ' <b>' + response.username + '</b>: ' + response.message + '</div>');
};

chat.onopen = function (e) {
	chat.send(JSON.stringify({
		type: TYPE_SHOW_HISTORY_MESSAGE,
		project_id: project_id,
		task_id: task_id
	}));

	chat.send(JSON.stringify({
		type: TYPE_HELLO_MESSAGE,
		username: username
	}));
};

$('#send').click(function () {
	let message = $('#message').val();
	chat.send(JSON.stringify({
		username: username,
		user_id: user_id,
		message: message,
		project_id: project_id,
		task_id: task_id,
		type: TYPE_CHAT_MESSAGE
	}));
	$('#message').val('');
});
$(document).on('click', '.js-hide', function () {
	$('.js-chat-content').hide();
	$('.js-show').show();
});
$(document).on('click', '.js-show', function () {
	$('.js-chat-content').show();
	$('.js-show').hide();

});


// let username = $('.js-username').val();
// let project_id = $('.js-project_id').val();
// let task_id = $('.js-task_id').val();
// let chat = new WebSocket('ws://gtm.local:8080');
// chat.onmessage = function (e) {
// 	$('#response').text('');
// 	console.log(e);
// 	let response = JSON.parse(e.data);
// 	$('.js-messages-content').append('<div>' + response.created_at + ' <b>' + response.username + '</b>: ' + response.message + '</div>');
// };

// chat.onopen = function (e) {
// 	debugger;
// 	chat.send(JSON.stringify({
// 		'username': username,
// 		'project_id': project_id,
// 		'task_id': task_id
// 	}));
// };

// $('#send').click(function () {
// 	let message = $('#message').val();
// 	chat.send(JSON.stringify({
// 		'username': username,
// 		'message': message,
// 		'project_id': project_id,
// 		'task_id': task_id
// 	}));
// 	$('#message').val('');
// });
// $(document).on('click', '.js-hide', function () {
// 	$('.js-chat-content').hide();
// 	$('.js-show').show();
// });
// $(document).on('click', '.js-show', function () {
// 	$('.js-chat-content').show();
// 	$('.js-show').hide();

// });