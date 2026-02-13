<?php
if(isset($_POST['send_seddel'])) {
     include("mail.php");
     $dato_send = $_POST['dato_line'];
     $result5 = mysqli_query($conn, "SELECT * FROM promed WHERE id = '$person'");
     while($row5 = mysqli_fetch_assoc($result5)) {
     $navn = $row5['navn']; 
     $email = $row5['email'];

}
?>
<script>
window.location="dagseddel_kontor_pdf.php?id=<?php echo $person ?>&dato_html=<?php echo $dato_send ?>";
</script>
<?php  
}
?>

