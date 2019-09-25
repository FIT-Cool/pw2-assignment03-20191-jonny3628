<?php
//=========================== DELETE==================
$deleteComand = filter_input(INPUT_GET, 'delcom');
if (isset($deleteComand) && $deleteComand == 1) {
    $id = filter_input(INPUT_GET, 'id');
    deleteInsurance($id);
}
$add = filter_input(INPUT_POST, 'btnSubmit');
if (isset($add)) {
    $name = filter_input(INPUT_POST, 'txtName');
    addAsuransi($name);
}
?>
<Form action="" method="post">
    <fieldset>
        <legend><p>Tambah Asuransi</p></legend>
        <input type="text" placeholder="Nama Asuransi" name="txtName">
        <button type="submit" name="btnSubmit">ADD</button>
    </fieldset>
</Form>

<br/>
<table id="myTable" text-align="center">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nama Asuransi</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $data = getAllInsurance();
    foreach ($data as $dataasuransi) {
        echo '<tr>';
        echo '<td>' . $dataasuransi['id'] . '</td>';
        echo '<td>' . $dataasuransi['name_class'] . '</td>';
        echo '<td><button onclick="deleteInsurance(\'' . $dataasuransi['id'] . '\')">Delete</button><button onclick="updateInsurance(\'' . $dataasuransi['id'] . '\')">Update</button></td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>