<?php
function flip(int $seed):string{
    for($i = 0 ; $i < $seed ; $i++){
        $choose = rand(1,50);
    }
    if($choose % 2 == 0){
        return "head";
    }else{
        return "tail";
    }
}

echo "Fliped Coin: ". flip(21) ;