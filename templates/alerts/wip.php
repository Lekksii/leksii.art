<section class="mbr-section" id="witsec-modal-window-block-d" data-rv-view="720">
	
<div>
<div class="modal fade" id="in-dev" tabindex="-1" role="dialog" aria-labelledby="in-devLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" style="height:auto" role="document">
        <div class="modal-content"><div class="modal-header">
            <h5 class="no-anim modal-title" id="in-devLabel"><strong>Що це таке?</strong> 🤔</h5>
            <a href="#" class="no-anim close" data-bs-dismiss="modal" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </a>
            </div>
            <div class="modal-body" id="in-dev_body">Можливо розробник сайту зараз робить новий апдейт, або ж пише правки минулої версії сторіки, що була на цьому місці, тому просто чекаємо, коли все стане на свої місця.<br><br>
            <strong>Увага</strong>❗️<br>Сайт все ще в розробці 🌚</div>
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
    $("#in-dev").on("hidden.bs.modal", function () { 
      var html = $( "#in-dev_body" ).html(); 
      $( "#in-dev_body" ).empty(); 
      $( "#in-dev_body" ).append(html); 
    }) 
  } else { 
      var mdw = document.getElementById("#in-dev") 
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