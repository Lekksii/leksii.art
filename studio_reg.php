<!DOCTYPE html>
<html lang="uk"   >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="/assets/images/camfavicon.png" type="image/x-icon">
  <meta name="description" content="Реєстрація новго адміністратора">
  
  
  <title>Leksii.ART Registration</title>
  <?php include('templates/head.php'); ?>
</head>
<body>

<!-- Analytics -->
<?php include('templates/google_anal.php'); ?>

<?php include('templates/anticopy.php'); ?>

<?php include('templates/custom_menu/reg_menu.php'); ?>
  


<section data-bs-version="5.1" class="header2 cid-sVKU857YtH mbr-fullscreen" id="header2-1m">

    <script>
	    $('body').on('input', '.input-number', function(){
	    this.value = this.value.replace(/[^0-9]/g, '');
        });
	</script>

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(4, 6, 5);"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2"><strong>NEW </strong>PHOTOGRAPHER<br></h1>
                <h2 class="mbr-section-subtitle mbr-fonts-style mb-3 display-4">Реєстрація нового адміністратора</h2>
                
                
            </div>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="/code/admin_reg.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="v65Go92DPUKoIHP2C3Ouq2sLdae6+QXXLFHHLizZ28rdf9COZDJXnvq8Nw+DJspr86j70YwBWAebwqjT8/AX+tSU7iwg7G48cr6JZpFbLQkl7WZ+Dd6DQO3jAyKkro9z">
                    <div class="col-md col-sm-12 form-group mb-3" data-for="code">
                            <input type="text" name="code" maxlength="4" placeholder="Код доступу" data-form-field="coe" class="form-control" value="" id="code-header2-1m" require>
                        </div>
                    <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="name" placeholder="Ім'я" data-form-field="name" class="form-control" value="" id="name-header2-1m" require>
                        </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><button type="submit" class="btn btn-primary display-4">Відправити</button></div>
                    
                </form>
                
            </div>
        </div>
    </div>
</section>

<?php include('templates/foo_trap.php'); ?>


<?php include('templates/scroll_top.php'); ?>
</body>
</html>