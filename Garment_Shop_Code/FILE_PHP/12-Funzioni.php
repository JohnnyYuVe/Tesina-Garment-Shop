<?php




function SEARCH_USER( $Pass,$Username ){

									/* TRASFORMO IL DOCUMENTO XML IN UN OGGETTO */
									$DOC=simplexml_load_file("http://localhost/php_program/GarmentShop/Garment_Shop_Code/FILE_XML/File_XML/1-Data_Account.xml") or die("Error: Cannot create object");
									$INDEX_END=count($DOC);
									
									for($INDEX_START=0; $INDEX_START<$INDEX_END; $INDEX_START++){
										
										$ARR_USER=GET_USER_INFO($DOC,$INDEX_START);
										if(strcmp($ARR_USER[5],$Username)==0 && strcmp($ARR_USER[6],$Pass)==0){
											PRINT_USER_INFO( $ARR_USER );
											LOAD_USER( $ARR_USER );
											return 1;
										}
									}
									return 0;				
}




function GET_USER_INFO( $ARR_USER, $INDEX ){
	
	$Array[0]=strval ( $ARR_USER->Utente[$INDEX]["Account_ID"] );

	$Array[1]=strval ( $ARR_USER->Utente[$INDEX]->Credenziali->Nome );
	$Array[2]=strval ( $ARR_USER->Utente[$INDEX]->Credenziali->Cognome );
	$Array[3]=strval ( $ARR_USER->Utente[$INDEX]->Credenziali->C_F );
	$Array[4]=strval ( $ARR_USER->Utente[$INDEX]->Credenziali->Email );
	$Array[5]=strval ( $ARR_USER->Utente[$INDEX]->Credenziali->Username );
	$Array[6]=strval ( $ARR_USER->Utente[$INDEX]->Credenziali->Password );
	$Array[7]=strval ( $ARR_USER->Utente[$INDEX]->Credenziali->Indirizzo );

	$Array[8]=strval ( $ARR_USER->Utente[$INDEX]->Misure_corpo->Circ_collo );
	$Array[9]=strval ( $ARR_USER->Utente[$INDEX]->Misure_corpo->Circ_torace );
	$Array[10]=strval ( $ARR_USER->Utente[$INDEX]->Misure_corpo->Circ_fianchi );
	$Array[11]=strval ( $ARR_USER->Utente[$INDEX]->Misure_corpo->Circ_bicipite );
	$Array[12]=strval ( $ARR_USER->Utente[$INDEX]->Misure_corpo->Circ_polso );
	$Array[13]=strval ( $ARR_USER->Utente[$INDEX]->Misure_corpo->Circ_coscia );
	$Array[14]=strval ( $ARR_USER->Utente[$INDEX]->Misure_corpo->Altezza );
	$Array[15]=strval ( $ARR_USER->Utente[$INDEX]->Misure_corpo->Lung_spalla );
	$Array[16]=strval ( $ARR_USER->Utente[$INDEX]->Misure_corpo->Lung_manica );
	$Array[17]=strval ( $ARR_USER->Utente[$INDEX]->Misure_corpo->Lung_gamba );
	$Array[18]=strval ( $ARR_USER->Utente[$INDEX]->Misure_corpo->Cavallo );
	$Array[19]=strval ( $ARR_USER->Utente[$INDEX]->Misure_corpo->Larg_spalla );

	$Array[20]=strval ( $ARR_USER->Utente[$INDEX]->Info_account->Account_liv );
	$Array[21]=strval ( $ARR_USER->Utente[$INDEX]->Info_account->Account_exp );
	$Array[22]=strval ( $ARR_USER->Utente[$INDEX]->Info_account->Account_crediti );

	  return $Array;   
 }




 function PRINT_USER_INFO( $ARR_USER ){
	
	echo	$ARR_USER[0]."</br>";

	echo	$ARR_USER[1]."</br>";
	echo	$ARR_USER[2]."</br>";
	echo	$ARR_USER[3]."</br>";
	echo	$ARR_USER[4]."</br>";
	echo	$ARR_USER[5]."</br>";
	echo	$ARR_USER[6]."</br>";
	echo	$ARR_USER[7]."</br>";

	echo	$ARR_USER[8]."</br>";
	echo	$ARR_USER[9]."</br>";
	echo	$ARR_USER[10]."</br>";
	echo	$ARR_USER[11]."</br>";
	echo	$ARR_USER[12]."</br>";
	echo	$ARR_USER[13]."</br>";
	echo	$ARR_USER[14]."</br>";
	echo	$ARR_USER[15]."</br>";
	echo	$ARR_USER[16]."</br>";
	echo	$ARR_USER[17]."</br>";
	echo	$ARR_USER[18]."</br>";
	echo	$ARR_USER[19]."</br>";

	echo	$ARR_USER[20]."</br>";
	echo	$ARR_USER[21]."</br>";
	echo	$ARR_USER[22]."</br></br></br>";  
}




function LOAD_USER( $ARR_USER ){
	$_SESSION["ACCOUNT_ID"] = $ARR_USER[0];

	$_SESSION['NOME'] = $ARR_USER[1];
	$_SESSION['COGNOME'] = $ARR_USER[2];
	$_SESSION['C_F'] = $ARR_USER[3];
	$_SESSION['EMAIL'] = $ARR_USER[4];
	$_SESSION['USERNAME'] = $ARR_USER[5];
	$_SESSION['PASSWORD'] = $ARR_USER[6];
	$_SESSION['INDIRIZZO'] = $ARR_USER[7];

	$_SESSION['CIRC_COLLO'] = $ARR_USER[8];
	$_SESSION['CIRC_TORACE'] = $ARR_USER[9];
	$_SESSION['CIRC_FIANCHI'] = $ARR_USER[10];
	$_SESSION['CIRC_BICIPITE'] = $ARR_USER[11];
	$_SESSION['CIRC_POLSO'] = $ARR_USER[12];
	$_SESSION['CIRC_COSCIA'] = $ARR_USER[13];
	$_SESSION['ALTEZZA'] = $ARR_USER[14];
	$_SESSION['LUNG_SPALLA'] = $ARR_USER[15];
	$_SESSION['LUNG_MANICA'] = $ARR_USER[16];
	$_SESSION['LUNG_GAMBA'] = $ARR_USER[17];
	$_SESSION['CAVALLO'] = $ARR_USER[18];
	$_SESSION['LARG_SPALLA'] = $ARR_USER[19];

	$_SESSION['ACCOUNT_LIV'] = $ARR_USER[20];
	$_SESSION['ACCOUNT_EXP'] = $ARR_USER[21];
	$_SESSION['ACCOUNT_CREDITI'] = $ARR_USER[22]; 
}




function TERMINATE_USER_SESSION(){
	$_SESSION = array();
	session_destroy();
}
function EDIT_USER( ){ }
function DELETE_USER( ){ }




function SEARCH_ITEM( ){ }
function LOAD_ITEM( ){ }
function EDIT_ITEM( ){ }
function DELETE_ITEM( ){ }




function SEARCH_CART( ){ }
function LOAD_CART( ){ }
function EDIT_CART( ){ }
function DELETE_CART( ){ }




function SEARCH_FAV( ){ }
function LOAD_FAV( ){ }
function EDIT_FAV( ){ }
function DELETE_FAV( ){ }
 



?>