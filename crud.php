<?php
require_once("core/init.php");
if(empty($_SERVER["HTTP_X_REQUEST_WITH"]) or strtolower($_SERVER["HTTP_X_REQUEST_WITH"]) !='xmlhttprequest')
{die('ERROR');}

$db = new \xyz\db\Database(); 
$ID=intval($_POST['member_id_']); 



switch($_POST["page"]){
    case 'pr_en_22': 
        if($_SERVER["REQUEST_METHOD"]=='POST' && isset($_POST['pr_en_20'])) {
        $pr_en_1=security($_POST["pr_en_1"]);
        $pr_en_2=security($_POST["pr_en_2"]);
        $pr_en_3=security($_POST["pr_en_3"]);
        $pr_en_4=security($_POST["pr_en_4"]);
        $pr_en_5=security($_POST["pr_en_5"]);
        $pr_en_6=security($_POST["pr_en_6"]);
        $pr_en_7=security($_POST["pr_en_7"]);
        $pr_en_8=security($_POST["pr_en_8"]);
        $pr_en_9=security($_POST["pr_en_9"]);
        $pr_en_10=security($_POST["pr_en_10"]);
        $pr_en_11=security($_POST["pr_en_11"]); 
        $pr_en_12=security($_POST["pr_en_12"]);
        $pr_en_13=security($_POST["pr_en_13"]);
        $pr_en_14=security($_POST["pr_en_14"]);
        $pr_en_15=security($_POST["pr_en_15"]);
        $pr_en_16=security($_POST["pr_en_16"]);
        $pr_en_17=security($_POST["pr_en_17"]);
        $pr_en_18=security($_POST["pr_en_18"]);
        $pr_en_19=security($_POST["pr_en_19"]);
        if($pr_en_19 !='on'){$message='error:::danger';
        }else{
          if(empty($pr_en_3) or empty($pr_en_4)){$message= 'error:::danger';

          }else{
            if(!filter_var($pr_en_3,FILTER_VALIDATE_EMAIL)){$message= 'error:::danger';
          } else {$pr_en_4=md5(md5(sha1(md5(md5($pr_en_4)))));
            $isHave=$db->getColumn( 'SELECT
                                    FROM members
                                    WHERE pr_en_3_=?
                                    AND pr_en_4_=?', array($pr_en_3, $pr_en_4));
              if($isHave){$message= 'error:::danger';
              }else{
                $fileName=$_FILES["pr_en_14"]["name"];
                $fileTMP=$_FILES["pr_en_14"]["tmp_name"];
                $ext=pathinfo($fileName,PATHINFO_EXTENSION);
                $pr_en_14=rand()."_".time().'.'.$ext;
                $myPath='uploads/'.$newName;

                $fileName=$_FILES["pr_en_15"]["name"];
                $fileTMP=$_FILES["pr_en_15"]["tmp_name"];
                $ext=pathinfo($fileName, PATHINFO_EXTENSION);
                $pr_en_15=rand() . "_" . time() . '.' . $ext;
                $myPath='uploads/' . $newName;

                $fileName=$_FILES["pr_en_16"]["name"];
                $fileTMP=$_FILES["pr_en_16"]["tmp_name"];
                $ext=pathinfo($fileName, PATHINFO_EXTENSION);
                $pr_en_16=rand() . "_" . time() . '.' . $ext;
                $myPath='uploads/' . $newName;

                $fileName=$_FILES["pr_en_17"]["name"];
                $fileTMP=$_FILES["pr_en_17"]["tmp_name"];
                $ext=pathinfo($fileName, PATHINFO_EXTENSION);
                $pr_en_17=rand() . "_" . time() . '.' . $ext;
                $myPath='uploads/' . $newName;

                $fileName=$_FILES["pr_en_18"]["name"];
                $fileTMP=$_FILES["pr_en_18"]["tmp_name"];
                $ext=pathinfo($fileName, PATHINFO_EXTENSION);
                $pr_en_18=rand() . "_" . time() . '.' . $ext;
                $myPath='uploads/' . $newName;
                if(move_uploaded_file($fileTMP,$myPath)){
                $add=$db->Insert(
              'INSERT INTO members (pr_en_1_, pr_en_2_,pr_en_3_, pr_en_4_,pr_en_5_, pr_en_6_,pr_en_7_,pr_en_8_, pr_en_9_, pr_en_10_, pr_en_11_, pr_en_12_, pr_en_13_, pr_en_14_, pr_en_15_,pr_en_16_, pr_en_17_,pr_en_18_) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', array($pr_en_1, $pr_en_2, $pr_en_3, $pr_en_4, $pr_en_5, $pr_en_6, $pr_en_7, $pr_en_8, $pr_en_9, $pr_en_10, $pr_en_11, $pr_en_12, $pr_en_13, $pr_en_14, $pr_en_15, $pr_en_16, $pr_en_17, $pr_en_18));
              if($add){
                $message='ok:::success';

              }else{$message='error:::danger';}
              }
                }
              } //şifre
            }//e posta
          }//boş geçilemez
        }// onaylı mı
         
 break; 
   

  case 'pr_en_23':
    if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['pr_en_21'])) {
      $pr_en_1 = security($_POST["pr_en_1"]);
      $pr_en_2 = security($_POST["pr_en_2"]);
      $pr_en_3 = security($_POST["pr_en_3"]);
      $pr_en_4 = security($_POST["pr_en_4"]);
      $pr_en_5 = security($_POST["pr_en_5"]);
      $pr_en_6 = security($_POST["pr_en_6"]);
      $pr_en_7 = security($_POST["pr_en_7"]);
      $pr_en_8 = security($_POST["pr_en_8"]);
      $pr_en_9 = security($_POST["pr_en_9"]);
      $pr_en_10 = security($_POST["pr_en_10"]);
      $pr_en_11 = security($_POST["pr_en_11"]);
      $pr_en_12 = security($_POST["pr_en_12"]);
      $pr_en_13 = security($_POST["pr_en_13"]);
      $pr_en_14 = security($_POST["pr_en_14"]);
      $pr_en_15 = security($_POST["pr_en_15"]);
      $pr_en_16 = security($_POST["pr_en_16"]);
      $pr_en_17 = security($_POST["pr_en_17"]);
      $pr_en_18 = security($_POST["pr_en_18"]);
      $pr_en_19 = security($_POST["pr_en_19"]);
      if ($pr_en_19 != 'on') {
        $message = 'error:::danger';
      } else {
        if (empty($pr_en_3) or empty($pr_en_4)) {
          $message = 'error:::danger';
        } else {
          if (!filter_var($pr_en_3, FILTER_VALIDATE_EMAIL)) {
            $message = 'error:::danger';
          } else {
            $pr_en_4 = md5(md5(sha1(md5(md5($pr_en_4)))));
            $isHave = $db->getColumn('SELECT member_id_
                                    FROM members
                                    WHERE pr_en_3_=?
                                    AND pr_en_4_=? AND member_id_ !=?', array($pr_en_3,$pr_en_4,$ID ));
            if ($isHave) {
              $message = 'error:::danger';
            } else {
              $fileName = $_FILES["pr_en_14"]["name"];
              $fileTMP = $_FILES["pr_en_14"]["tmp_name"];
              $ext = pathinfo($fileName, PATHINFO_EXTENSION);
              $pr_en_14 = rand() . "_" . time() . '.' . $ext;
              $myPath = 'uploads/' . $newName;

              $fileName = $_FILES["pr_en_15"]["name"];
              $fileTMP = $_FILES["pr_en_15"]["tmp_name"];
              $ext = pathinfo($fileName, PATHINFO_EXTENSION);
              $pr_en_15 = rand() . "_" . time() . '.' . $ext;
              $myPath = 'uploads/' . $newName;

              $fileName = $_FILES["pr_en_16"]["name"];
              $fileTMP = $_FILES["pr_en_16"]["tmp_name"];
              $ext = pathinfo($fileName, PATHINFO_EXTENSION);
              $pr_en_16 = rand() . "_" . time() . '.' . $ext;
              $myPath = 'uploads/' . $newName;

              $fileName = $_FILES["pr_en_17"]["name"];
              $fileTMP = $_FILES["pr_en_17"]["tmp_name"];
              $ext = pathinfo($fileName, PATHINFO_EXTENSION);
              $pr_en_17 = rand() . "_" . time() . '.' . $ext;
              $myPath = 'uploads/' . $newName;

              $fileName = $_FILES["pr_en_18"]["name"];
              $fileTMP = $_FILES["pr_en_18"]["tmp_name"];
              $ext = pathinfo($fileName, PATHINFO_EXTENSION);
              $pr_en_18 = rand() . "_" . time() . '.' . $ext;
              $myPath = 'uploads/' . $newName;
              if (move_uploaded_file($fileTMP, $myPath)) {
                $add = $db->Update(
                  'UPDATE members SET(pr_en_1_, pr_en_2_,pr_en_3_, pr_en_4_,pr_en_5_, pr_en_6_,pr_en_7_,pr_en_8_, pr_en_9_, pr_en_10_, pr_en_11_, pr_en_12_, pr_en_13_, pr_en_14_, pr_en_15_,pr_en_16_, pr_en_17_,pr_en_18_) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) WHERE member_id_=?  ',
                  array($pr_en_1, $pr_en_2, $pr_en_3, $pr_en_4, $pr_en_5, $pr_en_6, $pr_en_7, $pr_en_8, $pr_en_9, $pr_en_10, $pr_en_11, $pr_en_12, $pr_en_13, $pr_en_14, $pr_en_15, $pr_en_16, $pr_en_17, $pr_en_18,$ID)
                );
                if ($add) {
                  $message = 'ok:::success';
                } else {
                  $message = 'error:::danger';
                }
              }
            }
          } //şifre
        } //e posta
      } //boş geçilemez
    } // onaylı mı
    
    break;
    default: break;
}
?>