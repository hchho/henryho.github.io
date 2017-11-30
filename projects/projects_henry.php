<?php
include($_SERVER['DOCUMENT_ROOT'] . '/header.php');
extract($_GET);

$dest = "/files/henry/";
?>
<?
echo $show;
?>
<div class="info container">
  <a href="projects.php">Team Projects</a> &gt; Henry's Projects
  <section class="henry-projects">
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
    <div id="main-content">
      <section class="col-sm-offset-2 col-sm-8">
        <h2 class="text-center">Welcome to Henry's project page</h2>
        <P>
          Feel free to click on the links above to browse through my projects. My projects span from 2007 to current. If you have any questions about my projects, please feel free to contact me via LinkedIn.
        </P>
      </section>
    </div>
    <div id="design-content">
    <section class="col-sm-offset-2 col-sm-8">
    <h2 class="text-center">Design</h2>
      <?php 
      echo "<a href='".$dest."liveinforliteracy_hiring.jpg'>"; 
      echo "<img src='".$dest."liveinforliteracy_hiring.jpg' alt='sample poster' />";
      echo "</a>";
      ?>
      </section>
    </div>
    <div id="anim-content" class="text-center">
      <section class="col-sm-offset-2 col-sm-8">
        <h2 class="text-center">Animation</h2>
        <p class="text-left">
          Below are a series of videos I created for World Vision UBC. I used Adobe Premiere and Aftereffects, respectively. I halted video editing after these two projects because school work at the time became a priority.
        </p>
        <div id="change-for-change">
          <h3>Change for Change</h3>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/a-y8uwJQllY" frameborder="0" allowfullscreen></iframe>
        </div>
        <div id="thirty-hr-famine">
          <h3>30 Hour Famine</h3>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/NMMAeNvOKH4" frameborder="0" allowfullscreen></iframe>
        </div>
      </section>
    </div>
    <div id="code-content" class="content">
      <section class="col-sm-offset-2 col-sm-8">
      <h2 class="text-center">Code</h2>
      <div id="demo">
      <h3 class="text-center">Ruby on Rails (Work in Progress)</h3>
      <P class="text-center">
      <a href="https://enigmatic-tundra-32714.herokuapp.com/" target="_blank">Visit site</a>
      </P>
      <P>
      This was my first individual venture with Ruby on Rails. The purpose was to streamline the process of finding Science demonstrations for educators. Users can favourite and rate demonstrations. I am currently working on creating an efficient way to hash the demos.
      </P>
      </div>
      <div id="gameoflife">
      <h3 class="text-center">JAVA: Game of Life</h3>
      <P>
      This is the game of life.
      </P>
      <object codebase="/files/henry/" archive="gameoflife.jar" code="Main.class" width=550 height=300>
</object>
      </div>
      </section>
    </div>
    <div id="edu-content" class="content">
      <section class="col-sm-offset-2 col-sm-8">
      <h2 class="text-center">Education</h2>
        <div id="vex">
          <h3 class="text-center">VEX IQ</h3>
          <img class="text-center" src="/images/vex-iq.png" alt="VEX IQ"/>
          <P>
            I made a Youtube tutorial channel for VEX IQ Robotics so my students can use them as a guide in class. I focused on breaking down the program components into closely related sections. The feedback was especially great for students who were ahead and students who needed extra time to digest material. Visit the <a href="https://www.vexrobotics.com/vexiq" target="_blank">VEX IQ</a> website.
          </P>
          <P class="text-center">
            <a href="https://www.youtube.com/watch?v=CpDXgjFcnRs&list=PL7RN9f22_gasw2How_Xy42PzG8yysG_IX" target="_blank">VEX IQ Tutorials</a> 
          </P>
        </div>
        <div id="Scratch">
          <h3 class="text-center">Scratch</h3>
          <img class="text-center" src="/images/scratch.jpeg" alt="Scatch"/>
          <P>
            I developed a Scratch course to teach young children computational thinking. I am currently implementing and continually developing the topics. I decided to introduce the concepts of conditional statements, arrays, loops as interactive games.
          </P>
          <P class="text-center">
            <a href="https://scratch.mit.edu/users/hho0203/" target="_blank">Scratch Profile</a> 
          </P>
        </div>
      </section>
    </div>
  </section>
</div>
<script>
  $(function() {    
    $("#main-content").show();
    $("#design-content").hide();
    $("#anim-content").hide();
    $("#edu-content").hide();
    $("#code-content").hide();}

    )

  $("#animation").click(function(){
    $("#main-content").hide();
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
    $("#main-content").hide();
  });

  $("#code").click(function(){
    $("#design-content").hide();
    $("#edu-content").hide();
    $("#anim-content").hide();
    $("#code-content").show();
    $("#main-content").hide();
  });

  $("#education").click(function(){
    $("#design-content").hide();
    $("#edu-content").show();
    $("#anim-content").hide();
    $("#code-content").hide();
    $("#main-content").hide();
  });

</script>
<?include($_SERVER['DOCUMENT_ROOT'] .'/footer.php');?>