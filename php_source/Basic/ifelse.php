<?php
if(10 < 1){
    echo '<p> we stopped at if</>';
}
elseif(10 < 4){
    echo '<p>we stopped at the first else if.</p>';
}
elseif(10 < 11){
    echo '<p>we stopped at the second else if.</p>';
}
elseif(10 < 20){
    echo '<p>we stopped at the 3rd else if. </p>';
}
else{
    echo '<p>None of the conditions are true, we never stopped, so this is the else</p>';
}

echo "out of the if";

$is_logged_in = true;
if($is_logged_in){
    echo '<h3>Welcome back, user!</h3>';
}
else{
    echo '<h3>Welcome to the site!</h3>';
}

?>