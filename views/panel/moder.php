<?php include ROOT . '/views/layouts/header.php'; ?>

<div>
<h1>
You are my Moderator
</h1>
<a href=""><button type="submit" value="Submit" style="background-color:red;" class="sign-in-button">yrtf</a>


</div><button ></button><?php 
require_once('/models/Panels.php');?>
<button type="submit" onclick="showit()" >List of vacancies</button>

<div  id = "vacancy">
<?php 
Panels::actionModer();?>
<button type="submit" onclick="hideIt()" >hide</button>

</div>
<br/>
<button type="submit" onclick="showfjob()" >List of featured jobs</button>

<div id = "featured">
<?php Panels::getAllFJobs();
?>
<button type="submit" onclick="hidefjob()" >hide</button>

</div>
<script>
document.getElementById('vacancy').style.display='none';
document.getElementById('featured').style.display='none';

function showit()
{
if(document.getElementById('vacancy').style.display=='none')
document.getElementById('vacancy').style.display='block';
else hideIt();
}
function hideIt()
{
if(document.getElementById('vacancy').style.display=='block')
document.getElementById('vacancy').style.display='none';
}
function showfjob()
{
if(document.getElementById('featured').style.display=='none')
document.getElementById('featured').style.display='block';
else hidefjob();

}
function hidefjob()
{
if(document.getElementById('featured').style.display=='block')
document.getElementById('featured').style.display='none';
}
</script>


<?php include ROOT . '/views/layouts/footer.php'; ?>