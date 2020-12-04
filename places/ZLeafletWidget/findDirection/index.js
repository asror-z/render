var current = null;
var previous = null;
var map;
var flightPath;
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.watchPosition(trackLocation);
    } else {
        console.log("Geolocation is not supported by this browser.");
    }
}
function trackLocation(pos){
  var lat = pos.coords.latitude;
  var lng = pos.coords.longitude;
  var imgCompass = document.getElementById('compass')
  if(!current && !previous){

    current = previous = [lat,lng]
    map.setCenter({lat: current[0], lng:current[1]});

  }else{
    current = [lat,lng]
    console.log('current is ', current, 'but previous was ', previous)

    //Find the direction
    if(current[0] != previous[0] || current[1] != previous[1]){
      var res = findSlopeandRadian(current,previous)
      if(res[1] < - 65 || res[1] > 65){
        if(current[0] > previous[0]){
          console.log('NORTH')
          imgCompass.src = "./assets/compassnorth.png"
        }else{
          console.log('SOUTH')
          imgCompass.src = "./assets/compasssouth.png"

        }
      }else if(res[1] < -25 || res[1] > 25){
        if(current[0] > previous[0]){

          if(current[1] > previous[1]){
            console.log('NORTH EAST')
            imgCompass.src = "./assets/compassnortheast.png"
          }else{
            console.log('NORTH WEST')
            imgCompass.src = "./assets/compassnorthwest.png"
          }
        }else{
          if(current[1] > previous[1]){
            console.log('SOUTH EAST')
            imgCompass.src = "./assets/compasssoutheast.png"

          }else{
            console.log('SOUTH WEST')
            imgCompass.src = "./assets/compasssouthwest.png"
          }
        }
      }else{

        if(current[1] > previous[1]){
          console.log('EAST')
          imgCompass.src = "./assets/compasseast.png"
        }else{
          imgCompass.src = "./assets/compasswest.png"
          console.log('WEST')
        }

      }
      console.log('slope is ', res[0], ' degree is ',res[1], 'degree')
    }
    flightPath.setPath([{lat: previous[0],lng: previous[1]},{lat: current[0] ,lng: current[1]}])
    previous = current

  }
}
function findSlopeandRadian(current,previous){
  var slope = (current[0] - previous[0]) / (current[1] - previous[1])
  var radian = Math.atan(slope)
  var degree = (radian)*180/Math.PI
  //if(degree < 0) degree += 180
  return [slope,degree]

}
