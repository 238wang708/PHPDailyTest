<?php
先把字符串转化为数组
 $res="Hello world It's a beautiful day";
 zu($res);
 function zu($res){
foreach ($res as $key => $value) {
        $array[]=$value;
}
 var_dump($array);
    
 }

//第二题
 $array=['hello','world','!'];
 $array=implode($array," ");
 var_dump($array);


 //第三题
 //
 $array=[1234567890];
 echo "(1,234,567,890)";
 $res =implode($array," ");
 $res1=strlen($res);
 for ($i=0; $i <=$res1 ; $i++) { 
   
     if($i==0){
      $res2[]= $res[$i].',';
     
     }



 }





 //数组
 //
 $array=[1,2,3];
   $res=array_unshift($array, 2);
   var_dump($res);


?>