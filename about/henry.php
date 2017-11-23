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

<div class="container">

<div class="info">
<a href="about.php">About</a> &gt; Henry
 <section class="intro">
  <div class="overview">
    <h1 class="text-center">This is Henry.</h1>
      Henry enjoys programming, reading, eating, and exercising.
          <section class="description">
        <div class="row text-center">
            <div class="col-sm-2 col-sm-offset-3">
                <a href="../projects/projects_henry.php">Personal Projects
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
            </section>
    <img src="../images/henry.jpeg" class="img-circle img-responsive text-center" alt="Henry Ho" />
  </div>
</section>

<section class="timeline">
  <ul>
      <li>
      <div>
        <time>2007</time> Began studying Physics at the University of British Columbia. 
      </div>
    </li>
    <li>
      <div>
        <time>2008</time> Started working for Perspectives UBC, a bi-lingual student newspaper from UBC. Started to typeset feature articles. 
      </div>
    </li>
    <li>
      <div>
        <time>2009</time> Worked as web content creator and manager for World Vision UBC. Created video and digital promotional material for fundraising events.
      </div>
    </li>
    <li>
      <div>
        <time>2010</time> Promoted to Publishing Director for Perspectives Magazine. Overlooked typesetting and created a new logo for the magazine.
      </div>
    </li>
    <li>
      <div>
        <time>2011</time> Hired as student development assistant at UBC's School of Kinesiology. Collaborated with faculty to create material for students and staff.
      </div>
    </li>
    <li>
      <div>
        <time>2012</time> Graduated with a Bachelors in Science and Education from UBC.
      </div>
    </li>
    <li>
      <div>
        <time>2013</time> Worked as a high school educator at Collingwood Secondary in West Vancouver. Co-developed robotics curriculum for junior students and mentored their VEX robotics team.
      </div>
    </li>
    <li>
      <div>
        <time>2016</time> Presented at a robotics workshop hosted by Confucius Institute from School District 43. Began creating content to help children develop computational thinking.
      </div>
    </li>
<li>
      <div>
        <time>Present</time> Enrolled in BCIT's Computer Systems Technology Diploma program. Continues to help educate and develop educational material for children in partnership with the Coquitlam Library and Confucius Institute.
      </div>
    </li>
  </ul>
</section> 


</div>

</div>

<?php include($_SERVER['DOCUMENT_ROOT'] .'/footer.php');?>