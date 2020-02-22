<html>
<head><title>No 1</title></head>
<body>
<h2>BIODATA ENI SUSANTI</h2>
<?php
class biodata{
    var $name;
    var $age;
    var $address;
    var $is_married;
}
$bio=new biodata();
$bio->name="ENI SUSANTI";
$bio->age="23";
$bio->address="Malang";
$bio->is_married="Belum Menikah";
echo "BIODATA = ";
print_r($bio);
$myarray=Array("hobbies"=>"membaca, nonton film");
echo "array hobbies = ";
print_r($myarray);
$arrayschool=array("list_school"=>"SDN Jatisari 02 tahun 2003,SMPN 2 Pakisaji tahun 2009,SMKN 4 Malang Tahun 2012,Universitas Muhammadiyah Malang Tahun 2015");
echo "array school = ";
print_r($arrayschool);
$arrayskill=array("Skill"=>"Beginner,Advanced,Expert");
echo "array skill = ";
print_r($arrayskill);
?>
</body>
</html>