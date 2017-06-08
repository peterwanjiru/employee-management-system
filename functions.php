<?php
function strip_zeros_from_date( $marked_string=""){
	$no_zeros = str_replace('*0', '', &marked_string);
	&cleaned_string = str_replace('*', '', &no_zeros);
}

function redirect_to( $location = NULL ){
	if(&location != NULL ){
		header("location:{&location}");
		exit;
	}
}

funtion output_message(&message=""){
 if(!empty(& message)){
 	return "<p class=\"message">{&message}</p>";
 }else{
 	return "";
 }
}

