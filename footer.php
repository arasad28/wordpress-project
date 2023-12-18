
<div class="main_wrap footer_bg">
<div class="wrap">

<footer>
	<div id="footer">
		<p> &copy; All Right Reserved By- A R Asad</p>
	</div>
</footer>
</div>

</div>







<!--

<div class="main_wrap">
<div class="wrap">
</div>

</div>


-->

<script>
	
var interval;
function startTicker()
{
$("#ticker article:first").slideUp(function(){
$(this).appendTo($("#content")).slideDown();
});
}
function stopTicker()
{
clearInterval(interval);
}
$(document).ready(function(){
interval=setInterval(startTicker,2000);
$("#content").hover(function(){
stopTicker();},
function(){
interval=setInterval(startTicker,2000);
});
});

</script>






    
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
    <?php wp_footer(); ?>
</body>
</html>