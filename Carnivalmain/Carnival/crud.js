 		var config = {
		    apiKey: "AIzaSyDMXlxvMNGvaIO6muORFrwwqZPkIsnVhWQ",
		    authDomain: "ictechnicalteamisthebest.firebaseapp.com",
		    databaseURL: "https://ictechnicalteamisthebest.firebaseio.com",
		    projectId: "ictechnicalteamisthebest",
		    storageBucket: "ictechnicalteamisthebest.appspot.com",
		    messagingSenderId: "553171014592"
	 	 };

		  firebase.initializeApp(config);

		  var database = firebase.database();

		  function pushit(){



				  	var pushitdata = voters;
				  	var updates = {};
					updates['/voters/'] = pushitdata;
					alert('Created Successfully');

					return firebase.database().ref().update(updates);
		  }


	  function pullit(){


	  		var pinRef = firebase.database().ref("/voters/");
			return pinRef.once('value').then(function(snapshot){
			return snapshot.val();

	  	
	  }
