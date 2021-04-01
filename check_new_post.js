function chk(){
	var tpc=document.fm.tpc.value; var tta=document.fm.tta.value;
	if (tpc==''){
		alert('please fill in all information'); document.fm.tpc.focus();
	}
	else if (tta==0){
		alert('please fill in all information'); document.fm.tta.focus();
	}
	else{
		fm.submit();
	}
}