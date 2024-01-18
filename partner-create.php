<?php

include './backends/includes.php';


$slidersor = $db->prepare("SELECT * FROM partners where partner_id=:partner_id ORDER BY partner_id DESC");
$slidersor->execute(array(
 'partner_id' => $_GET['partner_id']
));
$slidercek = $slidersor->fetch(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="tr">

<head>

 <meta charset="utf-8" />
 <title>Partner Create |Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta content="Desc" name="description" />
 <meta content="AlpSelcuk" name="author" />
 <!-- App favicon -->
 <link rel="shortcut icon" href="assets/images/favicon.ico">

 <!-- Bootstrap Css -->
 <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
 <!-- Icons Css -->
 <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
 <!-- App Css-->
 <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body data-sidebar="dark" onload="setBefore()">
 <!-- Begin page -->
 <div id="layout-wrapper">

  <?php

  include './backends/header.php'

  ?>
  <!-- Left Sidebar End -->
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  <div class="main-content">

   <div class="page-content">
    <div class="container-fluid">

     <!-- start page title -->
     <div class="row">
      <div class="col-12">
       <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0 font-size-18">Slider Create</h4>

        <div class="page-title-right">
         <ol class="breadcrumb m-0">
          <li class="breadcrumb-item"><a href="javascript: void(0);">Slider</a></li>
          <li class="breadcrumb-item active">Slider Create</li>
         </ol>
        </div>

       </div>
      </div>
     </div>
     <!-- end page title -->
     <div class="row">
      <div class="col-lg-12">
       <div class="card">
        <div class="card-body">
         <div class="pt-3">
          <div class="row justify-content-center">
           <div class="col-xl-8">
            <form action="./backends/islem.php" method="post" enctype="multipart/form-data">
             <div>

              <input type="hidden" id="partner_Users" value="<?= $slidercek['partner_person'] ?>">

              <div class="inner-repeater mb-4">
               <div class="inner form-group mb-0 row">
                <label class="col-form-label col-lg-2">Partner Name :</label>
                <div data-repeater-item class="inner col-lg-10 ms-md-auto">
                 <div class="mb-3 row align-items-center">
                  <input id="projectname" name="partner_title" type="text" class="form-control" value="<?= $slidercek['partner_title'] ?>" placeholder="Enter Partner Name...">
                 </div>
                </div>
               </div>
              </div>

              <div class="inner-repeater mb-4">
               <div class="inner form-group mb-0 row">
                <label class="col-form-label col-lg-2">Description :</label>
                <div data-repeater-item class="inner col-lg-10 ms-md-auto">
                 <div class="mb-3 row align-items-center">
                  <textarea name="partner_desc" style="height:700px;" class="editor" id="" cols="30" rows="10">
                                                                <?= $slidercek['partner_desc'] ?></textarea>
                 </div>
                </div>
               </div>
              </div>



              <div class="inner-repeater mb-4">
               <div class="inner form-group mb-0 row">
                <label class="col-form-label col-lg-2">Email Address :</label>
                <div data-repeater-item class="inner col-lg-10 ms-md-auto">
                 <div class="mb-3 row align-items-center">
                  <input id="projectname" name="partner_mail" type="text" class="form-control" value="<?= $slidercek['partner_mail'] ?>" placeholder="Enter Partner Mail...">
                 </div>
                </div>
               </div>
              </div>


              <div class="inner-repeater mb-4">
               <div class="inner form-group mb-0 row">
                <label class="col-form-label col-lg-2">Thumbnail :</label>
                <div data-repeater-item class="inner col-lg-10 ms-md-auto">
                 <div class="mb-3 row align-items-center">
                  <input type="file" name="partner_thumbnail" accept="image/png, image/jpeg">
                 </div>
                </div>
               </div>
              </div>


              <div class="inner-repeater mb-4">
               <div class="inner form-group mb-0 row">
                <label class="col-form-label col-lg-2">Add Person to Partner</label>
                <div data-repeater-item class="inner col-lg-10 ms-md-auto">
                 <div class="mb-3 row align-items-center">
                  <div class="col-md-12">

                   <input type="text" onkeyup="showResult(this.value)" class="inner form-control" placeholder="Name..." />
                  </div>
                  <div class="col-md-12">
                   <div id="livesearch"></div>
                  </div>
                  <input type="hidden" name="member" id="teamMember" value="<?= $slidercek['partner_person'] ?>">

                  <?php if ($slidercek['partner_person'] != null) { ?>
                   <div class="col-md-12">
                    <div class="row mt-5">
                     <?php
                     $users = explode(',', $slidercek['partner_person']);

                     for ($i = 0; $i < count($users); $i++) {
                      # code...

                      $partnersUser = $db->prepare("SELECT * FROM kullanici where kullanici_id=:kullanici_id");
                      $partnersUser->execute(array(
                       'kullanici_id' => $users[$i]
                      ));
                      $partnerUsercek = $partnersUser->fetch(PDO::FETCH_ASSOC);
                     ?>


                      <div class="col-md-4 memberSelection" style="display: flex; flex-direction:column; align-items:center; justify-content:center;" id="member<?= $partnerUsercek['kullanici_id'] ?>">
                       <div>
                        <img src="../admin/user.png" alt="" style="height: 50px; width:50px; border-radius:100%;" srcset="">
                       </div>
                       <input type="hidden" id="member_id" value="<?= $partnerUsercek['kullanici_id'] ?>">
                       <div class="">
                        <p> <?= $partnerUsercek['kullanici_adsoyad'] ?></p>
                       </div>
                       <div class="">
                        <div onclick="deselectPerson(<?= $partnerUsercek['kullanici_id'] ?>)">Remove</div>
                       </div>
                      </div>

                     <?php }
                     ?>
                    </div>
                   </div>
                  <?php } ?>
                 </div>
                </div>
               </div>
              </div>


              <input type="hidden" name="partner_id" value="<?= $_GET['partner_id'] ?>">
              <button class="btn btn-primary" type="submit" name="<?php if ($_GET['partner_id'] == null) {
                                                                   echo 'PartnerCreate';
                                                                  } else {
                                                                   echo 'PartnerUpdate';
                                                                   # code...
                                                                  }
                                                                  ?>"><?php if ($_GET['partner_id'] == null) {
                                                                       echo 'Create';
                                                                      } else {
                                                                       echo 'Update';
                                                                       # code...
                                                                      }
                                                                      ?></button>
             </div>
            </form>
           </div>
          </div>
         </div>
        </div>
        <!-- end card body -->
       </div>
       <!-- end card -->
      </div>
      <!-- end col -->
     </div>
     <!-- end row -->

    </div> <!-- container-fluid -->
   </div>
   <!-- End Page-content -->


   <?php include './backends/footer.php' ?>
  </div>
  <!-- end main content-->

 </div>
 <!-- END layout-wrapper -->

 <!-- Right Sidebar -->

 <!-- /Right-bar -->

 <!-- Right bar overlay-->
 <div class="rightbar-overlay"></div>
 <!-- JAVASCRIPT -->
 <script>
  function showResult(str) {
   console.log(str);
   if (str.length == 0) {
    document.getElementById("livesearch").innerHTML = "";
    document.getElementById("livesearch").style.border = "0px";
    return;
   }
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("livesearch").innerHTML = this.responseText;
     document.getElementById("livesearch").style.border = "0px";
    }
   }
   xmlhttp.open("GET", "./backends/livesearchs.php?q=" + str + "&id=<?= $kullanicicek['kullanici_id'] ?>", true);
   xmlhttp.send();
  }
 </script>

 <script>
  <?php if ($slidercek['partner_person'] != null) {
   # code...
  ?>
   var list = [<?= $slidercek['partner_person'] ?>, ];
  <?php } else {
  ?>
   var list = [];
  <?php  } ?>
  var partnersList = [];


  function deselectPerson(str) {
   console.log('anananan');
   var personMember = document.getElementById("teamMember");
   if (list.indexOf(str) !== -1) {
    list.splice(list.indexOf(str), 1);
   }

   var memberDisplay = document.getElementById('member' + str);
   memberDisplay.style.display = 'none';

   personMember.value = list.join(',');
  }


  function selectPerson(str) {

   var personMember = document.getElementById("teamMember");
   var memberSelection = document.getElementById("memberSelection" + str);

   if (list.indexOf(str) !== -1) {
    list.splice(list.indexOf(str), 1);
    partnersList.splice(partnersList.indexOf(memberSelection), 1);
   } else {
    list.push(str);
    partnersList.push(memberSelection);
    if (personMember.value == '') {
     personMember.value = str;
    } else {
     personMember.value = personMember.value + ',' + str;
    }
   }
   console.log(list);
   console.log(partnersList);

   if (memberSelection.classList.contains("active")) {
    memberSelection.classList.remove("active");
   } else {
    memberSelection.classList.add("active");
   }

   personMember.value = list.join(',');
  }
 </script>
 <script src="assets/libs/jquery/jquery.min.js"></script>
 <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
 <script>
  var allEditors = document.querySelectorAll('.editor');
  for (var i = 0; i < allEditors.length; ++i) {
   ClassicEditor.create(allEditors[i]);
  }
 </script>
 <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/libs/metismenu/metisMenu.min.js"></script>
 <script src="assets/libs/simplebar/simplebar.min.js"></script>
 <script src="assets/libs/node-waves/waves.min.js"></script>
 <script src="assets/js/app.js"></script>

</body>

</html>