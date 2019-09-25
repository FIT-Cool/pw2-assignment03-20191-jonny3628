<?php
//Block below for delete
$id=filter_input(INPUT_GET,'id');
if (isset($id)){
    $asuransi=getInsurance($id);

}
//Block below for insert
$submitted = filter_input(INPUT_POST, 'btnUpdate');
if (isset($submitted)) {
    header("Location: index.php?menu=in");
    $name = filter_input(INPUT_POST, 'txtName');
    updateInsurance($asuransi['id'],$name);
}
?>
<<form method="post">
    <fieldset>
        <legend>Update Insurance</legend>
        <label for="txtNameIdx" class="form-label">Name</label>
        <input type="text"  name="txtName"
               placeholder="Name(e.g.cooking)" autofocus required
               value="<?php echo $asuransi['name_class']; ?>">
        <input type="submit" name="btnUpdate" value="Update Genre" class="button
             button-primary">
    </fieldset>
</form>