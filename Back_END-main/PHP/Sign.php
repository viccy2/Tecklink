
<!--========  PHP CODE FOR REGISTRATION / LOGIN / ACTIVATE ACCOUNT===================-->


<?php
session_start();
require 'connection.php';

//Funtion for 
function validateData($data)
{
    $resultData = htmlspecialchars(stripslashes(trim($data)));
    return $resultData;
}

//Collecting Data through Post and coverting to lowercase
$type           =     strtolower($_POST['formType']);
$firstname   	  =  		strtolower(validateData($_POST['fname']));
$middlename     =     strtolower(validateData($_POST['mname']));
$lastname   	  =  		strtolower(validateData($_POST['lname']));
$email          =     strtolower(validateData($_POST['email']));
$phonenumber   	=  		strtolower(validateData($_POST['pnumber']));
$companyname    =     strtolower(validateData($_POST['cname']));
$city   	      =  		strtolower(validateData($_POST['city']));
$state          =     strtolower(validateData($_POST['state']));
$country   	    =  		strtolower(validateData($_POST['country']));
$password       =     sha1(strtolower(validateData($_POST['password'])));
$rpassword  	  =  		strtolower(validateData($_POST['rpassword']));
$date     		  =     date("Y-m-d");
$time     		  =     date("h:i:sa");
$user_id 		    =     uniqid(mt_rand(10)).uniqid(mt_rand(10)).uniqid(mt_rand(10)).uniqid(mt_rand(10)).uniqid(mt_rand(10));
$validation_code =      uniqid(mt_rand(1));

//Checking form Type

