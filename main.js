const time = 300;

const $aside = $(".page-main > aside");
const $asideBotton = $aside.find("button")
    .on("click",()=>{
        $aside.toggleClass("open");
        if($aside.hasClass("open")){
            $aside.stop(true).animate({
                left: "-180px"
            },time,"easeOutBack");
            $asideBotton.find("img")
            .attr("src","img/btn_close.png");
        } else {
            $aside.stop(true).animate({
                left: "-350px"
            },time,"easeInBack");
            $asideBotton.find("img")
            .attr("src","img/btn_open.png");
        };
    });