<?php
# Q1
/*
echo strtoupper("yousef");
echo "<br>";
echo strtolower("YOUSEF");
echo "<br>";
echo ucfirst("yousef");
echo "<br>";
echo lcfirst("YOUSEF");
echo "<br>";
echo"<br>";*/


#Q2
/*
$t ='085119';
echo rtrim(chunk_split($t,2,":"),":");

echo"<br>";
echo "<br>";*/



#Q3
/*
$x = 'I am a full stack developer at orange coding academy';

if(strpos($x,'orange') == true){
    echo "word found";
}else{
    echo "word not found";
}
echo "<br>";
echo "<br>";*/

#Q4
/*
$a = 'www.orange.com/index.php';
echo basename($a);
echo "<br>";
echo "<br>";*/

#Q5
/*
$b= 'info@orange.com';
echo strstr($b,'@',true);
echo "<br>";
echo "<br>";*/


#Q6
/*
$s= 'info@orange.com';
echo substr($b,-3);
echo "<br>";
echo "<br>";*/

#Q7
/*
$Pass= '1234567890ABCDEFGHIJKLMNOPabcdesghijklmnop';
echo substr(str_shuffle($Pass),0,16);
echo "<br>";
echo "<br>";*/

#Q8
/*
$q= 'That new trainee is so genius';
$R= "the";
$f = strstr($q,' ',false);
echo $R.$f;
echo "<br>";
echo "<br>";*/


#Q9
/*
$s1='dragonball';
$s2='dragonboll';
$position = strspn($s1 ^ $s2, "\0");
printf(
    'First difference at position %d: "%s" vs "%s"',
    $position, $string1[$position], $string2[$position]
);
echo "<br>";
echo "<br>";*/

#Q10
/*
$s = 'Twinkle twinkle, little star.';
$a = explode(' ',$s);
echo var_dump($a);
echo "<br>";
echo "<br>";*/

#Q11
/*
$c='M';
echo ++$c;
echo "<br>";
echo "<br>";*/

#Q12
/*
$s = 'The brown fox';
$s2 ='quick';
$p = 4;
echo 'a. '. substr_replace( $s, $s2.' ', $p, 0);
echo '<br> b. '. strstr($s,' ',true);
echo "<br>";
echo "<br>";*/

#Q13
/*
$num = 0000657022.24;
echo str_replace(0, '',$num);
echo "<br>";
echo "<br>";*/

#Q14
/*
$s= 'The quick brown fox jumps over the lazy dog';
$r ='fox';
echo str_replace($r,'',$s);
echo "<br>";
echo "<br>";*/

#Q15
/*
$s = 'The quick brown fox jumps----over the lazy dog---';
echo str_replace('-', '', $s);
echo '<br>'. trim($s,"-");
echo "<br>";
echo "<br>"*/

#Q16
/*
$num = '\"\1+2/3*2:2-3/4*3';
echo preg_replace("/[^0-9]/",' ',$num);
echo "<br>";
echo "<br>"*/

#Q17
/*
$s = 'The quick brown fox jumps over the lazy dog';
$w = str_word_count($stringFox4, 1);
$s2='';
for ($i=0;$i<5;$i++){
    $s2=$s2. " ". $w[$i];
};
echo $s2;
echo "<br>";
echo "<br>"*/

#Q18
/*
$num = '2,543.12';
echo str_replace(",", '', $num);
echo "<br>";
echo "<br>"*/

#Q19
/*
$c = 'a';
$a = 'a';
for ($i=1;$i<26;$i++){
    $a=$a." ". ++$c;
}
echo $a;*/

#--------------------------------------------------------------------------------------

#Q1
/*
function leapYear($year){
    if((0 == $year % 4) ){
        echo "$year : This year is  a leap year <br><br>";
    }else {
        echo "$year : This year is not a leap year <br><br>";
    } 
}
leapYear(2013);*/

#Q2
/*
function season($temp){
    if(($temp <20 ) ){
    echo "We are in the winter <br><br>";
    }else {
    echo "We are in the summer <br><br>"; 
    } 
}
season(27);*/

#Q3
/*
function sum($n1,$n2){
    if(($n1==$n2) ){
        echo "The sumation of $n1 & $n2 = ". ($n1+$n2)*3;
    }else {
        echo "The sumation of $n1 & $n2 = ". ($n1+$n2) ; 
    } 
}
sum(2,2);*/

#Q4
/*
function sum($n1,$n2){
    if(($n1+$n2)==30 ){
        echo "The sumation of $n1 & $n2 = ". ($n1+$n2);
    }else {
        echo "False"; 
    } 
}
sum(15,15);*/

#Q5
/*
function mult($n){
    if($n%3==0 ){
        echo "True";
    }    
    else{
        echo "False"; 
    } 
}
mult(30);*/

#Q6
/*
function cR($n){
    if($n>19 && $n<51 ){
        echo "True";
    }    
    else {
        echo "False"; 
    } 
}
cR(27);*/

#Q7
/*
function largest($n1,$n2,$n3){
    if($n1>$n2 && $n1>$n3 ){echo "The largest number is : $n1";
    }else if($n2>$n1 && $n2>$n3 ){
        echo "The largest number is : $n2";
    }       
    else {
        echo "The largest number is : $n3";
    } 
}
largest(1,5,9);*/

#Q8
/*
function elecBill($unites){
    if($unites<51 && $unites>=0){echo "The bill =  ". $unites*2.5;}
    else if($unites>51 && $unites<151 ){echo "The bill =  ". $unites*5;}
    else if($unites>150 && $unites<251 ){echo "The bill =  ". $unites*6.2;}  
    else if($unites>250 ){echo "The bill =  ". $unites*6.2;}       
    else {echo  "Unites Cant be negative value";} 
}
elecBill(50);*/

#Q9
/*
function calc($n1,$n2,$operation){
    if($operation=='+'){echo "The sum =  ". $n1+$n2;}
    else if($operation=='-'){echo "The sub =  ". $n1-$n2;}
    else if($operation=='*'){echo "The mult =  ". $n1*$n2;}
    else if($operation=='/'){echo "The division =  ". $n1/$n2;}       
    else {echo "Please enter a valid operation(+ , - , / , *)";} 
}
calc(1,2,'+');*/

#Q10
/*
function vote($Age){
    if($Age>17){echo "You can vote";} 
    else if($Age<17 && $Age>0){echo "You can't vote";} 
    else {echo "Age can't be zero or less";}    
}
vote(15);*/

#Q11
/*
function type($n){
    if($n>0){echo "( $n ) is a positive number";}    
    else if($n<0){echo "( $n ) is a nigative number";}    
    else {echo "The number you enterd is a Zero";} 
}
type(0);*/

#Q12
/*
function grade($Array){

    $ave=array_sum($Array)/count($Array);
    if($ave<60 && $ave>=0){echo  "Your grade is : ( F )" ; }
    else if($ave<70 && $ave>59){echo  "Your grade is : ( D )" ; }
    else if($ave<80 && $ave>69){echo  "Your grade is : ( C )" ; }
    else if($ave<90 && $ave>79){echo  "Your grade is : ( B )" ; }
    else if($ave<=100 && $ave>89){echo  "Your grade is : ( A )" ; }
    else {echo  "Please check that you entered the your grades correctly" ;} 

}
grade([60,86,95,63,55,74,79,62,50]);*/


?>