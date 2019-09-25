function deletePatient( id) {
    var confirmation=window.confirm("Are you sure want to delete?");
    if(confirmation){
        window.location = "index.php?menu=pasien&delcom=1&id="+id;
    }
}
//
function updatePatient(med_record_number) {
    window.location = "index.php?menu=pu&id="+id;
}

