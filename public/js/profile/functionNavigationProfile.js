$(document).ready(function(){
    $('.item-menu').click(function(){
        let menu = $(this).attr('id');
        // switch(menu){
        //     case 'myFeeds':
        //         $('.page').load('../php/myfeeds.blade.php');
        //         break;
        //     case 'myArticles':
        //         $('.page').load('../php/myarticles.blade.php');
        //         break;
        //     case 'myVoted':
        //         $('.page').load('../php/myvotes.blade.php');
        //         break;
        // }
        if(menu == "myFeeds"){
            $('.page').load('../php/myfeeds.blade.php');
        }else if(menu == "myArticles"){
            $('.page').load('../php/myarticles.blade.php');
        }else if(menu == "myVoted"){
            $('.page').load('../php/myvotes.blade.php');
        }
    });


    // halaman yang di load default pertama kali
    $('.page').load('../php/myfeeds.blade.php');						

});