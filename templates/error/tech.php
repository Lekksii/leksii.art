<div class="block-pos-center technical-issues">

    <script>
        function modal(){
            $("#what").modal("show");
        }
    </script>

    <div class="container-tech">
    <div class="alert-window-tech">
        <h3 class="border-b-nopadding p-bt-half minline-minus">{{langKey('tech_title')}}</h3>
        <h1 class="pb-1" style="font-size: 36px;">🛠</h1>
        <p v-html="langKey('tech_description')" class="f-ua fs13"></p>
        <a class="f-ua fs12 mt-1" href="#" onclick="modal()">{{langKey('tech_error_button_info')}}</a>  
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade what" id="what" tabindex="-1" aria-labelledby="what" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title f-ua fw700" id="myModalLabel">{{langKey('tech_error_button_info')}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body f-ua fs12">
        {{langKey('tech_info_description')}}
        </div>
        <div class="modal-footer">
              <a class="f-ua fs13 alert-btn" onclick="$('#what').modal('hide');">{{langKey('okay')}}</a>  
        </div>
      </div>
      </div>
    </div>

      </div>