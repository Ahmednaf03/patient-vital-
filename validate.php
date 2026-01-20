<?php

// Higher Order Function to validate vitals 
function validateVital($vitalData, $ruleFunction){
    return $ruleFunction($vitalData);
}

?>