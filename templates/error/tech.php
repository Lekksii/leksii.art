<section class="block-pos-center technical-issues">

    <script>
        function modal(){
            $("#what").modal("show");
        }
    </script>

    <div class="container-tech">
    <div class="alert-window-tech">
        <h3 class="border-b-nopadding p-bt-half minline-minus">Технічне обслуговування</h3>
        <h1 class="pb-1" style="font-size: 36px;">🛠</h1>
        <p class="f-ua fs13">На данний момент сайт знаходиться<br>на технічному обслуговуванні.<br><br>Приносимо вибачення за тимчасові незручності. 😒</p>
        <a class="f-ua fs12 mt-1" href="#" onclick="modal()">Що робити?</a>  
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade what" id="what" tabindex="-1" aria-labelledby="what" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title f-ua fw700" id="myModalLabel">Що робити?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body f-ua fs12">
        Чекати, поки веб-розробник завершить оновлення сервісу.
      </div>
      <div class="modal-footer">
            <a class="f-ua fs13 alert-btn" onclick="$('#what').modal('hide');">Добре</a>  
      </div>
    </div>
  </div>
</div>
</section>