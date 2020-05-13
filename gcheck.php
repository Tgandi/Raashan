<html>
<?php
$conn_string = "host=localhost port=5432 dbname=raashan user=postgres password=naresh";
$conn = pg_connect($conn_string); 

if (isset($_POST['up']))
{
    echo "UP";
    $phone=$_POST['phone'];
    $name=$_POST['name'];
    $shopno=$_POST['shopno'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pwd=$_POST['pwd'];
    $query="insert into grocer values "."(".$phone.",'".$name."',"."'".$shopno."'".",'".$street."'".",'".$city."'".",'".$state."',"."NULL,'".$pwd."');";
    //echo $query;
    
   $result=pg_query($conn,$query);
    
    $id=0;
    while (isset($_POST['street'.$id]))
    {
    
        $street="'".$_POST['street'.$id]."'";
        $area="'".$_POST['area'.$id]."'";
        $city="'".$_POST['city'.$id]."'";
        $state="'".$_POST['state'.$id]."'";
        $query="insert into services values"."(".$phone.",".$street.",".$area.",".$city.",".$state.");";
        echo $query;
        $result=pg_query($conn,$query);
        $id=$id+1;
        
    }
    
     $id=0;
    while (isset($_POST['pid'.$id]))
    {
    
        $pid="'".$_POST['pid'.$id]."'";
        $maxq="'".$_POST['maxq'.$id]."'";
        $unitp="'".$_POST['unitp'.$id]."'";
        $query="insert into grocer_has values"."(".$phone.",".$pid.",".$maxq.",".$unitp.");";
        echo $query;
        $result=pg_query($conn,$query);
        $id=$id+1;
        
    }
    session_start();
$_SESSION['mnum']=$phone;
    
	
	header("refresh:0;url=postgro_login.php");    
    
    
}
elseif (isset($_POST['in']))
{
    echo "IN";
 $a=$_POST['mnum'];
$result=pg_query($conn,"select * from grocer where mobile=$a");
$arr=pg_fetch_all_columns ($result,7);
    if ($_POST['pwd']==$arr[0])
    {
        echo 'Logged in Successfully';
        session_start();
        $_SESSION['mnum']=$a;
        header( "refresh:0;url=postgro_login.php" );
    }
    else 
    {
        echo "Log in Failed";
        header("refresh:0;url=gro_signin.html");
    }
}

elseif (isset($_POST['edit_profile']))
{
    echo 'edit';
    $c=$_POST['orgmno'];
    $mobile=$_POST['mobile'].",";
    $sname="'".$_POST['sname']."',";
    $sno="'".$_POST['sno']."',";
    $street="'".$_POST['street']."',";
    $city="'".$_POST['city']."',";
    $state="'".$_POST['state']."' ";
    $query="update grocer set mobile=".$mobile.
    "shop_name=".$sname."shop_no=".$sno."street=".$street."city=".$city."state=".$state."where mobile=".$c.";";
    $result=pg_query($conn,$query);
    header("refresh:0;url=postgro_login.php");
    
    
    
    
}
elseif (isset($_POST['delete']))
{

    echo "delete";
    $c=$_POST['orgmno'];
    echo $c;
    $street="'".$_POST['street']."'";
    $area="'".$_POST['area']."'";
    $city="'".$_POST['city']."'";
    $state="'".$_POST['state']."'";
    $query="delete from services where mobile=".$c." and street=".$street." and area=".$area." and city=".$city." and state=".$state.";";
    echo $query;
    $result=pg_query($conn,$query);
    header("refresh:0;url=postgro_login.php");
}

elseif (isset($_POST['add_loc']))
{
    echo 'adding loc';
    
    $id=0;
    while (isset($_POST['street'.$id]))
    {
        $c=$_POST['orgmno'];
        $street="'".$_POST['street'.$id]."'";
        $area="'".$_POST['area'.$id]."'";
        $city="'".$_POST['city'.$id]."'";
        $state="'".$_POST['state'.$id]."'";
        $query="insert into services values"."(".$c.",".$street.",".$area.",".$city.",".$state.");";
        echo $query;
        $result=pg_query($conn,$query);
        $id=$id+1;
        header("Location:postgro_login.php");
    }
    
}

elseif (isset($_POST['delete_item']))
{
    echo "deleting item";
       $c=$_POST['orgmno'];
   
    $pid="'".$_POST['pid']."'";
    $maxq="'".$_POST['maxq']."'";
    $unitp="'".$_POST['unitp']."'";
    $query="delete from grocer_has where mobile=".$c." and product_id=".$pid." and max_quantity=".$maxq." and unit_price=".$unitp.";";
    echo $query;
    $result=pg_query($conn,$query);
    header("refresh:0;url=postgro_login.php");
    
}

else if (isset($_POST['add_item']))
{
    echo "adding item";
    session_start();
    $_SESSION['mnum']=$_POST['orgmno'];
    $id=0;
    while (isset($_POST['pid'.$id]))
    {
         $c=$_POST['orgmno'];
        $pid="'".$_POST['pid'.$id]."'";
        $maxq="'".$_POST['maxq'.$id]."'";
        $unitp="'".$_POST['unitp'.$id]."'";
        $query="insert into grocer_has values"."(".$c.",".$pid.",".$maxq.",".$unitp.");";
        echo $query;
        $result=pg_query($conn,$query);
        $id=$id+1;
        header("refresh:0;url=postgro_login.php");
    }
    
    
    
}
else 
{
echo "none";
session_destroy();
header("Location:index.html" );
}
?>
</html>