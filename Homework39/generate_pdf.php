<?php

require_once __DIR__ . '/vendor/autoload.php';

$company=$_POST['company'];
$address=$_POST['address'];
$city=$_POST['city'];
$country=$_POST['country'];
$postal=$_POST['postal'];

echo "000sdfsdf";
$stylesheet = file_get_contents('mpdf.css');
$html='<main>
<div class="headerDiv">

    <div id="h_div1">
        <h1>Invoice</h1>

    </div>

    <div id="h_div2">
        <p>'.$company.'</p>
        <p>'.$address.'</p>
        <p>'.$city.'</p>
        <p>'.$country.'</p>
        <p>'.$postal.'</p>
    </div>




</div>

<div id="tableDiv">
<table style="width:100%">
    <tr>
        <th>ITEMS</th>
        <th>DESCRIPTION</th>
        <th>QUANTITY</th>
        <th>PRICE</th>
        <th>TAX</th>
        <th>AMOUNT</th>
    </tr>
    <tr>
        <td>ITEM 1</td>
        <td>Website development</td>
        <td>1</td>
        <td>$100.00</td>
        <td>1%</td>
        <td>$101.00</td>
    </tr>
</table>
</div>

<div class="detailDiv" style="display: flex">

    <div id="noteDiv">
        <p><strong>Note:</strong> Lorem ipsum dolor sit amet consectetur, Dolore fugit, quasi quis voluptate quidem voluptatibus! </p>
    </div>

    <div id="totalAmount">
    <div>
    <p>Total:</p>
    <p>$100.00</p>
</div>
    </div>


</div>


</main>';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($html,2);
$mpdf->Output();

