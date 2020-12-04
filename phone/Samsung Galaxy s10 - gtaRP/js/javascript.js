var app = angular.module("app", []);

app.controller("ctrl", function($scope, $timeout) {
	// Scroll Bar needs to be fixed...
	$(function() {
		$(
			".contacts-wrapper, .call-wrapper, .twitter-wrapper, .messages-wrapper "
		).niceScroll({
			cursorcolor: "#FFFFFF",
			cursorborder: "0px solid #fff",
			cursoropacitymax: 0.1,
			cursorwidth: "3px"
		});
	});
	$scope.myNumber = "2093533313";
	$scope.isTwitterNotificationsActive = false;

	$scope.screenSize = {
		name: "lg"
	};

	$scope.saveSettings = function() {
		// do what needs to be done in here
		console.log($scope.screenSize.name);
		console.log($scope.isTwitterNotificationsActive);
	};

	var audio = new Audio('');
	
	$scope.call_phone_number = "";
	$scope.addDialer = function(val) {
		if ($scope.call_phone_number.length >= 10 || $scope.call_phone_number.length == null || $scope.call_phone_number.length === "") {
			return $scope.addDialer
		} else {
			audio.play();
			switch (val) {
				case "1":
				case "2":
				case "3":
				case "4":
				case "5":
				case "6":
				case "7":
				case "8":
				case "9":
				case "0":
					$scope.call_phone_number = $scope.call_phone_number += val;
					break;
				default:
			}
		}
	};

	// set zoom
	$scope.sm = false;
	$scope.med = false;
	$scope.lg = false;
	$scope.xl = false;

	
	// set views to false
	$scope.callToggle = false;
	$scope.contactsToggle = false;
	$scope.messagesToggle = false;
	$scope.servicesToggle = false;
	$scope.settingsToggle = false;
	$scope.newMessageToggle = false;
	$scope.addContactToggle = false;
	$scope.lifeAlertToggle = false;
	$scope.twitterToggle = false;
	$scope.sendTweetToggle = false;
	$scope.serviceMessageToggle = false;
	$scope.loadingToggle = false;
	$scope.confirmationToggle = false;
	$scope.error = false;

	$scope.callStatus = "outgoing";
	$scope.errorMessage = "There Has Been An Error";
	
	$scope.isAcceptVisible = true;

	// Pass Views through this function to toggle
	$scope.toggleView = function(val, contact) {
		//toggle call
		if (val == "call") {
			$scope.callToggle = !$scope.callToggle;
			$scope.call_phone_number = "";
		}
		// toggle contacts
		if (val == "contacts") {
			$scope.contactsToggle = !$scope.contactsToggle;
		}
		// toggle messages
		if (val == "messages") {
			$scope.messagesToggle = !$scope.messagesToggle;
		}
		// toggle services
		if (val == "services") {
			$scope.servicesToggle = !$scope.servicesToggle;
		}
		// toggle other services
		if (val == "settings") {
			$scope.settingsToggle = !$scope.settingsToggle;
		}
		// toggle calling
		if (val == "calling") {
			$scope.callingName = contact;
			$scope.contactsToggle = false;
			$scope.callToggle = false;
			$scope.phoneCallActiveToggle = !$scope.phoneCallActiveToggle;
		}
		// toggle text message
		if (val == "textMessage") {
			$scope.servicesToggle = false;
			$scope.callingName = contact;
			$scope.contactsToggle = false;
			$scope.textMessageToggle = !$scope.textMessageToggle;
		}
		// toggle add contact
		if (val == "addContact") {
			$scope.contactsToggle = false;
			$scope.callToggle = false;
			$scope.addContactToggle = !$scope.addContactToggle;
		}
		if (val == "newMessage") {
			$scope.messagesToggle = false;
			$scope.newMessageToggle = !$scope.newMessageToggle;
		}
		if (val == "twitter") {
			$scope.twitterToggle = !$scope.twitterToggle;
		}
		if (val == "sendTweet") {
			$scope.sendTweetToggle = !$scope.sendTweetToggle;
		}

		if (val == "lifeAlert") {
			$scope.lifeAlertToggle = !$scope.lifeAlertToggle;
		}
		if (val == "serviceMessage") {
			$scope.serviceName = contact;
			$scope.servicesToggle = false;
			$scope.serviceMessageToggle = !$scope.serviceMessageToggle;
		}
		if (val == "loading") {
			$scope.loadingToggle = !$scope.loadingToggle;
		}
		if (val == "confirmation") {
			$scope.confirmationToggle = !$scope.confirmationToggle;
		}
		
		if (val == "error") {
			$scope.error = !$scope.error;
			$timeout(function() {
			$scope.error = !$scope.error;
		}, 3000);
		}
	};

	$scope.submit = function(first, last, number) {
		$scope.contacts.push({
			first_name: first,
			last_name: last,
			phone_number: number
		});
		$scope.loadingToggle = true;
		$scope.addContactToggle = false;
		$timeout(function() {
			$scope.loadingToggle = false;
			$scope.contactsToggle = true;
		}, 3000);

		// server post back goes here for adding a number to contacts
	};

	// Mock Contacts
	$scope.contacts = [
		{
			id: 100,
			character_id: 100,
			phone_number: "2093422054",
			contact_number: "2093422052",
			first_name: "Peter",
			last_name: "Bishop",
			recent_message: "Sup dood this is a longer string because this needs to be tested as well as a small string to make sure nothing looks fun ok"
		},
		{
			id: 101,
			character_id: 101,
			phone_number: "2093422040",
			contact_number: "2093422051",
			first_name: "Maya",
			last_name: "Hansen",
			recent_message: "Sup dood this is a longer string because this needs to be tested as well as a small string to make sure nothing looks fun ok"
		},
		{
			id: 102,
			character_id: 102,
			phone_number: "1393422040",
			contact_number: "1393422040",
			first_name: "John",
			last_name: "Dough",
			recent_message: "hey there..."
		},
		{
			id: 103,
			character_id: 103,
			phone_number: "9993422040",
			contact_number: "9993422040",
			first_name: "Bob",
			last_name: "Loblaw",
			recent_message: "hey there..."
		},
		{
			id: 103,
			character_id: 103,
			phone_number: "9993422040",
			contact_number: "9993422040",
			first_name: "Bob",
			last_name: "Loblaw",
			recent_message: "hey there..."
		},
		{
			id: 103,
			character_id: 103,
			phone_number: "9993422040",
			contact_number: "9993422040",
			first_name: "Bob",
			last_name: "Loblaw",
			recent_message: "hey there..."
		},
		{
			id: 103,
			character_id: 103,
			phone_number: "9993422040",
			contact_number: "9993422040",
			first_name: "Bob",
			last_name: "Loblaw",
			recent_message: "hey there..."
		},
		{
			id: 103,
			character_id: 103,
			phone_number: "9993422040",
			contact_number: "9993422040",
			first_name: "Bob",
			last_name: "Loblaw",
			recent_message: "hey there..."
		},
		{
			id: 103,
			character_id: 103,
			phone_number: "9993422040",
			contact_number: "9993422040",
			first_name: "Bob",
			last_name: "Loblaw",
			recent_message: "hey there..."
		},
		{
			id: 103,
			character_id: 103,
			phone_number: "9993422040",
			contact_number: "9993422040",
			first_name: "Bob",
			last_name: "Loblaw",
			recent_message: "hey there..."
		},
		{
			id: 103,
			character_id: 103,
			phone_number: "9993422040",
			contact_number: "9993422040",
			first_name: "Bob",
			last_name: "Loblaw",
			recent_message: "hey there..."
		},
		{
			id: 103,
			character_id: 103,
			phone_number: "9993422040",
			contact_number: "9993422040",
			first_name: "",
			last_name: "",
			recent_message: "hey there..."
		},
		{
			id: 103,
			character_id: 103,
			phone_number: "9993422040",
			contact_number: "9993422040",
			first_name: "Bob",
			last_name: "Loblaw",
			recent_message: "hey there..."
		}
	];

	// Mock Convo
	$scope.messages = [
		{
			id: 100,
			message: "Sup dood this is a longer string because this needs to be tested as well as a small string to make sure nothing looks fun ok",
			creator: "2093533313",
			timestamp: "13383838383"
		},
		{
			id: 101,
			message: "Sup dood",
			creator: "2093533312",
			timestamp: "13383855383"
		},
		{
			id: 100,
			message: "Sup dood this is a longer string because this needs to be tested as well as a small string to make sure nothing looks fun ok",
			creator: "2093533313",
			timestamp: "13383838383"
		},
		{
			id: 101,
			message: "lakdfiaughdfpiaughewlifhua aljsdfhliahfd lkajsdhfahdfs lkashudflkajhdsflka liajshdflkjahsdf",
			creator: "2093533312",
			timestamp: "13383855383"
		},
		{
			id: 101,
			message: "lakdfiaughdfpiaughewlifhua aljsdfhliahfd lkajsdhfahdfs lkashudflkajhdsflka liajshdflkjahsdf",
			creator: "2093533312",
			timestamp: "13383855383"
		},
		{
			id: 101,
			message: "lakdfiaughdfpiaughewlifhua aljsdfhliahfd lkajsdhfahdfs lkashudflkajhdsflka liajshdflkjahsdf",
			creator: "2093533312",
			timestamp: "13383855383"
		}
	];
});