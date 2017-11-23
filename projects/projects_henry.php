<?php
include($_SERVER['DOCUMENT_ROOT'] . '/header.php');
extract($_GET);

$dest = "/files/henry/";
?>
<?
echo $show;
?>
<div class="info container">
  <section class="team-projects">
    <h1 class="text-center">Team Projects</h1>
  </section>
  <section class="henry-projects">
    <h1 class="text-center">Henry's Projects</h1>
    <div class="row text-center">
      <div class="col-sm-offset-3 col-sm-6">
        <div class="col-sm-3">
          <a href="#" id="animation">
            Animation
          </a>
        </div>
        <div class="col-sm-3">
          <a href="#" id="design">
            Design
          </a>
        </div>
        <div class="col-sm-3">
          <a href="#" id="code">
            Code
          </a>
        </div>
        <div class="col-sm-3">
          <a href="#" id="education">
            Education
          </a>
        </div>
      </div>
    </div>
    <div id="design-content">
      <?php 
      echo "<a href='".$dest."liveinforliteracy_hiring.jpg'>"; 
      echo "<img src='".$dest."liveinforliteracy_hiring.jpg' alt='sample poster' />";
      echo "</a>";
      ?>
    </div>
    <div id="anim-content" class="text-center">
      <div id="change-for-change text-c">
        <h2>Change for Change</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/a-y8uwJQllY" frameborder="0" allowfullscreen></iframe>
      </div>
      <div id="thirty-hr-famine">
        <h2>30 Hour Famine</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/NMMAeNvOKH4" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
    <div id="code-content" class="content">
      dat code
    </div>
    <div id="edu-content" class="content">
      <section class="col-sm-offset-2 col-sm-8">
        <h2 class="text-center">I teach.</h2>
        <h3 class="text-center">VEX IQ</h3>
        <div id="vex">
        <img class="text-center" src="/iamges/vex-iq.png" />
          I made a Youtube tutorial channel for VEX IQ Robotics so my students can use them as a guide in class. I focused on breaking down the program components into closely related sections. The feedback was especially great for students who were ahead and students who needed extra time to digest material.
          <P class="text-center">
            <a href="https://www.youtube.com/watch?v=CpDXgjFcnRs&list=PL7RN9f22_gasw2How_Xy42PzG8yysG_IX" target="_blank">VEX IQ Tutorials</a> 
          </P>
        </div>
        <div id="Scratch">
          I made a Youtube tutorial channel for VEX IQ Robotics so my students can use them as a guide in class. I focused on breaking down the program components into closely related sections. The feedback was especially great for students who were ahead and students who needed extra time to digest material.
          <P class="text-center">
            <a href="https://www.youtube.com/watch?v=CpDXgjFcnRs&list=PL7RN9f22_gasw2How_Xy42PzG8yysG_IX" target="_blank">VEX IQ Tutorials</a> 
          </P>
        </div>
      </section>
    </div>
  </section>
</div>
<script>
  $(function() {    
    $("#design-content").hide();
    $("#anim-content").show();
    $("#edu-content").hide();
    $("#code-content").hide();}

    )

  $("#animation").click(function(){
    $("#design-content").hide();
    $("#anim-content").show();
    $("#edu-content").hide();
    $("#code-content").hide();
  });

  $("#design").click(function(){
    $("#design-content").show();
    $("#edu-content").hide();
    $("#anim-content").hide();
    $("#code-content").hide();
  });

  $("#code").click(function(){
    $("#design-content").hide();
    $("#edu-content").hide();
    $("#anim-content").hide();
    $("#code-content").show();
  });

  $("#education").click(function(){
    $("#design-content").hide();
    $("#edu-content").show();
    $("#anim-content").hide();
    $("#code-content").hide();
  });

</script>
<?include($_SERVER['DOCUMENT_ROOT'] .'/footer.php');?>