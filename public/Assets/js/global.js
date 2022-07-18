
$(document).ready(function(){

    // dropdown navbar master
    $(".data-master").click(function(){
        $(".drop-menu-master").toggle(1000);
    });

    // --- pop up tambah spk ----
    const popupMaster   = $("#popupMaster");
    const btnSpk        = $("#tambahSpk");  
    const bgPopup       = $('.background-popup'); 
    
    // show popup
    btnSpk.click(function(){
        popupMaster.show();
        $('body').css('height', '800px');
        $('body').css('overflow', 'hidden');
        bgPopup.click(function(){
            popupMaster.hide();
        });
    });    
});