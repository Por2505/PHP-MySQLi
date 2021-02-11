<?php
$animals = ["cat"=>"แมว","dog"=>"หมา","pig"=>"หมู"];

print($pets["cat"]."<br>");

$num = [10,20,30,60,80,70];

$total = count($num);
print($total."<br>");
for($index = 0;$index<3;$index++){
    print($num[$index]."<br>");
}

while(list($key,$value)=each($pets)){
    print("Key = ".$key."Value = ".$value."<br>");
}

while (list($key, $val) = each($animals))
  {
  echo "$key => $val<br>";
  }


foreach($animals as $key=>$value)
{
    print($key." = ".$value."<br>");
}

$product = array(
    array("keyboard","คีย์บอร์ด",1500),
    array("mouse","เมาส์",900),
    array("speaker","ลำโพง",500)
);

print($product[0][1]);

for($row=0;$row<count($product);$row++){
    print("แถวที่ ".$row."<br>");
    for($column=0;$column<count($product[$row]);$column++){
        print("col ".$column."<br>");
    }
}

foreach($product as $prod){
    print($prod[1]."<br>");
}

?>