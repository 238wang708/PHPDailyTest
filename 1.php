<?php
$str="Have you ever gone shopping and" ;
function  start($str){
   $len=strlen($str);
   echo "长度为".$len;
   $arr=[];
   for ($i=0; $i < $len ; $i++) { 
         if(isset($arr[$str[$i]])) {
             $arr[$str[$i]]++;
         }
         else{
            $arr[$str[$i]]=1;
         }

         if ($arr[$str[$i]]>=3) {
              return $str[$i];
         }
    } 
    return $arr;
}
print_r("最先出现3次的字符串是".start($str));
?>
