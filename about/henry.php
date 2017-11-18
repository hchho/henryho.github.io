<?php
include($_SERVER['DOCUMENT_ROOT'] . '/header.php');
?>
<script>
$(document).ready(function() {

  'use strict';

  // define variables
  var items = document.querySelectorAll(".timeline li");

  // check if an element is in viewport
  // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
      if (isElementInViewport(items[i])) {
        items[i].classList.add("in-view");
      }
    }
  }

  // listen for events
  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);

})();
</script>


<div class="info container">
    <h1 class="text-center">This is Henry.</h1>
    <img src="../images/henry.jpeg" class="img-circle img-responsive text-center" alt="Henry Ho" />
    <section class="description">
        <div class="row text-center">
            <div class="col-sm-2 col-sm-offset-3">
                <a href="../projects/projects.php">Personal Projects
                </a>
            </div>
            <div class="col-sm-2">
                <a href="../projects/projects.php">Team Projects
                </a>
            </div>
            <div class="col-sm-2">

                <a href="http://github.com/hchho" target="_blank">GitHub</a>
            </div>
        </div>
        <h2 class="text-center">Overview</h2>
        <P>
            Henry is an aspiring programmer currently studying at British Columbia Institute of Technology's Computer Systems Technology program. Henry enjoys playing badminton and sampling good
            food. Henry's hobbies include playing the piano, playing guitar, reading, and cooking. Henry is interested in Virtual Reality, cloud computing, and artificial
            intelligence.
        </P>
        <h2 class="text-center">Experiences</h2>
        <h3 class="text-center">2007-2012</h3>
        <P>
            Before Henry was a code wrangler, he attended University of British Columbia for his undergraduate studies in Physics and Education. 
            He worked as a Publisher Editor for Perspectives UBC magazine where he helped design their bi-monthly publications. Henry also worked as a web manager for World Vision UBC where he created promotional material and managed web content. 
            Henry then went on to work as a student development assistant for UBC's School of Kinesiology where he collaborated with faculty members to design and to create material for students and staff. 
            Examples of Henry's work are available in the Projects section.
        </P>
        <h3 class="text-center">2013-2017</h3>
        <P>
            Following his graduation, Henry worked as a high school educator at Collingwood Secondary school in West Vancouver. Henry helped develop and teach information technology curriculum for junior grades. Henry was also a mentor for the Collingwood VEX robotics team, and was invited to present at a robotics workshop hosted by  Confucius Institute in School District 43.
        </P>
        <h3 class="text-center">2017-Present</h3>
        <P>
            Henry is currently a student in BCIT's Computer Systems Technology program. Henry continues to work with youth and develop courses to help them understand computational thinking. 
        </P>
        
    </section>

<!-- <section class="intro">
  <div class="overview">
    <h1>Henry's Timeline</h1>
  </div>
</section>

<section class="timeline">
  <ul>
    <li>
      <div>
        <time>1934</time> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
      </div>
    </li>
    <li>
      <div>
        <time>1937</time> Proin quam velit, efficitur vel neque vitae, rhoncus commodo mi. Suspendisse finibus mauris et bibendum molestie. Aenean ex augue, varius et pulvinar in, pretium non nisi.
      </div>
    </li>
    <li>
      <div>
        <time>1940</time> Proin iaculis, nibh eget efficitur varius, libero tellus porta dolor, at pulvinar tortor ex eget ligula. Integer eu dapibus arcu, sit amet sollicitudin eros.
      </div>
    </li>
    <li>
      <div>
        <time>1943</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>1946</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>1956</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>1957</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>

  </ul>
</section> -->


</div>



<?include($_SERVER['DOCUMENT_ROOT'] .'/footer.php');?>