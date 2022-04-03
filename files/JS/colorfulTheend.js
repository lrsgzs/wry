var nm = 0
var colors = ["red","blue","yellow","orange","purple","green","pink"]
window.setInterval(function(){
    nm++
    nm = nm%colors.length
    document.getElementsByTagName("colorfulText")[0].style.color = colors[nm]
    console.log(nm,colors[nm])
},1000)