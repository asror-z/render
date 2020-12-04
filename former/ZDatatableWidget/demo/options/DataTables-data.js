
$('#example').dataTable( {
  //"ajax": "data.json",

   "ajax": {
      "url": "data.json",
      "type": "POST",
      "dataSrc": "tableData"
    }

   /   "ajax": function (data, callback, settings) {
    /    callback(
     /     JSON.parse( localStorage.getItem('dataTablesData') )
      /  );
      /}
} );


$('#example').dataTable( {
  "ajax": {
    "url": "data.json",
    "data": function ( d ) {
      return $.extend( {}, d, {
        "extra_search": $('#extra').val()
      } );
    }
  }
} );
$('#example').dataTable( {
  "ajax": {
    "url": "data.json",
    "data": function ( d ) {
        d.extra_search = $('#extra').val();
    }
  }
} );

$('#example').dataTable( {
  "ajax": {
    "url": "data.json",
    "dataSrc": function ( json ) {
      for ( var i=0, ien=json.length ; i<ien ; i++ ) {
        json[i][0] = '<a href="/message/'+json[i][0]+'>View message</a>';
      }
      return json;
    }
  }
} );

$('#example').dataTable( {
  "ajax": function (data, callback, settings) {
    callback(
      JSON.parse( localStorage.getItem('dataTablesData') )
    );
  }
} );


//////////////////////////////



$('#example').dataTable( {
  "ajax": {
    "url": "data.json",
    "data": {
        "user_id": 451
    }
  }
} );

$('#example').dataTable( {
  "ajax": {
    "url": "data.json",
    "data": function ( d ) {
        d.extra_search = $('#extra').val();
    }
  }
} );

$('#example').dataTable( {
  "ajax": {
    "url": "data.json",
    "data": function ( d ) {
      return $.extend( {}, d, {
        "extra_search": $('#extra').val()
      } );
    }
  }
} );

//Submit data as JSON in the request body:
$('#example').dataTable( {
    "ajax": {
        "url": "data.json",
        "contentType": "application/json",
        "type": "POST",
        "data": function ( d ) {
            return JSON.stringify( d );
        }
    }
} );

      //Submit data as JSON in the request body:
$('#example').dataTable( {
    "ajax": {
        "url": "data.json",
        "contentType": "application/json",
        "type": "POST",
        "data": function ( d ) {
            return JSON.stringify( d );
        }
    }
} );


//Get JSON data from a file via Ajax, using dataSrc to change data to tableData (i.e. { tableData: [ ...data... ] }):
$('#example').dataTable( {
    "ajax": {
        "url": "data.json",
        "dataSrc": "tableData"
    }
} );



//Get JSON data from a file via Ajax, using dataSrc to read data from a plain array rather than an array in an object
$('#example').dataTable( {
    "ajax": {
        "url": "data.json",
        "dataSrc": ""
    }
} );


//Manipulate the data returned from the server - add a link to data (note this can, should, be done using render for the column - this is just a simple example of how the data can be manipulated).:
$('#example').dataTable( {
    "ajax": {
        "url": "data.json",
        "dataSrc": function ( json ) {
            for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
                json.data[i][0] = '<a href="/message/'+json.data[i][0]+'>View message</a>';
            }
            return json.data;
        }
    }
} );

  //Here is another example of displaying data from a nested json, returned by an API - JSON structure:
{
    "client_id": 11,
    "from_date": "2019-03-01",
    "to_date": "2019-03-08",
    "data": [{
    "id": "1",
    "company_name": "ABC",
    "num_of_people": 3,
    "num_of_page_visits": 4,
    "time_on_site_in_secs": 62,
    "last_visited_datetime": "2018-12-06 13:00:00+00:00"
}, {
    "id": "2",
    "company_name": "XYZ",
    "num_of_people": 1,
    "num_of_page_visits": 2,
    "time_on_site_in_secs": 42,
    "last_visited_datetime": "2018-12-04 14:00:00+00:00"
}, {
    "id": "3",
    "company_name": "PQR",
    "num_of_people": 1,
    "num_of_page_visits": 1,
    "time_on_site_in_secs": 151,
    "last_visited_datetime": "2018-12-03 12:04:45+01:00"
}
]
}

//To display contents of data in a table:
ajax: {
    url: "/api_endpoint/",
        dataSrc: "data"
},

  //To import a CSV file (jquery-csv must be imported in this example):
ajax: {
    url: "data.csv",
        dataType: "text",
        dataSrc: function (csvdata) {
        return $.csv.toObjects(csvdata);
    },


//Using a 2D array data source:

    $('#example').dataTable( {
        "data": [
            [ "Tiger Nixon", "System Architect", "$3,120", "2011/04/25", "Edinburgh", 5421 ],
            [ "Garrett Winters", "Director", "$8,422", "2011/07/25", "Edinburgh", 8422 ],
            // ...
        ]
    } );


    //


    $('#example').dataTable( {
        "data": [
            {
                "name":       "Tiger Nixon",
                "position":   "System Architect",
                "salary":     "$3,120",
                "start_date": "2011/04/25",
                "office":     "Edinburgh",
                "extn":       5421
            },
            {
                "name": "Garrett Winters",
                "position": "Director",
                "salary": "5300",
                "start_date": "2011/07/25",
                "office": "Edinburgh",
                "extn": "8422"
            },
            // .Using an array of objects as a data source:..
        ],
        "columns": [
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "extn" },
            { "data": "start_date" },
            { "data": "salary" }
        ]
    } );
