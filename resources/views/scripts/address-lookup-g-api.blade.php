{!! HTML::script('//maps.googleapis.com/maps/api/js?libraries=places&dummy=.js', array('type' => 'text/javascript')) !!}

<script type="text/javascript">

    //FUNCTION TO ASSIST WITH AUTO ADDRESS INPUT USING GOOGLE MAPS API3
    //<![CDATA[
    window.onload=function(){
        if(document.getElementById("direccion"))
        {
            var input = document.getElementById('direccion');
            var options; // = {componentRestrictions: {country: 'us'}};
            var autocomplete = new google.maps.places.Autocomplete(input, options);
        }
     }//]]>

</script>