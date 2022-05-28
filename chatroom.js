$(".col-4 tr").slice(1).on("click",function(){
    let img=$(this).find("img").attr("src");
    let name=$(this).find("p").html();
    $(".other img").attr("src",img)
    $("h6>span").html(name);
});

function tt(text){
  let m=$(".self").clone(); $(".chat").append(m).find(".dialog").last().text(text);
    $("input").val("");
    $(".self span").remove();
    // .text(text);
}