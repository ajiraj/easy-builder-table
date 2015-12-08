<?php
class operations
{

    function save_to_file($data)
    {
        $file='output.html';
        $data=str_replace('<tr',"\r  <tr",$data);
        $data=str_replace('</tr',"\r  </tr",$data);
       // $data=str_replace('</',"\r</",$data);
        $data=str_replace('<td',"\r      <td",$data);
        $data=str_replace('</td',"\r      </td",$data);
        $data=str_replace('<div></div>',"\r",$data);
        $data=str_replace('<div',"\r             <div",$data);
        if(file_put_contents($file,$data))
        return true;
        return false;
    }

}

?>