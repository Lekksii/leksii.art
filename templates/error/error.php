<div class="block-pos-center technical-issues">

    <script>
        function modal(){
            $("#what").modal("show");
        }
    </script>

    <div class="container-tech">
    <div class="alert-window-tech">
        <h3 class="border-b-nopadding p-bt-half minline-minus">{{langKey('error_title')}}</h3>
        <h1 class="pb-1" style="font-size: 36px;">⛔️</h1>
        <p v-html="langKey('error_description')" class="f-ua fs15">error.description<br></p>
        <a class="f-ua fs12 mt-1" href="#" onclick="modal()">{{langKey('tech_error_button_info')}}</a>  
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade what" id="what" tabindex="-1" aria-labelledby="what" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw700 fs14 f-ua" id="myModalLabel">{{langKey('tech_error_button_info')}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body f-ua fs12">
      {{langKey('error_info_description')}}
      </div>
      <div class="modal-footer">
            <a class="f-ua fs12 alert-btn" href="/">{{langKey('back')}}</a>  
            <a class="f-ua fs12 alert-btn" onclick="$('#what').modal('hide');">{{langKey('okay')}}</a>  
      </div>
    </div>
  </div>
</div>


      </div>