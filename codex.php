<?php

  //starting session
//  session_start();
//  $pid = $_GET['pid'];
//  include "php_only/codex_Question.php";

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Compile your code </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/codex.css">
</head>
<body class="body">
  <!-- This is a pop up card for displaying run's output -->
  <div class="modal fade" id="runButton" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Sample Testcase's Output</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"> Input: </h5>
            <p class"card-text"> </p>
          </div>
        </div>
        <div class="card" style="margin-top:10px;">
          <div class="card-body">
            <h5 class="card-title"> Output: </h5>
            <p class"card-text"> 123456 </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- This is a pop up card for taking user ip -->
<div class="modal fade" id="customIP" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Enter Testcase's Input</h5>
      <button type="button" class="close" data-dismiss="modal">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Enter Your Testcase</span>
  </div>
  <textarea class="form-control" aria-label="With textarea" rows="10"></textarea>
</div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" id="RunWithIP" data-dismiss="modal" data-toggle="modal" data-target="#runButton">Run</button>
    </div>
  </div>
</div>
</div>
<!-- this is another modal for displaying submit status -->
<div class="modal fade" id="submitStatus" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Submission Status:</h5>
      <button type="button" class="close" data-dismiss="modal">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="card" style="margin-top:10px;">
        <div class="card-body">
          <h5 class="card-title"> Submit Status: </h5>
          <p class="bg-success rounded p-3 text-white"> Success </p>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
<!-- This is navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id = "nav">
  <a class="navbar-brand" href="dashboard.html">codeSmode</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="dashboard.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Questions</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Problems</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Editor</a>
      </li>
    </ul>
  </div>
</nav>
<!-- This contains two coloumns , left for displaying code related information and editor on the right side -->
  <div class="container-fluid">
  <div class="row">
  <div class="col-12 col-md-5 col-lg-5" style="padding-top:10px;height:84vh;overflow-y:auto;">
     <div class="card shadow" >
       <div class="card-body">
         <h5 class="card-title"> Problem Name: </h5>
         <p class"card-text">
           <?php

            //printing problem name
          //  $pName = $_SESSION['pName'];
          //  echo "$pName";

           ?>
         </p>
       </div>
     </div>
     <div class="card shadow" style="margin-top:10px;">
       <div class="card-body">
         <h5 class="card-title"> Problem Description: </h5>
         <p class"card-text">
           <?php

            //printing problem Description
          //  $pDesc = $_SESSION['pDesc'];
          //  echo "$pDesc";

           ?>
         </p>
       </div>
     </div>
     <div class="card shadow" style="margin-top:10px;">
       <div class="card-body">
         <h5 class="card-title"> Constraints: </h5>
         <p class"card-text">
           <?php

            //printing problem Constraints
        //    $constraints = $_SESSION['constraints'];
        //    echo "$constraints";

           ?>
         </p>
       </div>
     </div>
     <div class="card shadow" style="margin-top:10px;">
       <div class="card-body">
         <h5 class="card-title"> Sample Input </h5>
         <p class"card-text">
           <?php

            //printing sample Input
        //    $sampleInput = $_SESSION['sampleInput'];
        //    echo "$sampleInput";

           ?>
         </p>
       </div>
     </div>
     <div class="card shadow" style="margin-top:10px;margin-bottom:10px;">
       <div class="card-body">
         <h5 class="card-title"> Sample Output </h5>
         <p class"card-text">
           <?php

            //printing sample Output
        //    $sampleOutput = $_SESSION['sampleOutput'];
        //    echo "$sampleOutput";

           ?>
         </p>
       </div>
     </div>
  </div>
  <div class="col-12 col-md-7 col-lg-7" id="editorArea" style="padding:0px;">
     <div id="editor"></div>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js" type="text/javascript" charset="utf-8"></script>
     <script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/cobalt");
    editor.session.setMode("ace/mode/c_cpp");
    editor.setShowPrintMargin(false);
    editor.setFontSize("12px");
    var ext="c";
</script>
   </div>
</div>
</div>
<!-- This is the strip at last giving user options to run, submit and choose languages -->
<div class="container-fluid bg-dark" id ="bottom-tag" style="width:100%;padding:1vh;">
  <select class="bg-dark text-white rounded dropup" id="sel1">
    <option value="c">C</option>
    <option value="cpp">C++</option>
    <option value="java">Java</option>
    <option value="py">Python</option>
  </select>
  <input class="text-white ml-1" type="checkbox" id="customipcheck" value="" data-toggle="modal" data-target="#customIP" id="Check" > <small><span class="text-white">Custom Run</span></small>
<div class="float-right">
    <button align="right" class="btn btn-m btn-primary" onclick="toogleRun();" data-toggle="modal" data-target="#runButton">Run</button>
    <button align="right" class="btn btn-m btn-warning" data-toggle="modal" data-target="#submitStatus">Submit</button>
  </div>
</div>
<script type="text/javascript">
  function toogleRun(){
    var x = editor.getValue();
    console.log(x);
  }
  var heightofnav = document.getElementById('nav').offsetHeight;
  var h = window.innerHeight;
  var vhh = (heightofnav/h)*100;
  //console.log('nav ka vhh is '+vhh);
  var res= 16-vhh;
  document.getElementById('bottom-tag').style.height= res+"vh";
  $(window).resize(function(){
    var heightofnav = document.getElementById('nav').offsetHeight;
    var h = window.innerHeight;
    var vhh = (heightofnav/h)*100;
    console.log('nav ka vhh is '+vhh);
    var res= 16-vhh;
    document.getElementById('bottom-tag').style.height= res+"vh";
});
  $('#customIP').on('hidden.bs.modal',function(){
    $('#customipcheck').prop('checked',false);
  })
  $('#sel1').change(function(){
   var x = document.getElementById('sel1').value;
   if(x=="cpp"){
     ext="cpp";
   }
   if(x=="java"){
     ext="java";
     //console.log("java");
     editor.session.setMode("ace/mode/java");
   }
   if(x=="py"){
     ext="py";
     //console.log("python");
     editor.session.setMode("ace/mode/python");
   }
  })
  function ajax_run(code,ip,ext) {
        var hr = new XMLHttpRequest();
        var url = "php_only/runcode.php";
        var vars = "code=" + encodeURIComponent(code) + "&textIP=" + ip+ "&ext=" + ext;
        hr.open("POST", url, true);
        hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        hr.onreadystatechange = function() {
          if (hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            $("#outputText").html(return_data);
          }
        }
        hr.send(vars); // Actually execute the request
        $("#outputText").html("<div class='spinner-grow text-dark' role='status'><span class='sr-only'>Loading...</span></div>");
      }
  $('#RunWithIP').click(function(){
    var prog = editor.getSession().getValue();
    var ip = document.getElementById('ip').value;
    if(ip.trim()==""){
      ip="No input";
    }
    ajax_run(prog,ip,ext);
    $('#runButton').on('shown.bs.modal',function(){
      $('#inputText').text(ip);
    })
   })

</script>
</body>
</html>
