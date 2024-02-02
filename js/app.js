/* Loading Page until webpage is loaded */
$(document).ready(function () {
  $("#loading-page").fadeOut(1500, function () {
      $("body,html").css("overflow-y", "auto")
  });

}) 
function openNav() {
  $('#mySidenav').css('left' , '0')
  $('.burgerBtn,.profileBrg-wrap').css('opacity','0')
}

function closeNav() {
    $('#mySidenav').css('left' , '-100%')
    $('.burgerBtn,.profileBrg-wrap').css('opacity','1')
}




let map, infoWindow,x;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 26.8206, lng: 30.8025 },
    zoom: 6,
  });
  infoWindow = new google.maps.InfoWindow();
  const locationButton = document.createElement("button");
  locationButton.textContent = "Find Trainer";
  locationButton.classList.add("btn");
  locationButton.classList.add("mapButton");
  map.controls[google.maps.ControlPosition.BOTTOM_CENTER].push(locationButton);
  $('.enableMap').click(function (ev) {
    if ($('.enableMap #enableGps').is(":checked")) {
      $('#mapWrapper .mapNotEnabled').fadeOut(100)
       // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          const pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
          };

          const marker = new google.maps.Marker({
            position: pos,
            map: map,
            animation: google.maps.Animation.DROP,
          });
          infoWindow.setPosition(pos);
          infoWindow.setContent("Location found.");
          infoWindow.open(map,marker);
          map.setCenter(pos);
          map.setZoom(12)
          marker.addListener("click", () => {
            infoWindow.open({
              anchor: marker,
              map,
              shouldFocus: false,
            });
          });
          
        },
        () => {
          handleLocationError(true, infoWindow, map.getCenter());
        }
      );
    } else {
      // Browser doesn't support Geolocation
      handleLocationError(false, infoWindow, map.getCenter());
    }
    } 
})
 
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(
    browserHasGeolocation
      ? "Error: The Geolocation service failed."
      : "Error: Your browser doesn't support geolocation."
  );
  infoWindow.open(map);
}

$('.profile-btns').click(()=>{
  $('.modal').css('z-index','2424')
})

/* to change modal title */
$('.learnerBtn').click(()=>{
  $('#signInOrUpLabel').html('Learner')
})
$('.driverBtn').click(()=>{
  $('#signInOrUpLabel').html('Driver')
})

/* edit info moadal */
$('.changePassBtn,.editInfoBtn').click(()=>{
  closeNav();
})
/* notification modal */
$('.notificationBtn').click(()=>{
  closeNav();
  $('.notification-alert').show(100)
})
/* help modal */
$('.helpBtn').click(()=>{
  closeNav();
  $('.help-alert').show(100)
})
$('.locationCheckWrap').click(function (ev) {
  if ($('.locationCheckWrap #locationCheck').is(":checked")) {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          const pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
          };
          
            $('.userLat').val(pos.lat)
            $('.userLng').val(pos.lng)
    
         
        }
      )}
}
})

$('.userTypeBtn').click(function(){
  if($(this).hasClass('learnerBtn')){
  $('.userType').val("learners")
}else{
  $('.userType').val("drivers")

}})
