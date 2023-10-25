<select class="form-select" id="pid" name="pid">
<?php while ($parentItem = $parentList->fetch_assoc()) {
$selText="";
if($selectedParent==$parentItem['parent_id'])
{
$selText=" selected";
}
?>
<option value="<?php echo $parentItem['parent_id']; ?>"<?=$selText?>><?php echo
$parentItem['parent_name']; ?></option>
<?php } ?>
</select>
