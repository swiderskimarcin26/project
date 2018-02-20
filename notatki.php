<?php

header('Content-Type: text/html; charset=utf-8');
   
   session_start();
//    unset($_SESSION['rihanna']);
//    echo '<pre>';
//    var_dump($_SESSION, $_POST);
//    echo '</pre>';
   
   if (isset($_SESSION['rihanna']) && $_SESSION['rihanna'] !== NULL) {
       $systemPage = $_GET['page'];
       if (!isset($_GET['page'])) {
           $systemPage = 'homepage';
       }
       //
       require_once 'loader.php';
   }
   
   else {
       
       // NIEZALOGOWANY
       
       if (isset($_POST['userLogin'])) {
           // DOSZŁO DO WYSŁANIA FORMULARZA
           
           if ($_POST['userLogin'] === 'justin') {
               // UŻYTKOWNIK ISTNIEJE
               if ($_POST['userPassword'] === 'haslo123') {
                   $_SESSION['rihanna']['username'] = $_POST['userLogin'];
                   $_SESSION['rihanna']['loginTime'] = date('Y-m-d H:i:s');
                   $_SESSION['rihanna']['lastActiveTime'] = time();
                   header('HTTP/1.1 301 Moved Permanently');
                   header('Location: /phpjs1zab/admin/');
               }
               else {
                   echo 'może istniejesz, ale to w Twoim przypadku iluzja<br/>';
                   include_once 'tpl/loginForm.php';
               }
           }
           
           else {
               echo 'nie istniejesz<br/>';
               include_once 'tpl/loginForm.php';
           }
           
       }
       
       else {
           // NIE DOSZŁO DO WYSŁANIA FORMULARZA
           include_once 'tpl/loginForm.php';
       }
<div id="accordion">
 <div class="card">
   <div class="card-header" id="headingOne">
     <h5 class="mb-0">
       <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         Collapsible Group Item #1
       </button>
     </h5>
   </div>

   <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
     <div class="card-body">
       Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
     </div>
   </div>
 </div>
 <div class="card">
   <div class="card-header" id="headingTwo">
     <h5 class="mb-0">
       <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         Collapsible Group Item #2
       </button>
     </h5>
   </div>
   <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
     <div class="card-body">
       Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
     </div>
   </div>
 </div>
 <div class="card">
   <div class="card-header" id="headingThree">
     <h5 class="mb-0">
       <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Collapsible Group Item #3
       </button>
     </h5>
   </div>
   <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
     <div class="card-body">
       Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
     </div>
   </div>
 </div>
</div>
        
        <p>
 <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
 <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
 <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
</p>
<div class="row">
 <div class="col">
   <div class="collapse multi-collapse" id="multiCollapseExample1">
     <div class="card card-body">
       Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
     </div>
   </div>
 </div>
 <div class="col">
   <div class="collapse multi-collapse" id="multiCollapseExample2">
     <div class="card card-body">
       Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
     </div>
   </div>
 </div>
</div>
        