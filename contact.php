<?php ob_start();
require_once ('auth.php');
?>
<?php
include "header.php";
?>
<div style="padding-bottom: 15%;">
    <div style="float: left; margin-left: 5%;">
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:350px;width:450px;'>
            <div id='gmap_canvas' style='height:440px;width:700px;'></div>
            <style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
        <script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new
                google.maps.LatLng(44.4069029,-79.66640899999999),mapTypeId: google.maps.MapTypeId.ROADMAP};
                map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker =
                    new google.maps.Marker({map: map,position: new google.maps.LatLng(44.4069029,-79.66640899999999)});
                infowindow = new google.maps.InfoWindow({content:'<strong>Title</strong><br>27 college crecent Barrie ontario<br>'});
                google.maps.event.addListener(marker, 'click', function()
                {infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
        </script>
        <i class="glyphicon glyphicon-map-marker" > </i>
       27B College Crescent,<br/>
        &nbsp; &nbsp;&nbsp; Barrie, ON<br/>
        &nbsp; &nbsp;&nbsp; L4M 2W4<br/>
        <i class="glyphicon glyphicon-envelope"></i>  vaghelaprashant002@gmail.com <br/>
        <i class="glyphicon glyphicon-phone"></i>  +1249-877-7725<br/>
        <i class="icon-skype"></i>  vaghela.prashant1<br/>



    </div>

<div>

    <form action="insert.php" method="post">
        <table style="margin-left: 50%; ">
            <tr>
                <td>
                    <input type="text" title="firstname lastname" placeholder="Your name *" name="name" required >
                </td>
            </tr>
            <tr>
                <td>
                    <input type="email" title="Your email" placeholder="Your email *" name="email" required >
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" title="Your phone" placeholder="Your phone *" name="phone" required pattern="\d{3}\d{3}\d{4}">
                </td>
                </tr>

            <tr>
                <td>

                    <textarea name="message" placeholder="Your message *" title="Your message" required></textarea>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" title="submit"></td>

            </tr>
        </table>

    </form>

</div>

</div>
<?php
include "footer.php";
ob_flush();
?>
