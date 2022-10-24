<section>

	<style>
	/* Let's not animate the contents of modal windows */
	.no-anim {
		-webkit-animation: none !important;
		-moz-animation: none !important;
		-o-animation: none !important;
		-ms-animation: none !important;
		animation: none !important;
	}
	</style>

	
	
<div>
	<div class="modal fade" id="hacker" tabindex="-1" role="dialog" aria-labelledby="wipLabel" aria-hidden="true">
	    <div class="modal-dialog modal-sm modal-dialog-centered" style="height:auto" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="no-anim modal-title" id="wipLabel">
	                <strong>Попався</strong>❗️</h5>
	                <a href="#" class="no-anim close" data-bs-dismiss="modal" data-dismiss="modal" aria-label="Close">
	                <span aria-hidden="true">×</span></a>
	                </div>
	                <div class="modal-body" id="wip_body">А шо це ми тут балуємся, га?🌚<br><br>Анус собі сбережи, кацкер))0)</div>
	                <div class="modal-footer">
	                    <div class="mbr-section-btn">
	                        <a href="#" class="no-anim btn btn-secondary display-4" data-bs-dismiss="modal" data-dismiss="modal">Добре</a>
	                    </div>
	                </div>
	            </div>
	        </div>
</div>
<script> 
document.addEventListener("DOMContentLoaded", function() { 
  if(typeof jQuery === "function") {
    $("#wip").on("hidden.bs.modal", function () { 
      var html = $( "#wip_body" ).html(); 
      $( "#wip_body" ).empty(); 
      $( "#wip_body" ).append(html); 
    }) 
  } else { 
      var mdw = document.getElementById("#wip") 
      mdw.addEventListener("hidden.bs.modal", function(event) { 
        mdw.innerHTML = mdw.innerHTML; 
      }); 
  } 
}); 
</script></div>

	<script>
	if (typeof OpenModal === 'undefined') {
		OpenModal = function(modalName) {
			if(typeof jQuery === "function") {
				if ($('#' + modalName).length)
					$('#' + modalName).modal('show');
				else
					alert("Sorry, but there is no modal for " + modalName);
			} else {
				let mdw = new bootstrap.Modal(document.getElementById(modalName), {});
				mdw.show();
			}
		}
	}

	function modalSetCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+ d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}

	function modalGetCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i <ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}
	</script>

</section>