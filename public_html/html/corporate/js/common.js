/*------------------------------------------------------------------ Scroll To*/
jQuery.fn.extend(
        {
            scrollTo: function (speed, easing)
            {
                return this.each(function ()
                {
                    var targetOffset = $(this).offset().top;
                    $('html,body').animate({scrollTop: targetOffset}, speed, easing);
                });
            }
        });

/*---------------------------------------------------------------- Nano Scroll*/
$(function () {
    $(".nano").nanoScroller();
});

/*------------------------------------------------------------- Top Nav Button*/
$(window).load(function () {
    var goto = window.location.hash;
    if (goto != '') {
        $(goto).scrollTo(500);
    }
});

$(function () {

    $('a').on('click', function () {
        if ($(this).data('goto') != '') {
            var goto = $(this).data('goto');
            $('#' + goto).scrollTo(500);
        }
    });

    $('#navigation li button.navbar-btn').click(function () {
        location.href = $(this).data('url');
    });
});

/*-------------------------------------------------------------------- Gallery*/
$(function (e) {
    $('.gallery').fadeOut();
    $('.header-environment ul.nav-pills li').click(function (e) {
        var tab = $(this).data('tab');
        $('.header-environment ul.nav-pills li').removeClass('active');
        $(this).addClass('active');
        $('.gallery').fadeOut();
        $('.gallery[data-tab="' + tab + '"]').fadeIn();
        e.preventDefault();
    });
    $('.header-environment ul.nav-pills li:first-child').trigger('click');
});

/*----------------------------------------------------------------- Google Map*/
$(function () {
    if (typeof google === 'object' && typeof google.maps === 'object') {

        //
        var map_data = $.parseJSON(vars.map_data);
        var markers = [];
        var map;
        var infowindow = new google.maps.InfoWindow({size: new google.maps.Size(150, 50)});
        var center = new google.maps.LatLng(16.0755818, 108.22209129999999);
        //
        function initMap() {

            var myOptions = {
                zoom: 5,
                center: center,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            map = new google.maps.Map(document.getElementById('map'), myOptions);

            google.maps.event.addListener(map, 'click', function () {
                infowindow.close();
            });

            drop();

            $('.map-marker').on('click', function () {
                map.setCenter(center);
                map.setZoom(5);
            });

            $('.map-focus').on('click', function () {
                $("#map").scrollTo('slow');
                var lat = $(this).data('lat');
                var lng = $(this).data('lng');
                map.setCenter(new google.maps.LatLng(lat, lng));
                map.setZoom(17);
            });
        }

        function drop() {
            var i = 0;
            map_data.forEach(function (data) {
                addMarkerWithTimeout(new google.maps.LatLng(data.lat, data.lng), data, i * 500);
                i++;
            });
        }

        function addMarkerWithTimeout(position, data, timeout) {
            window.setTimeout(function () {
                var marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    animation: google.maps.Animation.DROP
                });
                markers.push(marker);
                //
                google.maps.event.addListener(marker, 'click', function () {
                    infowindow.close();
                    //
                    infowindow = new google.maps.InfoWindow({content: '<b>' + data.main_location + '</b><br/>' + data.address});
                    infowindow.open(map, marker);
                });
                //
            }, timeout);
        }

        google.maps.event.addDomListener(window, 'load', initMap);
    }
});

/*----------------------------------------------------------- Global Services*/
$('#navigation li button.navbar-btn').click(function () {
    location.href = $(this).data('url');
});

$("a.photo").fancybox({
    helpers: {
        title: {
            type: 'inside'
        }
    }
});

$("a.photo1").fancybox({
    helpers: {
        title: {
            type: 'inside'
        }
    },
    openEffect  : 'none',
    closeEffect : 'none'
});

$('.image-wrapper').mouseover(function (e) {
    var that = this;
    $(this).find('.text-wrapper').css({backgroundColor: $(that).data('bg-color')});
    e.stopPropagation();
}).mouseout(function (e) {
    $(this).find('.text-wrapper').css({backgroundColor: '#fff'});
    e.stopPropagation();
});

$('#responsive-menu-button').sidr({
    name: 'sidr-main',
    source: '#navigation'
});
