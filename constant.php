<?php
// define('NAMA', 'Aditya Pratama Suherlan');

// echo NAMA;

// echo "<br>";
// const UMUR = 20;
// echo UMUR;

// class Coba
// {
//   const NAMA = 'Aditya';
// }
// echo Coba::NAMA;

echo __LINE__;
echo "<hr>";
echo __FILE__;
echo "<hr>";
function coba()
{
  return __FUNCTION__;
}
echo coba();
echo "<hr>";
class coba
{
  public $kelas = __CLASS__;
}
$obj = new coba;
echo $obj->kelas;
