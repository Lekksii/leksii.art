<section class="block-pos-center technical-issues">

    <script>
        function modal(){
            $("#what").modal("show");
        }
    </script>

    <div class="container-tech">
    <div class="alert-window-tech">
        <h3 class="border-b-nopadding p-bt-half minline-minus">Йой, шось сталось...</h3>
        <h1 class="pb-1" style="font-size: 36px;">⛔️</h1>
        <p class="f-ua fs15">Якась помилка, вже шось наклацали. 😒<br></p>
        <a class="f-ua fs12 mt-1" href="#" onclick="modal()">Що робити?</a>  
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade what" id="what" tabindex="-1" aria-labelledby="what" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw700 fs14 f-ua" id="myModalLabel">Що робити?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body f-ua fs12">
        Ну тут схоже, що Ви ввели невірну адресу, або зайшли на сторінку, якої вже не існує. Бажано перейти на головну сторінку сайту.
      </div>
      <div class="modal-footer">
            <a class="f-ua fs12 alert-btn" href="/">На головну</a>  
            <a class="f-ua fs12 alert-btn" onclick="$('#what').modal('hide');">Добре</a>  
      </div>
    </div>
  </div>
</div>
</section>