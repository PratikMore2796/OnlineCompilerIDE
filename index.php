<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>
            Pr@tik More IDE
        </title>
        <meta name="description" content="This Compiler is created by Pratik More in 2021">
        <meta name="Author" content="Pratik More">
        <meta name="keywords" content="Pratik More Compiler, Compiler By Pratik More, Pratik More Projects,Compiler Project,Web Developer in Barrie Ontario Canada,
        Pratik More Web Developer, Pratik More Portfolio,Pratik More Project, online editor, php online editor, nodejs online editor, python online editor, c online editor,
        c++ online editor ">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap-grid.css" type="text/css">
        <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.rtl.css" type="text/css">
        <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap-grid.rtl.css" type="text/css">
        <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap-reboot.css" type="text/css">
        <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap-reboot.rtl.css" type="text/css">
        <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap-utilities.css" type="text/css">
        <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap-utilities.rtl.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/preloader.css" type="text/css">
    </head>
    <body>

        <div class="loader" id="loader">
            <div class="main-div">
                <div class="center_div">
                    <div class="rot"></div>
                    <h1 class="loading-font">loading....</h1>
                </div>
            </div>
        </div>
        <section>
            <div class="container-fluid darkmode" id="darkmode">
                <h1>Welcome to Pratik More's Editor</h1>
                <i onclick="switchmode()" class="fa fa-moon-o" style="font-size:36px" id="moon"></i>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3" >
                        <select id="languages" class="languages form-control" onchange="changeLanguage()">
                            <option> Select Language </option>
                            <option value="c"> C </option>
                            <option value="cpp"> C++ </option>
                            <option value="php"> PHP </option>
                            <option value="python"> Python </option>
                            <option value="node"> NodeJS </option>
                        </select>
                        <div class="container output"  style="background-color: white; color: black">
                            <h1>Output will display here</h1>
                            <p><h4 id="output"></h4></p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="container-fluid editor" id="editor"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <button class="btn btn-success form-control" onclick="executeCode()">Run</button>
                    </div>
                    <div class="col">
                        <h1>Developed and Created By Pr@tik More</h1>
                    </div>
                </div>
            </div>
        </section>

        <footer>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="js/lib/ace.js"></script>
                <script src="js/lib/theme-monokai.js"></script>
                <script src="js/main.js"></script>
        </footer>
        <script rel="script" src="js/main.js"></script>
        <script rel="script" src="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
        <script rel="script" src="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.esm.js"></script>
        <script rel="script" src="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
 <script>
     function switchmode() {
        var element = document.body;
        element.classList.toggle("lightmode");
     }

 </script>

    </body>

</html>