//For Registration
if ($type=="register") {
  //Fetching data from db 
$sql = mysqli_query($connect, "select email from user_tb where email='{$email}'");

//checking if data exist
  if (mysqli_num_rows($sql)>0) 
  {
            $msg="Account already created";
            echo $msg;
    }
//Insert into db
 else{
         $save=mysqli_query($connect, "insert into user_tb(user_id,firstname,middlename,lastname,email,password,phone_number,company_name,city,state,country,date,time,validation_code,active)
          values
        ('$user_id','$firstname','$middlename','$lastname','$email','$password','$phonenumber','$companyname','$city','$state','$country','$date','$time','$validation_code',0)");
           
            $msg= "Account created successfully";
            echo $msg;
           
            echo mysqli_error($connect);
            
            //Sending Mail for Activation
            $subj = "Activation Code (Tecklink)";
            $msg = "Use this code to activate your account ".$validate;
            $headers = "FROM: Tecklink";
            mail($email,$subj,$msg,$headers);

    }

}




//For Login
if($type=="login"){

  $email      =     strtolower(validateData($_POST['text'])); 
  $password   =     sha1(strtolower(validateData($_POST['password'])));

  //Checking if data matches from DB
  $saves      =  mysqli_query($connect, "select * from user_tb where  phone_number='$email' and password='$password' or email='$email' and password='$password' ");

//Fetching Data as array
  while($dos=mysqli_fetch_array($saves)){
    $validations=$dos['validation_code'];
    $actives=$dos['active'];
  }
//Checking if account has been activated
  if ($validations!=0 and $active!=1) {
    $msgs="Your account has not been activated";
    echo $msgs;
  }
//Login code process
  else{
    $save=mysqli_query($connect, "select * from user_tb where  phone_number='$email' and password='$password' and validation_code=0 and active=1 or email='$email' and password='$password' and validation_code=0 and active=1; ");

  $log=true;
  while($do=mysqli_fetch_array($save)){
    $validations=$do['validation_code'];

    $actives=$do['active'];
    $log=false;
  }
  //If login is incorrct
  if($log){
    $msg="Incorrect Password or Email !!!"; 
    echo $msg;
  }
  //If login is correct
  else{
    
    $app=mysqli_query($connect, "select * from user_tb where phone_number = '$email' or email = '$email'");
    while ($wow=mysqli_fetch_array($app)) {
      $_SESSION['firstname'] =  $wow['firstname'];
      $_SESSION['lastname']  =  $wow['lastname'];
      $_SESSION['username']  =  $wow['username'];
        $_SESSION['email']     =  $wow['email'];
      
        
      
       }
       $msg="Login successfull";  
     echo $msg;
  }
}


}


//Activate Account

if ($type=="activate") {
  
  $email              =   strtolower(validateData($_POST['email'])); 
  $activate_code      =    validateData($_POST['code']);
  $saves              =    mysqli_query($connect, "select * from user_tb where email='$email'");

  while ($k=mysqli_fetch_array($saves)) {
    $emails=$k['email'];
    $acts_code=$k['validation_code'];
    $active=$k['active'];
  }
  if (!empty($activate_code) && !empty($email)) {
    if($emails='$email' and $active==1 and $acts_code==0){
    $tes="Your account has been activated already";
    echo $tes;
    
  }
  elseif ($active==0 and $activate_code==$acts_code) {
    $st=mysqli_query($connect,"update user_tb set validation_code=0,active=1 where email='$email'");
      echo "Activation successfull";
      
      
  }
  else{
    $t="Incorrect email or activation code";
    echo $t;
  }
  }
  else{
    $t="All fields are required";
    echo $t;
  }
  

  }




if ($type='cregister') {

$firstname            =     strtolower(validateData($_POST['cfname']));
$lastname             =     strtolower(validateData($_POST['clname']));
$email                =     strtolower(validateData($_POST['cemail']));
$cnumber              =     strtolower(validateData($_POST['c-number']));
$position             =     strtolower(validateData($_POST['position']));
$haddress             =     strtolower(validateData($_POST['h-address']));
$city                 =     strtolower(validateData($_POST['city']));
$country              =     strtolower(validateData($_POST['country']));
$zipcode              =     strtolower(validateData($_POST['zipcode']));
$state                =     strtolower(validateData($_POST['state']));
$password             =     sha1(strtolower(validateData($_POST['password'])));
$companyname          =     strtolower(validateData($_POST['companyname']));
$companyaddress       =     strtolower(validateData($_POST['companyaddress']));
$companynumber        =     strtolower(validateData($_POST['companynumber']));
$companylocation      =     strtolower(validateData($_POST['companylocation']));
$business             =     strtolower(validateData($_POST['business']));
$numemployee          =     strtolower(validateData($_POST['numemployee']));
$companybio           =     strtolower(validateData($_POST['companybio']));
$companywebsite       =     strtolower(validateData($_POST['companywebsite']));
$companylikedin       =     strtolower(validateData($_POST['companylikedin']));
$companyfacebook      =     strtolower(validateData($_POST['companyfacebook']));
$companyothers        =     strtolower(validateData($_POST['companyothers']));
$videotopic           =     strtolower(validateData($_POST['videotopic']));
$link1                =     strtolower(validateData($_POST['link1']));
$link2                =     strtolower(validateData($_POST['link2']));
$videotitle           =     strtolower(validateData($_POST['videotitle']));
$bemail               =     strtolower(validateData($_POST['bemail']));
$vtext               =     strtolower(validateData($_POST['vtext']));


$target_dir = "media/";
$target_file = strtolower($target_dir . basename($_FILES["fileToUpload"]["name"]));
$time = time();
$image_name = $_FILES["fileToUpload"]["name"];
$image_type = $_FILES["fileToUpload"]["type"];
$tmp_name =  $_FILES["fileToUpload"]["tmp_name"];
$image_explode = explode('.', $image_name);
$image_ext = end($image_explode);
$extensions = ['png', 'jpeg', 'jpg'];
$new_image =  $time.$image_name;


$target_files = strtolower($target_dir . basename($_FILES["fileToUploads"]["name"]));
$times = time();
$image_names = $_FILES["fileToUploads"]["name"];
$image_types = $_FILES["fileToUploads"]["type"];
$tmp_names =  $_FILES["fileToUploads"]["tmp_name"];
$image_explodes = explode('.', $image_names);
$image_exts = end($image_explodes);
$extensionss = ['png', 'jpeg', 'jpg'];
$new_images =  $timess.$image_names;

$save = mysqli_query($connect, "insert into company_tb(firstname,lastname,email,cnumber,position,haddress,city,country,zipcode,state,password,companyname,companyaddress,companynumber,companylocation,business,numemployee,companybio,companywebsite,companylinkedin,companyfacebook,companyothers,videotopic,link1,link2,videotitle,bemail,vtext,image,timage)
  values('$firstname','$lastname','$email','$cnumber','$position','$haddress','$city','$country','$zipcode','$state','$password','$companyname','$companyaddress','$companynumber','$companylocation','$business','$numemployee','$companybio','$companywebsite','$companylikedin','$companyfacebook','$companyothers','$videotopic','$link1','$link2','$videotitle','$bemail','$vtext','media/$new_image','media/$new_images')");



           

if ($save) {
  move_uploaded_file($tmp_name,"media/".$new_image);
  move_uploaded_file($tmp_names,"media/".$new_images);
  echo "Account created successfully";
}
else{
  echo mysqli_error($connect);
}
}

?>