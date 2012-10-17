<?php
/*
 * resume.php: Resume Slide
 */ 

// Note that the index.php has all the information through the <div>
?>

<!-- NAVIGATION -->
<a href="#/step-1"><img id="resume-home-img" alt="home" src="img/home.png" height="50"></a>
<a href="#/step-4"><img id="resume-contact-img" alt="contact" src="img/contact.png" height="50"></a>
<a href="#/step-2"><img id="resume-projects-img" alt="projects" src="img/projects.png" height="50"></a>


<script type="text/JavaScript">
<!--
/* Functions to change iframe to appropriate resume element */
function experience()
{
    document.getElementById("iframe").src="resume.html#experience";
    return;
}

function education()
{
    document.getElementById("iframe").src="resume.html#education";
    return;
}

function skills()
{
    document.getElementById("iframe").src="resume.html#skills";
    return;
}
//-->
</script>


<h1>My Resume</h1>
<?
function jSpan($category)
{
    echo "<span onMouseOver=\"style.color='#225577'; style.font='bold'\" onmouseout=\"style.color='#333'\" onClick=\"$category()\">";
}
?>
<p><? jSpan("experience"); ?>Experience</span> &nbsp;&nbsp;| &nbsp;&nbsp;<? jSpan("education"); ?>Education</span> &nbsp;&nbsp;| &nbsp;&nbsp;<? jSpan("skills"); ?>Skills Affiliations & Interests</span></p>
<hr class='resume' />
<iframe id="iframe" src="resume.html" width="750" height="425"></iframe>
<hr class='resume' />

