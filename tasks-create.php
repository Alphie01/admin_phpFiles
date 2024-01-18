<?php

include './backends/includes.php'

?>

<!doctype html>
<html lang="tr">

<head>

    <meta charset="utf-8" />
    <title>Create Task |Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Desc" name="description" />
    <meta content="AlpSelcuk" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- datepicker css -->
    <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- dropzone css -->
    <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <style>
        .box {

            text-align: center;
            padding-top: 15px;
            transition: .5s;
            padding-bottom: 15px;
            border-radius: 15;
            border: solid 1px;
        }

        .box.red {
            border-color: red;
        }

        .box.yellow {
            border-color: orange;
        }

        .box.green {
            border-color: green;
        }

        .box.red:hover,
        .box.red.active {
            transition: .5s;
            background-color: red;
            color: white;
        }

        .box.yellow:hover,
        .box.yellow.active {
            color: white;
            transition: .5s;
            background-color: orange;
        }

        .box.green:hover,
        .box.green.active {
            color: white;
            transition: .5s;
            background-color: green;
        }
    </style>
</head>

<body data-sidebar="dark">
    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php

        include './backends/header.php';

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
                                <h4 class="mb-sm-0 font-size-18">Add To-Do List
                                    <?php if ($_GET['durum'] == 'ok') {
                                        # code...
                                    ?>
                                        <span style="color:green;"> - Added to the to-do list.</span>
                                    <?php }
                                    if ($_GET['durum'] == 'no') {
                                        # code...
                                    ?>
                                        <span style="color:red;"> - There is a problem. It has not been added to the to-do list.</span>
                                    <?php } ?>
                                </h4>

                                


                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Create New Project</h4>
                                    <form action="./backends/islem.php" method="post">
                                        <div class="outer">
                                            <div>
                                                <div class="form-group row mb-4">
                                                    <label for="taskname" class="col-form-label col-lg-2">Title</label>
                                                    <div class="col-lg-10">
                                                        <input id="taskname" name="todo_title" type="text" class="form-control" placeholder="To-Do Title...">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label col-lg-2">Description</label>
                                                    <div class="col-lg-10">
                                                        <textarea name="todo_content" id="editor" style="width:100%;"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label col-lg-2">Deadline</label>
                                                    <div class="col-lg-10">
                                                        <div class="input-daterange input-group" data-provide="datepicker">
                                                            <input type="text" value="<?= date("d.m.Y") ?>" disabled class="form-control" placeholder="Start Date" name="start" />
                                                            <input type="date" name="todo_deadline" class="form-control" placeholder="End Date" name="end" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="inner-repeater mb-4">
                                                    <div class="inner form-group mb-0 row">
                                                        <label class="col-form-label col-lg-2">Add Person to Your To-Do</label>
                                                        <div data-repeater-item class="inner col-lg-10 ms-md-auto">
                                                            <div class="mb-3 row align-items-center">
                                                                <div class="col-md-12">

                                                                    <input type="text" onkeyup="showResult(this.value)" class="inner form-control" placeholder="İsim..." />
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div id="livesearch"></div>
                                                                </div>
                                                                <input type="hidden" name="member" id="teamMember">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label for="taskbudget" class="col-form-label col-lg-2">Importance level</label>
                                                    <div class="col-lg-3 box red">More Important</div>
                                                    <div class="col-lg-3 box yellow">Important</div>
                                                    <div class="col-lg-3 box green">Less Important</div>
                                                    <input type="hidden" name="todo_important" id="todo_important">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="todo_user" value="<?= $kullanicicek['kullanici_id'] ?>">
                                        <div class="row justify-content-end">
                                            <div class="col-lg-10">
                                                <button type="submit" name="todo_ekle" name class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">



                                </div>
                            </div>
                        </div>
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
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>


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
            xmlhttp.open("GET", "./backends/livesearchs.php?q=" + str + "&id=<?=$kullanicicek['kullanici_id'] ?>", true);
            xmlhttp.send();
        }
    </script>


    <script>
        var list = [<?=$kullanicicek['kullanici_id'] ?>,];

        function selectPerson(str) {

            var personMember = document.getElementById("teamMember");
            var memberSelection = document.getElementById("memberSelection" + str);
            if (list.indexOf(str) !== -1) {
                list.splice(list.indexOf(str), 1);
            } else {
                list.push(str);
                if (personMember.value == '') {
                    personMember.value = str;
                } else {
                    personMember.value = personMember.value + ',' + str;
                }
            }
            console.log(list);

            if (memberSelection.classList.contains("active")) {
                memberSelection.classList.remove("active");
            } else {
                memberSelection.classList.add("active");
            }

            personMember.value = list.join(',');
        }
    </script>

    <script>
        const button_red = document.querySelector(".red");
        var todo_important = document.getElementById("todo_important");

        button_red.addEventListener("click", () => {
            if (button_red.classList.contains("active")) {
                button_red.classList.remove("active");
            } else {
                todo_important.value = 3;
                console.log(todo_important.value);
                button_yellow.classList.remove("active");
                button_green.classList.remove("active");
                button_red.classList.add("active");
            }
        });

        const button_yellow = document.querySelector(".yellow");

        button_yellow.addEventListener("click", () => {
            if (button_yellow.classList.contains("active")) {
                button_yellow.classList.remove("active");
            } else {
                todo_important.value = 2;
                console.log(todo_important.value);
                button_red.classList.remove("active");
                button_green.classList.remove("active");
                button_yellow.classList.add("active");
            }
        });

        const button_green = document.querySelector(".green");

        button_green.addEventListener("click", () => {
            if (button_green.classList.contains("active")) {
                button_green.classList.remove("active");
            } else {
                todo_important.value = 1;
                console.log(todo_important.value);
                button_red.classList.remove("active");
                button_yellow.classList.remove("active");
                button_green.classList.add("active");
            }
        });
    </script>
    <!-- bootstrap datepicker -->
    <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <!--tinymce js-->
    <script src="assets/libs/tinymce/tinymce.min.js"></script>

    <!-- form repeater js -->
    <script src="assets/libs/jquery.repeater/jquery.repeater.min.js"></script>
    <!-- dropzone plugin -->
    <script src="assets/libs/dropzone/min/dropzone.min.js"></script>
    <script src="assets/js/pages/task-create.init.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>