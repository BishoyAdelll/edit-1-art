
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="assets/jquery.js"></script>
<script src="assets/js%20bootstrap/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net.xyz/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="assets/fonts/js/all.min.js"></script>
<!--
<script type="text/javascript">
    function newPopup(url) {
        popupWindow = window.open(url,'popupWindow','height=300,width400,left=10,top=10,resizable=yes ,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')

    }

</script>

  -->
<script type="text/javascript">
    $(document).ready(function(){
        $(".myModel").hide();
        $(".maxmize").hide();
        $(".maxmize2").hide();
        $("#helo").click(function () {
            $("#Model").show();});
        $("#helo2").click(function () {
            $("#ModelI").show();});
        $("#helo3").click(function () {
            $("#ModelII").show();});
        $("#helo4").click(function () {
            $("#ModelIII").show();});
        $("#helo5").click(function () {
            $("#Model4").show();});
        $("#helo6").click(function () {
            $("#Model6").show();});
        $("#helo7").click(function () {
            $("#Model7").show();});
        $("#helo8").click(function () {
            $("#Model8").show();});
        $("#helo9").click(function () {
            $("#Model9").show();});
        $("#heloreg").click(function () {
            $("#reg").show();});
        $("#helorep").click(function () {
            $("#rep").show();});
        $("#heloem").click(function () {
            $("#em").show();});
        $("#heloas").click(function () {
            $("#as").show();});
        $("#helowa").click(function () {
            $("#wa").show();});
        $("#heloin").click(function () {
            $("#in").show();});
        $("#helocal").click(function () {
            $("#cal").show();});



        $(".close").click(function () {
            $("#Model").fadeOut(0);
            $("#finish").hide(30);
            $("#finish2").hide(30);
        });
        $(".close2").click(function () {
            $("#ModelI").fadeOut(0);
            $("#finish3").hide(30);
            $("#finish4").hide(30);
        });
        $(".close3").click(function () {
            $("#ModelII").fadeOut(0);
            $("#finish5").hide(30);
            $("#finish6").hide(30);
        });
        $(".close4").click(function () {
            $("#ModelIII").fadeOut(0);
            $("#finish7").hide(30);
            $("#finish8").hide(30);
        });
        $(".close5").click(function () {
            $("#Model4").fadeOut(0);
            $("#finish9").hide(30);
            $("#finish10").hide(30);
        });
        $(".close6").click(function () {
            $("#Model6").fadeOut(0);
            $("#finish11").hide(30);
            $("#finish12").hide(30);
        });
        $(".close7").click(function () {
            $("#Model7").fadeOut(0);
            $("#finish13").hide(30);
            $("#finish14").hide(30);
        });
        $(".close8").click(function () {
            $("#Model8").fadeOut(0);
            $("#finish18").hide(30);
            $("#finish19").hide(30);
        });
        $(".close9").click(function () {
            $("#Model9").fadeOut(0);
            $("#finish20").hide(30);
            $("#finish21").hide(30);
        });
        $(".closereg").click(function () {
            $("#reg").fadeOut(0);
            $("#finishreg").hide(30);
            $("#finishregg").hide(30);
        });
        $(".closerep").click(function () {
            $("#rep").fadeOut(0);
            $("#finishrep").hide(30);
            $("#finishrepp").hide(30);
        });
        $(".closeem").click(function () {
            $("#em").fadeOut(0);
            $("#finishem").hide(30);
            $("#finishremm").hide(30);
        });
        $(".closeas").click(function () {
            $("#as").fadeOut(0);
            $("#finishas").hide(30);
            $("#finishass").hide(30);
        });
        $(".closewa").click(function () {
            $("#wa").fadeOut(0);
            $("#finishwa").hide(30);
            $("#finishwaa").hide(30);
        });
        $(".closein").click(function () {
            $("#in").fadeOut(0);
            $("#finishin").hide(30);
            $("#finishinn").hide(30);
        });
        $(".closecal").click(function () {
            $("#cal").fadeOut(0);
            $("#finishcal").hide(30);
            $("#finishcall").hide(30);
        });



        $(".resize").click(function () {

            $("#Model").animate({width:'50%',height:'50%',top:'25%',left:'25%'});
            $(this).hide();
            $(".maxmize").show();
        });
        $(".resize2").click(function () {

            $("#ModelI").animate({width:'50%',height:'50%',top:'25%',left:'25%'});
            $(this).hide();
            $(".maxmize2").show();
        });
        $(".resize3").click(function () {

            $("#ModelII").animate({width:'50%',height:'50%',top:'25%',left:'25%'});
            $(this).hide();
            $(".maxmize3").show();
        });
        $(".resize4").click(function () {

            $("#ModelIII").animate({width:'50%',height:'50%',top:'25%',left:'25%'});
            $(this).hide();
            $(".maxmize4").show();
        });
        $(".resize5").click(function () {

            $("#Model4").animate({width:'50%',height:'50%',top:'25%',left:'25%'});
            $(this).hide();
            $(".maxmize5").show();
        });
        $(".resize6").click(function () {

            $("#Model6").animate({width:'50%',height:'50%',top:'25%',left:'25%'});
            $(this).hide();
            $(".maxmize6").show();
        });
        $(".resize7").click(function () {

            $("#Model7").animate({width:'50%',height:'50%',top:'25%',left:'25%'});
            $(this).hide();
            $(".maxmize7").show();
        });
        $(".resize8").click(function () {

            $("#Model8").animate({width:'50%',height:'50%',top:'25%',left:'25%'});
            $(this).hide();
            $(".maxmize8").show();
        });
        $(".resize9").click(function () {

            $("#Model9").animate({width:'50%',height:'50%',top:'25%',left:'25%'});
            $(this).hide();
            $(".maxmize9").show();
        });
        $(".resizereg").click(function () {

            $("#reg").animate({width:'50%',height:'50%',top:'25%',left:'25%'});
            $(this).hide();
            $(".maxmizereg").show();
        });
        $(".resizerep").click(function () {

            $("#rep").animate({width:'50%',height:'50%',top:'25%',left:'25%'});
            $(this).hide();
            $(".maxmizerep").show();
        });
        $(".resizeem").click(function () {

            $("#em").animate({width:'50%',height:'50%',top:'25%',left:'25%'});
            $(this).hide();
            $(".maxmizeem").show();
        });
        $(".resizeas").click(function () {

            $("#as").animate({width:'50%',height:'50%',top:'25%',left:'25%'});
            $(this).hide();
            $(".maxmizeas").show();
        });
        $(".resizewa").click(function () {

            $("#wa").animate({width:'50%',height:'50%',top:'25%',left:'25%'});
            $(this).hide();
            $(".maxmizewa").show();
        });
        $(".resizein").click(function () {

            $("#in").animate({width:'50%',height:'50%',top:'25%',left:'25%'});
            $(this).hide();
            $(".maxmizein").show();
        });
        $(".resizecal").click(function () {

            $("#cal").animate({width:'50%',height:'50%',top:'25%',left:'25%'});
            $(this).hide();
            $(".maxmizecal").show();
        });


        $(".maxmize").click(function () {

            $(".myModel").animate({width:'100%',height:'93%',top:'0%',left:'0%'});
            $(this).hide();
            $(".resize").show();
        });
        $(".maxmize2").click(function () {

            $(".myModel").animate({width:'100%',height:'93%',top:'0%',left:'0%'});
            $(this).hide();
            $(".resize2").show();
        });
        $(".maxmize3").click(function () {

            $(".myModel").animate({width:'100%',height:'93%',top:'0%',left:'0%'});
            $(this).hide();
            $(".resize3").show();
        });
        $(".maxmize4").click(function () {

            $(".myModel").animate({width:'100%',height:'93%',top:'0%',left:'0%'});
            $(this).hide();
            $(".resize4").show();
        });
        $(".maxmize5").click(function () {

            $(".myModel").animate({width:'100%',height:'93%',top:'0%',left:'0%'});
            $(this).hide();
            $(".resize5").show();
        });
        $(".maxmize6").click(function () {

            $(".myModel").animate({width:'100%',height:'93%',top:'0%',left:'0%'});
            $(this).hide();
            $(".resize6").show();
        });
        $(".maxmize7").click(function () {

            $(".myModel").animate({width:'100%',height:'93%',top:'0%',left:'0%'});
            $(this).hide();
            $(".resize7").show();
        });
        $(".maxmize8").click(function () {

            $(".myModel").animate({width:'100%',height:'93%',top:'0%',left:'0%'});
            $(this).hide();
            $(".resize8").show();
        });
        $(".maxmize9").click(function () {

            $(".myModel").animate({width:'100%',height:'93%',top:'0%',left:'0%'});
            $(this).hide();
            $(".resize9").show();
        });
        $(".maxmizereg").click(function () {

            $(".myModel").animate({width:'100%',height:'93%',top:'0%',left:'0%'});
            $(this).hide();
            $(".resizereg").show();
        });
        $(".maxmizerep").click(function () {

            $(".myModel").animate({width:'100%',height:'93%',top:'0%',left:'0%'});
            $(this).hide();
            $(".resizerep").show();
        });
        $(".maxmizeem").click(function () {

            $(".myModel").animate({width:'100%',height:'93%',top:'0%',left:'0%'});
            $(this).hide();
            $(".resizeem").show();
        });
        $(".maxmizeas").click(function () {

            $(".myModel").animate({width:'100%',height:'93%',top:'0%',left:'0%'});
            $(this).hide();
            $(".resizeas").show();
        });
        $(".maxmizewa").click(function () {

            $(".myModel").animate({width:'100%',height:'93%',top:'0%',left:'0%'});
            $(this).hide();
            $(".resizewa").show();
        });
        $(".maxmizein").click(function () {

            $(".myModel").animate({width:'100%',height:'93%',top:'0%',left:'0%'});
            $(this).hide();
            $(".resizein").show();
        });
        $(".maxmizecal").click(function () {

            $(".myModel").animate({width:'100%',height:'93%',top:'0%',left:'0%'});
            $(this).hide();
            $(".resizecal").show();
        });




        $(".end").click(function () {

            $("#Model").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finish").show();
            $("#finish2").hide();
        });
        $(".end2").click(function () {

            $("#ModelI").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finish3").show();
            $("#finish4").hide();
        });
        $(".end3").click(function () {

            $("#ModelII").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finish5").show();
            $("#finish6").hide();
        });
        $(".end4").click(function () {

            $("#ModelIII").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finish7").show();
            $("#finish8").hide();
        });
        $(".end5").click(function () {

            $("#Model4").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finish9").show();
            $("#finish10").hide();
        });
        $(".end6").click(function () {

            $("#Model6").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finish11").show();
            $("#finish12").hide();
        });
        $(".end7").click(function () {

            $("#Model7").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finish13").show();
            $("#finish14").hide();
        });
        $(".end8").click(function () {

            $("#Model8").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finish18").show();
            $("#finish19").hide();
        });
        $(".end9").click(function () {

            $("#Model9").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finish20").show();
            $("#finish21").hide();
        });
        $(".endreg").click(function () {

            $("#reg").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finishreg").show();
            $("#finishregg").hide();
        });
        $(".endrep").click(function () {

            $("#rep").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finishrep").show();
            $("#finishrepp").hide();
        });
        $(".endem").click(function () {

            $("#em").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finishem").show();
            $("#finishemm").hide();
        });
        $(".endas").click(function () {

            $("#as").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finishas").show();
            $("#finishass").hide();
        });
        $(".endwa").click(function () {

            $("#wa").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finishwa").show();
            $("#finishwaa").hide();
        });
        $(".endin").click(function () {

            $("#in").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finishin").show();
            $("#finishinn").hide();
        });
        $(".endcal").click(function () {

            $("#cal").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finishcal").show();
            $("#finishcall").hide();
        });




        $("#finish").click(function () {

            $("#Model").animate({
                left:'0',
                right:'0',
                top:'0',
                bottom:'0',
                height: '93%',
                width: '100%'
            })
            $("#finish").hide();
            $("#finish2").show();
        });
        $("#finish2").click(function () {

            $("#Model").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finish2").hide();
            $("#finish").show();
        });
        $("#finish3").click(function () {

            $("#ModelI").animate({
                left:'0',
                right:'0',
                top:'0',
                bottom:'0',
                height: '93%',
                width: '100%'
            })
            $("#finish3").hide();
            $("#finish4").show();
        });
        $("#finish4").click(function () {

            $("#ModelI").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finish4").hide();
            $("#finish3").show();
        });
        $("#finish5").click(function () {

            $("#ModelII").animate({
                left:'0',
                right:'0',
                top:'0',
                bottom:'0',
                height: '93%',
                width: '100%'
            })
            $("#finish5").hide();
            $("#finish6").show();
        });
        $("#finish6").click(function () {

            $("#ModelII").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finish6").hide();
            $("#finish5").show();
        });
        $("#finish7").click(function () {

            $("#ModelIII").animate({
                left:'0',
                right:'0',
                top:'0',
                bottom:'0',
                height: '93%',
                width: '100%'
            })
            $("#finish7").hide();
            $("#finish8").show();
        });
        $("#finish8").click(function () {

            $("#ModelIII").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finish8").hide();
            $("#finish7").show();
        });
        $("#finish9").click(function () {

            $("#Model4").animate({
                left:'0',
                right:'0',
                top:'0',
                bottom:'0',
                height: '93%',
                width: '100%'
            })
            $("#finish9").hide();
            $("#finish10").show();
        });
        $("#finish10").click(function () {

            $("#Model4").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finish10").hide();
            $("#finish9").show();
        });
        $("#finish11").click(function () {

            $("#Model6").animate({
                left:'0',
                right:'0',
                top:'0',
                bottom:'0',
                height: '93%',
                width: '100%'
            })
            $("#finish11").hide();
            $("#finish12").show();
        });
        $("#finish12").click(function () {

            $("#Model6").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finish12").hide();
            $("#finish11").show();
        });
        $("#finish13").click(function () {

            $("#Model7").animate({
                left:'0',
                right:'0',
                top:'0',
                bottom:'0',
                height: '93%',
                width: '100%'
            })
            $("#finish13").hide();
            $("#finish14").show();
        });
        $("#finish14").click(function () {

            $("#Model7").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finish14").hide();
            $("#finish13").show();
        });
        $("#finish18").click(function () {

            $("#Model8").animate({
                left:'0',
                right:'0',
                top:'0',
                bottom:'0',
                height: '93%',
                width: '100%'
            })
            $("#finish18").hide();
            $("#finish19").show();
        });

        $("#finish19").click(function () {

            $("#Model8").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finish19").hide();
            $("#finish18").show();
        });
        $("#finish20").click(function () {

            $("#Model9").animate({
                left:'0',
                right:'0',
                top:'0',
                bottom:'0',
                height: '93%',
                width: '100%'
            })
            $("#finish20").hide();
            $("#finish21").show();
        });
        $("#finish21").click(function () {

            $("#Model9").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finish21").hide();
            $("#finish20").show();
        });
        $("#finishreg").click(function () {

            $("#reg").animate({
                left:'0',
                right:'0',
                top:'0',
                bottom:'0',
                height: '93%',
                width: '100%'
            })
            $("#finishreg").hide();
            $("#finishregg").show();
        });
        $("#finishregg").click(function () {

            $("#reg").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finishregg").hide();
            $("#finishreg").show();
        });
        $("#finishrep").click(function () {

            $("#rep").animate({
                left:'0',
                right:'0',
                top:'0',
                bottom:'0',
                height: '93%',
                width: '100%'
            })
            $("#finishrep").hide();
            $("#finishrepp").show();
        });
        $("#finishrepp").click(function () {

            $("#rep").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finishrepp").hide();
            $("#finishrep").show();
        });
        $("#finishem").click(function () {

            $("#em").animate({
                left:'0',
                right:'0',
                top:'0',
                bottom:'0',
                height: '93%',
                width: '100%'
            })
            $("#finishem").hide();
            $("#finishemm").show();
        });
        $("#finishemm").click(function () {

            $("#em").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finishemm").hide();
            $("#finishem").show();
        });
        $("#finishas").click(function () {

            $("#as").animate({
                left:'0',
                right:'0',
                top:'0',
                bottom:'0',
                height: '93%',
                width: '100%'
            })
            $("#finishas").hide();
            $("#finishass").show();
        });
        $("#finishass").click(function () {

            $("#as").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finishass").hide();
            $("#finishas").show();
        });
        $("#finishwa").click(function () {

            $("#wa").animate({
                left:'0',
                right:'0',
                top:'0',
                bottom:'0',
                height: '93%',
                width: '100%'
            })
            $("#finishwa").hide();
            $("#finishwaa").show();
        });
        $("#finishwaa").click(function () {

            $("#wa").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finishwaa").hide();
            $("#finishwa").show();
        });
        $("#finishin").click(function () {

            $("#in").animate({
                left:'0',
                right:'0',
                top:'0',
                bottom:'0',
                height: '93%',
                width: '100%'
            })
            $("#finishin").hide();
            $("#finishinn").show();
        });
        $("#finishinn").click(function () {

            $("#in").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finishinn").hide();
            $("#finishin").show();
        });
        $("#finishcal").click(function () {

            $("#cal").animate({
                left:'0',
                right:'0',
                top:'0',
                bottom:'0',
                height: '93%',
                width: '100%'
            })
            $("#finishcal").hide();
            $("#finishcall").show();
        });
        $("#finishcall").click(function () {

            $("#cal").animate({
                left:'250px',
                right:'100%',
                top:'100%',
                bottom:'250px',
                height: '-=100%',
                width: '-=100%'
            })
            $("#finishcall").hide();
            $("#finishcal").show();
        });








    })



</script>

</body>
</html>
