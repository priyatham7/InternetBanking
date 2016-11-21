<?php 
session_start();
        
//if(!isset($_SESSION['staff_login'])) 
//    header('location:staff_login.php');   
?>
<?php
if(isset($_REQUEST['submit_id']))
{
    include '_inc/dbconn.php';
    $id=$_REQUEST['customer_id'];
    
    $sql="SELECT * FROM cheque_book WHERE account_no='$id'";
    $result=  mysqli_query($conn,$sql);// or die(mysqli_error());
    $rws=  mysqli_fetch_array($result);
                
    if($rws[1]=="PENDING")
    $sql="UPDATE cheque_book SET cheque_book_status='ISSUED' WHERE account_no='$id'";
    
    mysqli_query($conn,$sql);// or die(mysqli_error());
    
    echo '<script>alert("Cheque Book Issued");';
    echo 'window.location= "staff_cheque_approve.php";</script>';
}