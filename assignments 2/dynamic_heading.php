<?php

function dynamic_heading($color,$logo_name,$navbar_items1,$navbar_items2,$navbar_items3){
    echo "<div style='background:$color;font-family:arial;color:white;padding:20px;display:flex;align-items-center;'>
        <h4 style='margin:0;padding:0;'>$logo_name</h4>  
        <nav style='text-align:right;width:100%;display:flex;align-items-center;justify-content:flex-end'>
            <a style='margin-right:10px;display:block;'>$navbar_items1</a>
            <a style='margin-right:10px;display:block;'>$navbar_items2</a>
            <a style='margin-right:10px;display:block;'>$navbar_items3</a>
        </nav>
    </div>";
}

dynamic_heading('gray','freelancerpanna','Home','About','Contact');


?>