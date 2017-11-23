<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?=TITULO?></title>
  </head>
  <body>

    <!--TOPO DO SITE-->
    <div class="container">
      <h1>Este é o Topo!</h1>
      <a href="<?=BASE_URL?>">Home</a> // <a href="<?=BASE_URL?>empresa">Empresa</a>
      <hr/>
    </div>
    <!--//TOPO DO SITE-->

    <?php $this->loadViewInTemplate($viewName, $viewData); ?>

      <!--FOOTER-->
      <hr/>
      <div class="container">
        <h1>Este e o Footer</h1>
      </div>
      <!--//FOOTER-->

  </body>
</html>
