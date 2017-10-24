<center>
<?php
class bangundatar {
public $panjang,$lebar,$sisi,$alas,$tinggi;
public function set_bangundatar($p,$l,$s,$a,$t){
	$this->panjang = $p;
	$this->lebar = $l;
	$this->sisi = $s;
	$this->alas = $a;
	$this->tinggi = $t;
}
public function get_bangundatar(){
	return $this->panjang * $this->lebar;
}
public function get_bangundatar1(){
	return $this->sisi * 4;
}
public function get_bangundatar2(){
	return $this->alas * $this->tinggi /2;
}
}
$bangundatar1 = new bangundatar;
$bangundatar1->set_bangundatar(10,5,5,20,10);
echo "persegi panjang: ".$bangundatar1->get_bangundatar().'<br>'.
	 "persegi: ".$bangundatar1->get_bangundatar1().'<br>'.
	 "segitiga: ".$bangundatar1->get_bangundatar2().'<br>';
	 ?>
	 </center>