<div class="main">
    <div class="text">
        GameDevs
    </div>
    <div class="title">
        by GameStudio
    </div>
    <div class="bar">
        <div id="fill"></div>
    </div>
</div>

<script type="text/javascript">
    var progress = 0;
    document.onreadystatechange = function(){
        if(document.readyState == "interactive"){
            var allElement = $("*");
            var length = allElement.length;
            for (var i = 0; i < length; i++) {
                set_element(allElement[i], length);
            }
        }
    }

    function set_element(element, totalElement){
        var percentage = 200 / totalElement;
        if($(element).length == 1){
            $("#fill").animate({width:progress+(30*percentage)+"%"},1000,function(){
                if (document.getElementById('fill').style.width== "100%") {
                    $(".main").fadeOut(500);
                }
            });
            progress= progress + percentage;
        }
    }
</script>