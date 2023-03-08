<?php 
    const alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y','z'];
    const alphabet_reverse = ['z','y','x','w','v','u','t','s','r','q','p','o','n','m','l','k','j','i','h','g','f','e','d','c','b','a'];
    const k = 15;
    const n = 26;
    function ceasar_encode($banro){
        $banro = strtolower($banro);
        $length = strlen($banro);
        $mahoa = '';
        for($i = 0 ; $i < $length; $i++ )
        {   
            for($j = 0;$j<n ;$j++){
               if($banro[$i] == alphabet[$j]) 
               {
                  $mahoa .= alphabet[($j+k)%26];
                  break;
               }
               if($j == 25) // khi vòng lặp đã chạy đến cuối cùng
                $mahoa .= $banro[$i]; // nếu là kí tự không nằm trong alphabet
            }           
        }            
        return $mahoa;
    }

    function ceasar_decryption($mahoa){
        $mahoa = strtolower($mahoa);
        $length = strlen($mahoa);
        $giaima = '';
        for($i = 0 ; $i < $length; $i++ )
        {
            for($j = 0;$j<n ;$j++){
               if($mahoa[$i] == alphabet[$j]) 
               {
                $tmp = $j - k;
                if ($tmp < 0) {// nếu trừ ra số âm
                    $tmp *= -1; 
                    $giaima .= alphabet_reverse[($tmp-1) % 26];
                    break;
                } else { // nếu trừ ra số dương
                    $giaima .= alphabet[($j - k) % 26];
                    break;
                }
               }
               if($j == 25) // chạy đến cuối
                    $giaima .= $mahoa[$i];
            }
        }
        return $giaima;
    }
?>