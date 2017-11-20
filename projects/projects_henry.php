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
            <div class="col-sm-offset-3 col-sm-2">
                <a href="projects_henry.php?anim=true" id="animation">
                    Animation
                </a>
            </div>
            <div class="col-sm-2">
                <a href="projects_henry.php?print=true" id="print" onclick="showDiv()">
                    Print Media
                </a>
            </div>
            <div class="col-sm-2">
                <a href="projects_henry.php?code=true" id="code">
                    Code
                </a>
            </div>
        </div>
        <div id="print-content" style="display:
                                                       <?php 
                                                       if ($print) {
                                                           echo "block";
                                                       } else {
                                                           echo "none";
                                                       }
                                                       ?>
                                                       ">
            <?php 
            echo "<a href='".$dest."liveinforliteracy_hiring.jpg'>"; 
            echo "<img src='".$dest."liveinforliteracy_hiring.jpg' alt='sample poster' />";
            echo "</a>";
            ?>
        </div>
        <div id="anim-content" class="text-center" style="display:<?php 
                                                      if ($anim) {
                                                          echo "block";
                                                      } else {
                                                          echo "none";
                                                      }
                                                      ?>">
            <div id="change-for-change text-c">
                <h2>Change for Change</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/a-y8uwJQllY" frameborder="0" allowfullscreen></iframe>
                </div>
            <div id="thirty-hr-famine">
                <h2>30 Hour Famine</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/NMMAeNvOKH4" frameborder="0" allowfullscreen></iframe>
                </div>
        </div>
        <div id="code-content" class="content" style="display:<?php 
                                                      if ($code) {
                                                          echo "block";
                                                      } else {
                                                          echo "none";
                                                      }
                                                      ?>">
            dat code
        </div>
    </section>
</div>

<?include($_SERVER['DOCUMENT_ROOT'] .'/footer.php');?>