<h1>Parents with Kids</h1>
<div class="card-group">
<?php
while ($parent = $parents-> fetch_assoc())
{
?>
<div class="card">
<div class="card-body">
<h5 class="card-title"><?php echo $parent['parent_name'];?></h5>
<p class="card-text">
<ul class="list-group">
<?php
$kids=selectKidsByParent($parent['parent_id']);
while ($kid=$kids->fetch_assoc())
{
?>
<li class="list-group-item"><?php echo $kid['kid_name'];?> -
  <?php echo $kid['kid_birthyear'];?> </li>
<?php
}
?>
</ul>
</p>
<p class="card-text"><small class="text-body-secondary">City: <?php echo
$parent['city_name'];?></small></p>
</div>
</div>
<?php
}
?>
</div>
