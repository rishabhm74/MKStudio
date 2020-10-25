$(document).ready(function(){  
    var scrollLink =  $('.scroll');
    scrollLink.click(function(e){
        e.preventDefault();
        $('body,html').animate({
            scrollTop: $(this.hash).offset().top - 60
        }, 700);

        if(window.matchMedia("(max-width: 600px)").matches){
            if($(".secondaryNavbar").css("display") == "block"){
                $(".secondaryNavbar").css({"display" : "none"});
            }
        }
        
    })
})


$(function(){
    $('.packageControl').click(function(){
        $('.overlayContainer').css({"display" : "flex"});
    })
})

$(function(){
    $('.closePackageControl img').click(function(){
        $('.overlayContainer').css({"display" : "none"});
    })
})


$(function(){
    $('.mobileMenuIcon').click(function(){
        if(window.matchMedia("(max-width: 600px)").matches){
            if($(".secondaryNavbar").css("display") == "none"){
                $(".secondaryNavbar").css({"display" : "block"});
            }
            else{
                $(".secondaryNavbar").css({"display" : "none"});
            }
        }

    })
})




$(function(){
    $(".bookingForm").submit(function(e){
        e.preventDefault();
        
        
        $.ajax({
            url: "contact.php",
            type: "POST",
            data: $(this).serialize(),
            success: function(data){
                $(".mailNotification").css({"background-color" : "#45dd31"});
                $(".mailNotification").html("Your email has been sent successfully!");
                if(window.matchMedia("(max-width: 600px)").matches){
                    $(".mailNotification").css({"margin-left" : "0"});
                    setTimeout(function(){
                        $(".mailNotification").css({"margin-left" : "-21.5rem"});
                    }, 1500);
                }
                else{
                    $(".mailNotification").css({"margin-left" : "0"});
                    setTimeout(function(){
                        $(".mailNotification").css({"margin-left" : "-32rem"});
                    }, 1500);
                }
                $(".bookingForm input").val('');
                window.scrollTo({ top: 0, behavior: 'smooth' });
            },
            error: function(){
                $(".mailNotification").css({"background-color" : "#f1464f"});
                $(".mailNotification").html("Oops, looks like your mail wasn't sent!");
                if(window.matchMedia("(max-width: 600px)").matches){
                    $(".mailNotification").css({"margin-left" : "0"});
                    setTimeout(function(){
                        $(".mailNotification").css({"margin-left" : "-21.5rem"});
                    }, 1500);
                }
                else{
                    $(".mailNotification").css({"margin-left" : "0"});
                    setTimeout(function(){
                        $(".mailNotification").css({"margin-left" : "-32rem"});
                    }, 1500);
                }
                $(".bookingForm input").val('');
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        });
    });
});



$(function(){
    $(".packagesListContainer li").click(function(){
        $('.overlayContainer').css({"display" : "none"});
        $("#package_input").val($(this).text().replace(/ /g,''));
        var temp = document.getElementById("bookingContainer").offsetTop;
        var temp2 = temp  - 60;
        window.scrollTo({
            top: temp2,
            behavior: 'smooth',
        });
    })
})



$(function() {
    $(window).scroll(function() {
        if(window.matchMedia("(max-width: 600px)").matches){
            // nothing
        } else{
            var x = $(".secondaryNavbar").position();
            if( x.top > 76){
                $(".secondaryNavbar").css({"box-shadow" : "0 7px 12px  #00000010"})
            }else{
                $(".secondaryNavbar").css({"box-shadow" : "0 7px 12px  #00000000"})
            }
        }
    })
})